<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IslamicArtInsitution extends Model
{
    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];
}
