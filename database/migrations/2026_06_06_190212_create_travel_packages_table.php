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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['domestik', 'mancanegara'])->default('domestik');
            $table->string('name');
            $table->string('slug')->unique();
            $table->boolean('is_recommended')->default(false);
            $table->decimal('price', 15, 2);
            $table->decimal('original_price', 15, 2)->nullable();
            $table->json('trip_sequence')->nullable(); // tetap JSON, hanya untuk urutan tampilan
            $table->string('duration')->nullable();
            $table->string('location');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
