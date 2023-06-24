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
        Schema::create('makuls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_mk');
            $table->string('matkul');
            $table->string('kelas');
            $table->string('dosen_pengampu');
            $table->string('hari');
            $table->string('ruang');
            $table->time('jam');
            $table->string('sks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makuls');
    }
};
