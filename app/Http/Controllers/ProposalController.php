<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Barryvdh\DomPDF\Facade\Pdf;

class ProposalController extends Controller
{
    // stream() = show in browser
    // download() = force download
    public function showPdf(Proposal $proposal)
    {
        // Just pass dummy data for now or skip
        $pdf = Pdf::loadView('pdf.proposal', [
            'proposal' => $proposal,
        ]) ->setOption([
                'fontDir' => public_path('/fonts'),
                'fontCache' => public_path('/fonts'),
                'defaultFont' => 'Poppins'])
            ->setPaper('A4', 'portrait')
            ->setWarnings(false) // Disable warnings for missing fonts
        ;

        // Stream the PDF in browser
        return $pdf->stream("proposal-{$proposal->id}.pdf");
    }
}
