<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Barryvdh\DomPDF\Facade\Pdf;


// class ProposalController extends Controller
// {
//     public function showPdf(Proposal $proposal)
//     {
//         $fontDir = resource_path('fonts');

//         $defaultConfig = (new ConfigVariables())->getDefaults();
//         $defaultFontConfig = (new FontVariables())->getDefaults();

//         $mpdf = new Mpdf([
//             'format' => 'A4',
//             'orientation' => 'P',
//             'fontDir' => [resource_path('fonts')],
//             'fontdata' => [
//                 'opensanslight' => ['R' => 'OpenSans/OpenSans-Light.ttf'],
//                 'opensans' => ['R' => 'OpenSans/OpenSans-Regular.ttf'],
//                 'opensanssemibold' => ['R' => 'OpenSans/OpenSans-SemiBold.ttf'],
//                 'opensansbold' => ['R' => 'OpenSans/OpenSans-Bold.ttf'],
//             ],
//             'default_font' => 'opensans',
//         ]);

//         $html = view('pdf.proposal', compact('proposal'))->render();
//         $mpdf->WriteHTML($html);

//         return response($mpdf->Output("proposal-{$proposal->id}.pdf", 'I'))
//             ->header('Content-Type', 'application/pdf');
//     }
// }



// DOMPDF
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
