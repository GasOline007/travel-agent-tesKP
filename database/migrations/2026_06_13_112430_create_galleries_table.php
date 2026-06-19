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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Untuk menyimpan path foto
            $table->string('location'); // Contoh: Mount Bromo, East Java
            $table->string('customer'); // Contoh: Mr. Reza Family
            $table->text('caption')->nullable(); // Testimoni/deskripsi (boleh kosong)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
