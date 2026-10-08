<?php

use Carbon\CarbonImmutable;
use Filament\Facades\Filament;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\OpenHours\OpenHoursPlugin;
use JeffersonGoncalves\Filament\OpenHours\Pages\ManageOpenHours;
use JeffersonGoncalves\Filament\OpenHours\Widgets\OpenHoursWidget;
use JeffersonGoncalves\OpenHours\Settings\OpenHoursSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the page and the widget on the panel', function () {
    $panel = Filament::getPanel('test');

    expect($panel->getPages())->toContain(ManageOpenHours::class)
        ->and($panel->getWidgets())->toContain(OpenHoursWidget::class)
        ->and(ManageOpenHours::getNavigationGroup())->toBe('Settings')
        ->and(OpenHoursPlugin::make()->getId())->toBe('filament-open-hours');
});

it('saves the week, the exceptions and the timezone', function () {
    Livewire::test(ManageOpenHours::class)
        ->fillForm([
            'timezone' => 'Europe/Lisbon',
            'week.saturday' => [['range' => '09:00-13:00']],
            'exceptions' => [
                ['date' => '2026-12-25', 'yearly' => true, 'hours' => [], 'note' => 'Christmas'],
                ['date' => '2026-12-24', 'yearly' => false, 'hours' => [['range' => '09:00-12:00']], 'note' => ''],
            ],
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(OpenHoursSettings::class)->refresh();

    expect($settings->timezone)->toBe('Europe/Lisbon')
        ->and($settings->week['saturday'])->toBe(['09:00-13:00'])
        ->and($settings->week['monday'])->toBe(['09:00-18:00'])
        ->and($settings->exceptions)->toBe([
            ['date' => '12-25', 'hours' => [], 'note' => 'Christmas'],
            ['date' => '2026-12-24', 'hours' => ['09:00-12:00'], 'note' => null],
        ]);
});

it('shows a yearly exception as this year with the toggle on', function () {
    $settings = app(OpenHoursSettings::class);
    $settings->exceptions = [['date' => '12-25', 'hours' => [], 'note' => 'Christmas']];
    $settings->save();

    $state = Livewire::test(ManageOpenHours::class)->get('data.exceptions');

    expect(array_values($state)[0])->toMatchArray(['date' => now()->format('Y').'-12-25', 'yearly' => true, 'note' => 'Christmas']);
});

it('rejects malformed ranges', function () {
    Livewire::test(ManageOpenHours::class)
        ->fillForm(['week.monday' => [['range' => '9h-18h']]])
        ->call('save')
        ->assertHasFormErrors();

    expect(app(OpenHoursSettings::class)->refresh()->week['monday'])->toBe(['09:00-18:00']);
});

it('rejects overlapping ranges', function () {
    Livewire::test(ManageOpenHours::class)
        ->fillForm(['week.monday' => [['range' => '09:00-12:00'], ['range' => '11:00-14:00']]])
        ->call('save')
        ->assertNotified();

    expect(app(OpenHoursSettings::class)->refresh()->week['monday'])->toBe(['09:00-18:00']);
});

it('shows whether it is open in the widget', function () {
    $this->travelTo(CarbonImmutable::parse('2026-10-07 10:00', 'America/Sao_Paulo'));

    Livewire::test(OpenHoursWidget::class)
        ->assertSee('Open')
        ->assertSee('Open now · closes at 18:00');

    $this->travelTo(CarbonImmutable::parse('2026-10-07 20:00', 'America/Sao_Paulo'));

    Livewire::test(OpenHoursWidget::class)
        ->assertSee('Closed · opens Thursday at 09:00');
});

it('uses translated labels', function () {
    app()->setLocale('pt_BR');

    expect(ManageOpenHours::getNavigationLabel())->toBe('Horário de funcionamento');
});
