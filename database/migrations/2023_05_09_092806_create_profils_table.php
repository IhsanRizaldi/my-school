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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nama_sekolah');
            $table->string('visi');
            $table->string('misi');
            $table->string('sambutan');
            $table->string('gambar_kepsek');
            $table->string('logo');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
