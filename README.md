<div class="filament-hidden">

![Filament Open Hours](https://raw.githubusercontent.com/jeffersongoncalves/filament-open-hours/1.x/art/jeffersongoncalves-filament-open-hours.png)

</div>

# Filament Open Hours

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-open-hours.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-open-hours)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-open-hours/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-open-hours/actions?query=workflow%3ATests+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-open-hours.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-open-hours)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-open-hours.svg?style=flat-square)](LICENSE.md)

Manage your business opening hours from the Filament panel — weekly schedule, holidays and special dates (one-off or every year) and timezone — and see at a glance whether you're open right now.

Built on [jeffersongoncalves/laravel-open-hours](https://github.com/jeffersongoncalves/laravel-open-hours), which stores the schedule with Spatie Laravel Settings and gives your site `isOpen()`, `nextOpen()`, the `@openhours` Blade directive and an "Open now · closes at 18:00" component.

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-open-hours:"^1.0"
php artisan migrate
```

The settings migration seeds Monday–Friday 09:00–18:00 (change the defaults in `config/open-hours.php` before migrating if you like).

## Usage

Add the plugin to your panel provider:

```php
use JeffersonGoncalves\Filament\OpenHours\OpenHoursPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            OpenHoursPlugin::make(),
        ]);
}
```

Then open **Opening hours**:

| Section | |
|---------|---|
| Weekly schedule | Timezone (empty = app timezone) and the opening ranges of each day — `09:00-12:00`, `13:00-18:00`, overnight `22:00-02:00`. A day with no range is closed. |
| Holidays and special dates | A date, optionally **every year**, with its own ranges (none = closed) and a note. |

Overlapping or malformed ranges are rejected on save. The dashboard gets an **Opening hours** widget showing *Open* / *Closed* and when that changes.

On your site:

```blade
<x-open-hours::status class="badge" />

@openhours
    <a href="https://wa.me/5511999999999">Chat with us</a>
@else
    <p>We're closed right now — leave a message.</p>
@endopenhours
```

### Customization

```php
OpenHoursPlugin::make()
    ->navigationGroup('Settings')
    ->settingsPage(false) // don't register the settings page
    ->widget(false),      // don't add the dashboard widget
```

## Requirements

- PHP 8.2 or higher
- Filament 3.x

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
