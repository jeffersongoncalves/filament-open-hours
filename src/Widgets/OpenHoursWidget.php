<?php

namespace JeffersonGoncalves\Filament\OpenHours\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\OpenHours\OpenHours;

class OpenHoursWidget extends StatsOverviewWidget
{
    protected static ?int $sort = -1;

    protected function getStats(): array
    {
        $hours = app(OpenHours::class);
        $open = $hours->isOpen();

        return [
            Stat::make(
                __('filament-open-hours::open-hours.widget.label'),
                __('filament-open-hours::open-hours.widget.'.($open ? 'open' : 'closed')),
            )
                ->description($hours->statusText())
                ->descriptionIcon('heroicon-m-clock')
                ->color($open ? 'success' : 'danger'),
        ];
    }
}
