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
        Schema::create('siswa_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nis', 10)->unique();
            $table->string('jk', 20);
            $table->string('alamat', 150);
            $table->date('tgl_lahir', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_tabel');
    }
};
