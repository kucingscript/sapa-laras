<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();

            $table->string('jenis_layanan');
            $table->string('nama_responden');
            $table->tinyInteger('usia');
            $table->text('alamat');
            $table->string('nomor_hp');
            $table->string('pekerjaan');
            $table->string('nama_petugas');

            // PROSEDUR PELAYANAN
            $table->tinyInteger('penilaian_1')->comment('Kemudahan dalam menemukan informasi terkait prosedur pelayanan');
            $table->tinyInteger('penilaian_2')->comment('Kesesuaian prosedur yang dijelaskan dengan proses yang dijalani');
            $table->tinyInteger('penilaian_3')->comment('Kejelasan dan kelengkapan persyaratan yang harus dipenuhi');

            // BIAYA PELAYANAN
            $table->tinyInteger('penilaian_4')->comment('Kesesuaian biaya yang dikenakan dengan informasi yang diberikan');
            $table->tinyInteger('penilaian_5')->comment('Transparansi (tidak ada pungutan liar atau biaya tambahan yang tidak jelas)');

            // WAKTU PELAYANAN
            $table->tinyInteger('penilaian_6')->comment('Kesesuaian waktu penyelesaian layanan dengan yang dijanjikan');
            $table->tinyInteger('penilaian_7')->comment('Kecepatan petugas dalam merespon dan memproses permohonan');

            // PRODUK PELAYANAN
            $table->tinyInteger('penilaian_8')->comment('Kesesuaian jenis produk layanan yang diberikan (misal : surat rekomendasi, sertifikat, dll)');
            $table->tinyInteger('penilaian_9')->comment('Keakuratan data dan informasi pada produk layanan');

            // PERILAKU PELAKSANA
            $table->tinyInteger('penilaian_10')->comment('Keramahan dan kesopanan petugas dalam melayani');
            $table->tinyInteger('penilaian_11')->comment('Kesabaran dan empati petugas dalam menghadapi keluhan atau pertanyaan');

            // PENANGANAN PENGADUAN
            $table->tinyInteger('penilaian_12')->comment('Ketersediaan mekanisme pengaduan yang mudah diakses');
            $table->tinyInteger('penilaian_13')->comment('Kecepatan dan kejelasan tanggapan terhadap pengaduan yang disampaikan');

            // SARANA DAN PRASARANA
            $table->tinyInteger('penilaian_14')->comment('Kenyamanan ruang tunggu dan kebersihan area pelayanan');
            $table->tinyInteger('penilaian_15')->comment('Kelengkapan fasilitas pendukung (misal : toilet, kursi, papan informasi)');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
