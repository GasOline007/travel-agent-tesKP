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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Judul promo (opsional, untuk admin saja)
            $table->string('image'); // File gambar wajib
            $table->string('link')->nullable(); // Jika diklik mau diarahkan ke mana?
            $table->boolean('is_active')->default(true); // Toggle nyala/mati promo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
