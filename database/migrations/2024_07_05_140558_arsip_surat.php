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
        Schema::create('arsip_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->nullable();
            $table->string('judul')->nullable();
            $table->bigInteger('id_kategori')->unsigned()->nullable();
            $table->string('file')->nullable();
            $table->timestamp('waktu_arsip')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori_surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_surat');
    }
};
