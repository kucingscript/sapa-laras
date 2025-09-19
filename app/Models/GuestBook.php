<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $fillable = ['nama_lengkap', 'jabatan', 'instansi', 'keperluan', 'deskripsi_keperluan', 'nomor_hp', 'pic', 'kritik', 'rating'];
}
