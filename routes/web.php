<?php

use App\Models\Pakets; // Pastikan Model di-import di atas (ini class data dummy JIKA SUDAH ADA DATABASE HAPUS!)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* route home.blade */
Route::get('/', function () {
    // Ambil semua data dari Model Pakets, ubah jadi Collection
    $semuaPaket = collect(Pakets::allPaket());

    // Ambil 3 paket pertama saja untuk hook di halaman utama
    $hookPakets = $semuaPaket->take(3);

    return view('home', [
        'hookPakets' => $hookPakets
    ]);
});

/* route destinasi.blade */
Route::get('/destinasi', function (Request $request) {
    // 1. Ambil kata kunci dari URL (?cari=...)
    $keyword = $request->cari;

    // 2. Ambil semua data
    $semuaData = collect(Pakets::allPaket());
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
        'notFound' => $notFound // Kirim sinyal alert ke tampilan
    ]);
});

/* route about.blade */
Route::get('/about', function () {
    return view('about');
});

/* Route::get('paket/{id}', function ($id) {
    dd($id);
}); */
    
/* route detailPaket.blade */
Route::get('/paket/{slug}', function ($slug) {
    $paket = Pakets::findPaket($slug);  

    // 3. Jika paket tidak ditemukan, tampilkan halaman 404 (Not Found)
    if (!$paket) {
        abort(404);
    }

    // 4. Kirim data paket ke tampilan 'detail.blade.php'
    return view('detailPaket', [
        'paket' => $paket,
    ]);
});

/* route travelTips */
Route::get('/galeri', function () {
    $galeri = [
        [
            'image' => 'https://images.unsplash.com/photo-1566371486490-560ded23b5e4?q=80&w=1000',
            'lokasi' => 'Gunung Bromo, Jawa Timur',
            'pelanggan' => 'Keluarga Bpk. Reza',
            'caption' => 'Sunrise terbaik yang pernah kami lihat. Pelayanan guide sangat ramah dan sabar!'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1599709266514-c19e5aade84a?q=80&w=1000',
            'lokasi' => 'Nusa Penida, Bali',
            'pelanggan' => 'Rina & Friends',
            'caption' => 'Seru banget! Semua akomodasi diurus Nravel, kita tinggal terima beres dan foto-foto.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1589705149724-1379ec03e196?q=80&w=1000',
            'lokasi' => 'Raja Ampat, Papua',
            'pelanggan' => 'PT. Maju Mundur (Company Outing)',
            'caption' => 'Pengalaman tak terlupakan untuk tim kami. Fasilitas kapal sangat nyaman.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1000',
            'lokasi' => 'Candi Borobudur, Magelang',
            'pelanggan' => 'Sarah & John',
            'caption' => 'Sangat mengedukasi dan menyenangkan. Itinerary-nya tidak terburu-buru.'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?q=80&w=1000',
            'lokasi' => 'Labuan Bajo, NTT',
            'pelanggan' => 'Keluarga Ibu Siska',
            'caption' => 'Anak-anak sangat senang melihat Komodo langsung. Kapal phinisi-nya juara!'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?q=80&w=1000',
            'lokasi' => 'Kawah Putih, Bandung',
            'pelanggan' => 'Grup Mahasiswa ITB',
            'caption' => 'Trip singkat tapi sangat berkesan. Harga sangat cocok untuk kantong mahasiswa.'
        ]
    ];

    return view('galeri', [
        'galeri' => collect($galeri)
    ]);
});


/* route travelTips.blade */

/* Route::get('/', function () {
        return view('welcome');
    }); */