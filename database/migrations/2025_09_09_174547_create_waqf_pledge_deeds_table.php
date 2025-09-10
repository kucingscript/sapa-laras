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
        Schema::create('waqf_pledge_deeds', function (Blueprint $table) {
            $table->id();
            $table->json('wakif_perseorangan');
            $table->json('wakif_organisasi');
            $table->json('wakif_badan_hukum');
            $table->json('nazhir_perseorangan');
            $table->json('nazhir_organisasi');
            $table->json('nazhir_badan_hukum');
            $table->json('tanah_diwakafkan');
            $table->json('saksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waqf_pledge_deeds');
    }
};
