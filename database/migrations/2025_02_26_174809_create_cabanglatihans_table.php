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
        Schema::create('cabanglatihans', function (Blueprint $table) {
            $table->id();
            $table->string('nicl');
            $table->string('nama_cl');
            $table->string('kategori_cl');
            $table->string('alamat_cl');
            $table->string('sk_cl');
            $table->string('pelatih_cl'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabanglatihans');
    }
};
