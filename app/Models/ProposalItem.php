<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProposalItem extends Model
{
    /** @use HasFactory<\Database\Factories\ProposalItemFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'description',
        'quantity',
        'thumbnail_path',
        'materials',
        'drawings',
        'section',
        'specs',
        'remarks'
    ];

    protected $casts = [
        'materials'  => 'array',
        'drawings'   => 'array',
        'specs'      => 'array',
    ];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }
}
