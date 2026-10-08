<?php

namespace JeffersonGoncalves\Filament\OpenHours;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OpenHoursServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-open-hours')
            ->hasTranslations();
    }
}
