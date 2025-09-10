<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MadinOperationalPermit extends Model
{
    protected $fillable = [
        'data',
        'supporting_data'
    ];

    protected $casts = [
        'data' => 'array',
        'supporting_data' => 'array'
    ];
}
