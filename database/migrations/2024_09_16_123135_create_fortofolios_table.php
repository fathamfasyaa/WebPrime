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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('k1'); // kategori 1
            $table->string('k2'); // kategori 2
            $table->text('content'); // deskripsi
            $table->string('image'); // gambar utama
            $table->string('image1')->nullable(); // gambar deskripsi 1
            $table->string('image2')->nullable(); // gambar deskripsi 2
            $table->string('image3')->nullable(); // gambar deskripsi 3
            $table->string('image4')->nullable(); // gambar deskripsi 4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};