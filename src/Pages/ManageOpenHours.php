<?php

namespace JeffersonGoncalves\Filament\OpenHours\Pages;

use Carbon\CarbonImmutable;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Exceptions\Halt;
use JeffersonGoncalves\Filament\OpenHours\OpenHoursPlugin;
use JeffersonGoncalves\OpenHours\OpenHours;
use JeffersonGoncalves\OpenHours\Settings\OpenHoursSettings;
use Throwable;

class ManageOpenHours extends SettingsPage
{
    protected static string $settings = OpenHoursSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clock';

    public const RANGE_PATTERN = '/^\d{2}:\d{2}-\d{2}:\d{2}$/';

    public static function getNavigationLabel(): string
    {
        return __('filament-open-hours::open-hours.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return OpenHoursPlugin::get()->getNavigationGroup();
    }

    public function getTitle(): string
    {
        return __('filament-open-hours::open-hours.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-open-hours::open-hours.sections.week.heading'))
                    ->description(__('filament-open-hours::open-hours.sections.week.description'))
                    ->schema([
                        Select::make('timezone')
                            ->label(__('filament-open-hours::open-hours.fields.timezone'))
                            ->placeholder(__('filament-open-hours::open-hours.fields.timezone_default', ['timezone' => config('app.timezone')]))
                            ->options(fn () => array_combine(timezone_identifiers_list(), timezone_identifiers_list()))
                            ->searchable(),
                        Grid::make(['default' => 1, 'md' => 2, 'xl' => 4])
                            ->schema(array_map(fn (string $day) => self::rangesField("week.{$day}")
                                ->label(self::dayName($day)), OpenHours::DAYS)),
                    ]),

                Section::make(__('filament-open-hours::open-hours.sections.exceptions.heading'))
                    ->description(__('filament-open-hours::open-hours.sections.exceptions.description'))
                    ->schema([
                        Repeater::make('exceptions')
                            ->hiddenLabel()
                            ->addActionLabel(__('filament-open-hours::open-hours.fields.add_exception'))
                            ->defaultItems(0)
                            ->columns(['default' => 1, 'md' => 4])
                            ->schema([
                                DatePicker::make('date')
                                    ->label(__('filament-open-hours::open-hours.fields.date'))
                                    ->required(),
                                Toggle::make('yearly')
                                    ->label(__('filament-open-hours::open-hours.fields.yearly'))
                                    ->inline(false),
                                self::rangesField('hours')
                                    ->label(__('filament-open-hours::open-hours.fields.hours')),
                                TextInput::make('note')
                                    ->label(__('filament-open-hours::open-hours.fields.note')),
                            ]),
                    ]),
            ]);
    }

    protected static function rangesField(string $name): Repeater
    {
        return Repeater::make($name)
            ->simple(
                TextInput::make('range')
                    ->placeholder('09:00-18:00')
                    ->regex(self::RANGE_PATTERN)
                    ->required(),
            )
            ->defaultItems(0)
            ->addActionLabel(__('filament-open-hours::open-hours.fields.add_range'))
            ->helperText(__('filament-open-hours::open-hours.fields.ranges_help'));
    }

    protected static function dayName(string $day): string
    {
        return CarbonImmutable::parse($day)->locale(app()->getLocale())->translatedFormat('l');
    }

    /**
     * Stored `m-d` (every year) dates become this year's date + the yearly toggle.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['exceptions'] = array_map(fn (array $exception) => strlen((string) $exception['date']) === 5
            ? ['date' => now()->format('Y').'-'.$exception['date'], 'yearly' => true] + $exception
            : ['yearly' => false] + $exception, (array) ($data['exceptions'] ?? []));

        return $data;
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data = self::normalize($data);

        try {
            OpenHours::definition($data['week'], $data['exceptions']);
        } catch (Throwable $e) {
            Notification::make()
                ->danger()
                ->title(__('filament-open-hours::open-hours.invalid'))
                ->body($e->getMessage())
                ->send();

            throw new Halt;
        }

        return $data;
    }

    /**
     * Form state to the laravel-open-hours shape.
     *
     * @param  array<string, mixed>  $data
     * @return array{timezone: string, week: array<string, list<string>>, exceptions: list<array{date: string, hours: list<string>, note: string|null}>}
     */
    public static function normalize(array $data): array
    {
        $week = [];
        foreach (OpenHours::DAYS as $day) {
            $week[$day] = array_values(array_filter((array) ($data['week'][$day] ?? []), 'filled'));
        }

        $exceptions = [];
        foreach ((array) ($data['exceptions'] ?? []) as $exception) {
            $date = CarbonImmutable::parse((string) $exception['date']);
            $exceptions[] = [
                'date' => ($exception['yearly'] ?? false) ? $date->format('m-d') : $date->format('Y-m-d'),
                'hours' => array_values(array_filter((array) ($exception['hours'] ?? []), 'filled')),
                'note' => filled($exception['note'] ?? null) ? (string) $exception['note'] : null,
            ];
        }

        return ['timezone' => (string) ($data['timezone'] ?? ''), 'week' => $week, 'exceptions' => $exceptions];
    }
}
