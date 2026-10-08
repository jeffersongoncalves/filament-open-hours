## Filament Open Hours

Filament settings page and dashboard widget for jeffersongoncalves/laravel-open-hours: weekly schedule, holidays/special dates and timezone, stored with Spatie Laravel Settings.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-open-hours:"^2.0"
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\OpenHours\OpenHoursPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            OpenHoursPlugin::make()
                // ->navigationGroup('Settings')
                // ->settingsPage(false)
                // ->widget(false)
                ,
        ]);
}
</code-snippet>
@endverbatim

### Architecture
- `OpenHoursPlugin` registers `Pages\ManageOpenHours` (SettingsPage for `JeffersonGoncalves\OpenHours\Settings\OpenHoursSettings`) and `Widgets\OpenHoursWidget`
- Query the schedule with `JeffersonGoncalves\OpenHours\OpenHours` (`isOpen()`, `nextOpen()`, `statusText()`); in Blade use `@openhours` and `<x-open-hours::status />`
- Translations live under `filament-open-hours::open-hours.*`

### Best Practices
- Ranges are `HH:MM-HH:MM`; yearly exceptions are stored as `m-d`, one-off as `Y-m-d`
- Validate custom input with `OpenHours::definition($week, $exceptions)` (throws on overlapping/invalid ranges)
