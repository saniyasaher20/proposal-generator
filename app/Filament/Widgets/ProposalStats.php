<?php

namespace App\Filament\Widgets;

use App\Models\Proposal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProposalStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('No. of Proposals', Proposal::count()),
        ];
    }
}
