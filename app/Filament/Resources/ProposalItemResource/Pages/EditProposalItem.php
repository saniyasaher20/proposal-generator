<?php

namespace App\Filament\Resources\ProposalItemResource\Pages;

use App\Filament\Resources\ProposalItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProposalItem extends EditRecord
{
    protected static string $resource = ProposalItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
