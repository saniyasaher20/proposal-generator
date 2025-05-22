<?php

namespace App\Filament\Resources\ProposalItemResource\Pages;

use App\Filament\Resources\ProposalItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProposalItems extends ListRecords
{
    protected static string $resource = ProposalItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
