<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\CompanySetting;


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
        // Always load fresh data
        $proposal = Proposal::with('items')->find($proposal->id);
        
        $pdf = Pdf::loadView('pdf.proposal', [
            'proposal' => $proposal,
            'company' => CompanySetting::first(),
            'usePublicPath' => true, // <== Tells Blade to use public_path()
        ])
            ->setOption([
                'fontDir' => public_path('/fonts'),
                'fontCache' => public_path('/fonts'),
                'defaultFont' => 'Open Sans',
            ])
            ->setPaper('A4', 'portrait')
            ->setWarnings(false); // Disable warnings for missing fonts

        // Stream the PDF in browser
        return $pdf->stream("{$proposal->project_code}-{$proposal->project_name}-{$proposal->project_location}-{$proposal->id}.pdf");
    }

    // public function htmlPreview(Proposal $proposal)
    // {
    //     $company = CompanySetting::first();

    //     // If you want to allow editing before generating, 
    //     // you can pass the proposal and company into the view.
    //     return view('pdf.html-preview', [
    //         'proposal' => $proposal,
    //         'company'  => $company,
    //     ]);
    // }
}
