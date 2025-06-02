<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProposalItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'proposal_id', // Foreign key to Proposal
        'item_code', // Unique code for the item
        'item_name',    
        'item_description',
        'item_quantity',
        'location',
        'thumbnail_path',
        'materials', //text like METAL, WOOD AND TILE
        'drawings', // JSON (e.g., [{"name": "drawing1.jpg", "path": "/path/to/drawing1.jpg"}, ...])
        // 'specs', 
        // 'remarks',


        'item_category',
        'manufacturer_details',
        'product_code', 
        'revision',
        'model_name',
        'model_number',
        'item_width',
        'item_length',
        'item_height',
        'item_material',
        'item_details',
        'item_note', //default - Supplier to coordinate the items structure and stability
    ];

    protected $casts = [
        'materials' => 'array',
        'drawings' => 'array',
    ];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function swatches()
    {
        return $this->hasMany(Swatch::class);
    }
}
