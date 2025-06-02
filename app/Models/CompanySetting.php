<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_path', 
        'address',
        'emails', // JSON (e.g., ["milouni@...", "swati@...", ...])
        'contact_name',
        'contact_number',
        'facsimile',
        'website',
        'remarks',
        'general_notes',

        'studio_principal_name',
        'drawn_by_name',
        'checked_by_name',
    ];

    protected $casts = [
        'emails' => 'array',
    ];

    public static function getSetting(string $key)
    {
        return static::first()->{$key};
    }
}
