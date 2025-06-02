<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::firstOrCreate([], [
            'logo_path' => null,
            'address' => "403, 4th Floor, Trade World B-wing,\nKamala Mills Compound, Lower Parel,\nMumbai - 40013",
            'emails' => [
                'milouni@houseofelm.design',
                'swati@houseofelm.design',
                'mahavira@houseofelm.design'
            ],
            'contact_name' => 'House of Elm',
            'contact_number' => '+91-0000000000',
            'facsimile' => '',
            'website' => 'https://houseofelm.design',
            'remarks' => 'This is a default company setting record.',
            'general_notes' => '<div>* Manufacturer to ensure support and stability of product.</div>
                                <div>* All construction methods and finishes must be of contract quality suitable for commercial and hospitality use, of new high-grade material, clean and free from defects in material and workmanship/fabrication in accordance with House of Elm.</div>
                                <div>* All Local Codes for installation methods and practices must be observed.</div>',
            'studio_principal_name' => 'Milouni Mehta',
            'drawn_by_name' => '',
            'checked_by_name' => '',
        ]);
    }
}
