<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
        'jenis_layanan',
        'nama_responden',
        'usia',
        'alamat',
        'nomor_hp',
        'pekerjaan',
        'nama_petugas',
        'penilaian_1',
        'penilaian_2',
        'penilaian_3',
        'penilaian_4',
        'penilaian_5',
        'penilaian_6',
        'penilaian_7',
        'penilaian_8',
        'penilaian_9',
        'penilaian_10',
        'penilaian_11',
        'penilaian_12',
        'penilaian_13',
        'penilaian_14',
        'penilaian_15',
    ];
}
