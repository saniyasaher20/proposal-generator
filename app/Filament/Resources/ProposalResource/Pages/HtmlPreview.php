<?php

namespace App\Filament\Resources\ProposalResource\Pages;

use App\Filament\Resources\ProposalResource;
use App\Models\CompanySetting;
use App\Models\Proposal;
use Filament\Resources\Pages\Page;

class HtmlPreview extends Page
{
    protected static string $resource = ProposalResource::class;
    protected static string $view = 'pdf.html-preview';

    public Proposal $record;

    public function mount(Proposal $record): void
    {
        $this->record = $record->load('items');
    }
    // public function getViewData(): array
    // {
    //     return [
    //         'proposal' => $this->record,
    //         'company' => CompanySetting::first(), // This retrieves the first company setting from the database
    //         'usePublicPath' => false, // <== Tells Blade to use asset()
    //     ];
    // }
}
