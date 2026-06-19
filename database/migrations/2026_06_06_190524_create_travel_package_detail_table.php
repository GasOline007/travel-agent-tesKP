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
        Schema::create('travel_package_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('travel_package_id')
                ->constrained('travel_packages')
                ->cascadeOnDelete(); // Harga otomatis terhapus saat paket dihapus
            $table->string('participant_count'); // "2 PAX", "3 PAX", "5-9 PAX", dst
            $table->string('trip_type');      // "sunset_trip", "medium_trip", "long_trip"
            $table->decimal('price', 15, 2);
            $table->timestamps();

            // Cegah duplikat kombinasi yang sama (Nama field di dalam array ikut diubah)
            $table->unique(
                ['travel_package_id', 'participant_count', 'trip_type'],
                'unique_package_price'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_package_detail');
    }
};
