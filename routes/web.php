<?php

use App\Http\Controllers\GalleryController;
use App\Models\Pakets; // Pastikan Model di-import di atas (ini class data dummy JIKA SUDAH ADA DATABASE HAPUS!)
use App\Models\HeroSlider; // Pastikan Model di-import di atas (ini class data dummy JIKA SUDAH ADA DATABASE HAPUS!)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelPackageController;
use App\Http\Controllers\HomeController;

// route home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman detail paket, detail sengaja taruh paling atas agar tidak  Tumpang Tindih Urutan Rute (Route Shadowing)
Route::get('/paket-wisata/detail/{slug}', [TravelPackageController::class, 'show'])
    ->name('packages.detailPaket');

// Halaman utama (pilih domestik/mancanegara)
Route::get('/paket-wisata', [HomeController::class, 'showLocations'])
    ->name('packages.tipe');

// Halaman pilih lokasi
Route::get('/paket-wisata/{tipe}', [TravelPackageController::class, 'byTipe'])
    ->name('packages.by-tipe')
    ->where('tipe', 'domestik|mancanegara'); // batasi hanya 2 nilai ini

// Halaman listing per lokasi
Route::get('/paket-wisata/{tipe}/{lokasi}', [TravelPackageController::class, 'byLokasi'])
    ->name('packages.lokasiPaket');

Route::view('/custom-paket', 'customPaket');
Route::view('/tentang-arfaka', 'about');

// Rute Halaman Galeri
Route::get('/galeri', [GalleryController::class, 'galeri'])->name('gallery');
