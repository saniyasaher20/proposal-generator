<?php

// namespace App\Filament\Resources\ProposalResource\Pages;

// use App\Filament\Resources\ProposalResource;
// use Filament\Actions;
// use Filament\Resources\Pages\CreateRecord;

namespace App\Filament\Resources\ProposalResource\Pages;

use App\Filament\Resources\ProposalResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Filament\Actions;

class CreateProposal extends CreateRecord
{
    protected static string $resource = ProposalResource::class;

    protected $autosaveEnabled = true;

    public function updated($property)
    {
        // Skip autosave for non-form-related Livewire properties
        if (! str_starts_with($property, 'data.')) return;
        // Log::info('Autosave triggered on property: ' . $property);
        $this->autosaveDraft();
    }

    public function autosaveDraft()
    {
        try {
            $this->create(); // saves data to DB
            Notification::make()
                ->title('Draft autosaved')
                ->success()
                ->duration(1500)
                ->send();
            // Log::info('Autosave successful');
        } catch (\Throwable $e) {
            // Log::error('Autosave failed: ' . $e->getMessage());
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            $this->getSaveFormAction()
                ->formId('form')
                ->label('Save Changes (Ctrl + S)')
                ->keyBindings(['ctrl+s']),
        ];
    }
}

// class CreateProposal extends CreateRecord
// {
//     protected static string $resource = ProposalResource::class;
// }
