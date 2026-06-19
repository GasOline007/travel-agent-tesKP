<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Wajib di-import untuk enkripsi

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Gunakan create(), bukan factory()->create()
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Password wajib di-hash!
            'role' => 'super_admin',
        ]);

        // CATATAN: 
        // Jangan pernah memanggil DatabaseSeeder::class di dalam file ini sendiri!
        // Jika Anda punya seeder lain (misal PaketSeeder), baru panggil di sini seperti:
        // $this->call([
        //     PaketSeeder::class,
        // ]);
    }
}
