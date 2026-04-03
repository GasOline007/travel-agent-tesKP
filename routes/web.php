<?php

use App\Models\Pakets; // Pastikan Model di-import di atas
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Ambil semua data dari Model Pakets, ubah jadi Collection
    $semuaPaket = collect(Pakets::all());

    // Ambil 3 paket pertama saja untuk hook di halaman utama
    $hookPakets = $semuaPaket->take(3);

    return view('home', [
        'hookPakets' => $hookPakets,
        'no_WA' => '6285155447502'
    ]);
});

Route::get('/destinasi', function (Request $request) {
    // 1. Ambil kata kunci dari URL (?cari=...)
    $keyword = $request->cari;

    // 2. Ambil semua data
    $semuaData = collect(Pakets::all());
    $pakets = $semuaData;

    // Siapkan variabel penanda (secara default false/tidak error)
    $notFound = false;

    // 3. Logika Pencarian
    if ($keyword) {
        // Jika ada pencarian, saring/filter array-nya
        $hasilCari = $semuaData->filter(function ($paket) use ($keyword) {
            // stripos digunakan agar pencarian tidak peduli huruf besar/kecil
            $cariNama = stripos($paket['nama'], $keyword) !== false;
            $cariLokasi = stripos($paket['lokasi'], $keyword) !== false;
            // Kembalikan data jika nama ATAU lokasi cocok
            return $cariNama || $cariLokasi;
        });
        // CEK DI SINI: Jika hasil pencarian kosong
        if ($hasilCari->isEmpty()) {
            $notFound = true;       // Nyalakan sinyal alert
            // $pakets tetap berisi $semuaData (sesuai inisialisasi di atas)
        }else{
            $pakets = $hasilCari;
        }
    } else {
        // Jika tidak mencari apa-apa, tampilkan semua
        $pakets = $semuaData;
    }

    // Ambil maksimal 12 data (jika mau)
    /* $pakets = $semuaData->take(12); */

    //return ke view
    return view('destinasi', [
        'allPakets' => $pakets,
        'keyword' => $keyword, // Kirim kata kunci ke tampilan agar bisa disebut di alert
        'notFound' => $notFound, // Kirim sinyal alert ke tampilan
        'no_WA' => '6285155447502'
    ]);
});

Route::get('/traveltips', function () {
    return view('traveltips');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'admin fikri', 'pakets' => Pakets::all()]);
});

Route::get('paket/{id}', function ($id) {
    dd($id);
});
    

/* Route::get('/', function () {
        return view('welcome');
    }); */