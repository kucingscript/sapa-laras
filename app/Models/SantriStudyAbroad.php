<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SantriStudyAbroad extends Model
{
    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];
}
