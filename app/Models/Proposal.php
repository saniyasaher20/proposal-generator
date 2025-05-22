<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposal extends Model
{
    /** @use HasFactory<\Database\Factories\ProposalFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_code',
        'client_name',
        'issue_date',
        'revision_label',
        'status',
        'notes'
    ];

    // Cast JSON fields
    protected $casts = [
        'issue_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(ProposalItem::class);
    }
}
