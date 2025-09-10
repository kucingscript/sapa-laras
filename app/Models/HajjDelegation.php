<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HajjDelegation extends Model
{
    protected $fillable = [
        'meninggal_dunia',
        'sakit_permanen'
    ];

    protected $casts = [
        'meninggal_dunia' => 'array',
        'sakit_permanen' => 'array',
    ];
}
