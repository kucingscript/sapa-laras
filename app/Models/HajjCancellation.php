<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HajjCancellation extends Model
{
    protected $fillable = [
        'data',
        'data2',
    ];

    protected $casts = [
        'data' => 'array',
        'data2' => 'array',
    ];
}
