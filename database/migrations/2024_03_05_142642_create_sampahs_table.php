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
        Schema::create('sampahs', function (Blueprint $table) {
            $table->id('idPetugas');
            $table->id('idPengguna');
            $table->timestamps();
            $table->string('jenisSampah');
            $table->float('beratSampah');
            $table->dateTime('waktuPengambilan');
            $table->dateTime('waktuPembuatanAntrean');

            //$table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade');
            //$table->foreign('id_pengguna')->references('id')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampahs');
    }
};
