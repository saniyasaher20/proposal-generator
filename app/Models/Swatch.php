<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposal_item_id',
        'image_path',
        'name',
        'code',
    ];

    public function item()
    {
        return $this->belongsTo(ProposalItem::class, 'proposal_item_id');
    }
}
