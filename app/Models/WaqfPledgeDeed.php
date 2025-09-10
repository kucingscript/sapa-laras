<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaqfPledgeDeed extends Model
{
    protected $fillable = [
        'wakif_perseorangan',
        'wakif_organisasi',
        'wakif_badan_hukum',
        'nazhir_perseorangan',
        'nazhir_organisasi',
        'nazhir_badan_hukum',
        'tanah_diwakafkan',
        'saksi',
    ];

    protected $casts = [
        'wakif_perseorangan' => 'array',
        'wakif_organisasi' => 'array',
        'wakif_badan_hukum' => 'array',
        'nazhir_perseorangan' => 'array',
        'nazhir_organisasi' => 'array',
        'nazhir_badan_hukum' => 'array',
        'tanah_diwakafkan' => 'array',
        'saksi' => 'array',
    ];
}
