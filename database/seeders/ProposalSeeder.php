<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proposal;
use App\Models\ProposalItem;
use App\Models\Swatch;

class ProposalSeeder extends Seeder
{
    public function run(): void
    {
        $proposal = Proposal::create([
            'user_id' => 1,
            'project_name' => 'SAROVAR PORTICO',
            'project_code' => '20031',
            'client_name' => 'SAROVAR PORTICO',
            'issue_date' => '2025-03-31',
            'revision_label' => 'REVISION 1 - 14TH MAY 2025',
            'status' => 'draft',

            'project_location' => 'MUMBAI',
            'spec_name' => 'LOOSE FURNITURE',
            'spec_series' => 'SERIES 3.00',
            'spec_area' => 'ALL DAY DINING AND LIFT LOBBY',
        ]);

        $items = [
            [
                'item_code' => 'FF - 301',
                'item_name' => 'Dining Table',
                'item_description' => 'Laminate with metal and tile top dining table',
                'item_quantity' => 22,
                'location' => 'All Day Dining',
                'item_category' => 'Case Good',
                'item_width' => 700,
                'item_length' => 900,
                'item_height' => 750,
                'item_material' => 'Metal, Wood and Tile',
                'item_details' => 'Refer to FF&E shop drawing',
            ],
            [
                'item_code' => 'FF - 310',
                'item_name' => 'Dining Chair - A',
                'item_description' => 'Black wooden finish chair with blue upholstery',
                'item_quantity' => 11,
                'location' => 'All Day Dining',
                'item_category' => 'Upholstery',
                'item_width' => 490,
                'item_length' => 540,
                'item_height' => 770,
                'item_material' => 'Wood and Fabric',
                'item_details' => 'Refer to FF&E shop drawing',
            ],
            [
                'item_code' => 'FF - 311',
                'item_name' => 'Dining Chair - B',
                'item_description' => 'Black solid wood arm chair with fabric upholstery',
                'item_quantity' => 17,
                'location' => 'All Day Dining',
                'item_category' => 'Upholstery',
                'item_width' => 490,
                'item_length' => 540,
                'item_height' => 770,
                'item_material' => 'Wood, Metal and Fabric',
                'item_details' => 'Refer to FF&E shop drawing',
            ],
            [
                'item_code' => 'FF - 320',
                'item_name' => 'Artwork A',
                'item_description' => 'Custom artwork in wooden frame',
                'item_quantity' => 3,
                'location' => 'All Day Dining',
                'item_category' => 'Artwork',
                'item_width' => 600,
                'item_length' => 30,
                'item_height' => 760,
                'item_material' => 'Wood Frame',
                'item_details' => 'Refer to FF&E shop drawing',
            ],
            [
                'item_code' => 'FF - 321',
                'item_name' => 'Artwork B',
                'item_description' => 'Custom artwork in wooden frame',
                'item_quantity' => 1,
                'location' => 'Lift Lobby',
                'item_category' => 'Artwork',
                'item_width' => 900,
                'item_length' => 30,
                'item_height' => 800,
                'item_material' => 'Wood Frame',
                'item_details' => 'Refer to FF&E shop drawing',
            ],
        ];

        foreach ($items as $item) {
            $proposalItem = ProposalItem::create([
                'proposal_id' => $proposal->id,
                'item_code' => $item['item_code'],
                'item_name' => $item['item_name'],
                'item_description' => $item['item_description'],
                'item_quantity' => $item['item_quantity'],
                'location' => $item['location'],
                'thumbnail_path' => 'https://placehold.co/600x400',

                'materials' => ['https://placehold.co/100x80'],
                'drawings' => [
                    ['name' => 'drawing1.jpg', 'path' => 'https://placehold.co/400x300'],
                    ['name' => 'drawing2.jpg', 'path' => 'https://placehold.co/400x300']
                ],

                'item_category' => $item['item_category'],
                'manufacturer_details' => 'To Bid',
                'product_code' => null,
                'revision' => '1',
                'model_name' => 'Custom Made Furniture',
                'model_number' => 'CUSTOM FURNITURE',
                'item_width' => $item['item_width'],
                'item_length' => $item['item_length'],
                'item_height' => $item['item_height'],
                'item_material' => $item['item_material'],
                'item_details' => $item['item_details'],
                'item_note' => 'Supplier to coordinate the items structure and stability',
            ]);

            // Add swatches
            for ($i = 1; $i <= 3; $i++) {
                Swatch::create([
                    'proposal_item_id' => $proposalItem->id,
                    'image_path' => "https://placehold.co/100x80?text=Swatch+$i",
                    'name' => "Swatch $i",
                    'code' => "TL-0$i",
                ]);
            }
        }
    }
}
