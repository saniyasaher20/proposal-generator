<?php

namespace App\Filament\Resources\ProposalResource\Pages;

use Livewire\Attributes\On;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ProposalResource;
use App\Models\Proposal;
use Filament\Resources\Pages\Page;

class ProposalPreviewPdf extends Page
{
    protected static string $resource = ProposalResource::class;
    protected static string $view = 'pdf.proposal-preview';

    // public Proposal $record;
    // public $refreshKey = 0; // Initialize refresh key

    // public function mount(Proposal $record): void
    // {
    //     // $this->record = $record->load('items');
    // }

    // public function getViewData(): array
    // {
    //     return [
    //         // 'proposal' => $this->record,
    //         'refreshKey' => $this->refreshKey
    //     ];
    // }

    // #[On('proposal-updated')]
    // public function refreshPreview()
    // {
    //     $this->refreshKey++; // Increment to force refresh
    // }
}
