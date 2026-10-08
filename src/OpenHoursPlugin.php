<?php

namespace JeffersonGoncalves\Filament\OpenHours;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\OpenHours\Pages\ManageOpenHours;
use JeffersonGoncalves\Filament\OpenHours\Widgets\OpenHoursWidget;

class OpenHoursPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    protected bool $hasWidget = true;

    protected ?string $navigationGroup = null;

    public function getId(): string
    {
        return 'filament-open-hours';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([ManageOpenHours::class]);
        }

        if ($this->hasWidget) {
            $panel->widgets([OpenHoursWidget::class]);
        }
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;

        return $this;
    }

    public function widget(bool $condition = true): static
    {
        $this->hasWidget = $condition;

        return $this;
    }

    public function navigationGroup(?string $group): static
    {
        $this->navigationGroup = $group;

        return $this;
    }

    public function getNavigationGroup(): ?string
    {
        return $this->navigationGroup;
    }
}
