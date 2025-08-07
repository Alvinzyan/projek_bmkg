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
        Schema::create('pengecekans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_alat');
            $table->foreign('id_alat')->references('id')->on('alats');
            $table->enum('kondisi', ['baik', 'rusak ringan', 'rusak berat']);
            $table->enum('keterangan', ['terpasang', 'tidak terpasang']);
            $table->integer('kalibrasi_terakhir');
            $table->date('tanggal_dibuat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengecekans');
    }
};
