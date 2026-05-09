<?php

use App\Models\Pakets; // Pastikan Model di-import di atas (ini class data dummy JIKA SUDAH ADA DATABASE HAPUS!)
use App\Models\HeroSlider; // Pastikan Model di-import di atas (ini class data dummy JIKA SUDAH ADA DATABASE HAPUS!)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* route home.blade */

Route::get('/', function () {
    $heroSlider = collect(HeroSlider::allHeroSlider());
    
    // Ambil semua data dari Model Pakets, ubah jadi Collection
    $semuaPaket = collect(Pakets::allPaket());
    $paket = Pakets::findPaket("nusa-penida-trip");

    // Filter hanya yang is_recommended nya true, lalu ambil 3 saja
    $hookPakets = $semuaPaket->where('is_recommended', true)->take(3);

    return view('home', [
        'paket' => $paket,
        'heroSlider' => $heroSlider,
        'hookPakets' => $hookPakets
    ]);
});

/* route destinasi.blade */
/* Route::get('/destinasi/domestik', function (Request $request) {
    // 1. Ambil input dari URL (?cari=...&kategori=...)
    $keyword = $request->cari;
    $kategori = $request->kategori;

    // 2. Ambil semua data
    $semuaData = collect(Pakets::allPaket());

    // Siapkan variabel penanda
    $notFound = false;

    // 3. Logika Filter Gabungan
    // Kita lakukan filter jika ada keyword ATAU ada kategori yang dipilih
    if ($keyword || $kategori) {
        $pakets = $semuaData->filter(function ($paket) use ($keyword, $kategori) {

            // Logika Pencarian Teks (Nama atau Lokasi)
            $matchKeyword = true;
            if ($keyword) {
                $matchKeyword = (stripos($paket['nama'], $keyword) !== false) ||
                    (stripos($paket['lokasi'], $keyword) !== false);
            }

            // Logika Filter Kategori
            $matchKategori = true;
            if ($kategori) {
                // Karena 'kategori' di data kita adalah array, gunakan in_array
                // Kita pastikan $paket['kategori'] ada, baru kita cek
                $matchKategori = isset($paket['kategori']) && in_array($kategori, $paket['kategori']);
            }

            // Data lolos jika cocok dengan keyword DAN cocok dengan kategori
            return $matchKeyword && $matchKategori;
        });

        // Cek jika hasil filter kosong
        if ($pakets->isEmpty()) {
            $notFound = true;
            $pakets = $semuaData; // Balikkan ke semua data jika tidak ketemu
        }
    } else {
        $pakets = $semuaData;
    }

    // 4. Return ke view
    return view('destinasi', [
        'allPakets' => $pakets,
        'keyword' => $keyword,
        'selectedKategori' => $kategori, // Kirim ini agar UI tahu kategori mana yang aktif
        'notFound' => $notFound
    ]);
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

/* route about.blade */
Route::get('/about', function () {
    return view('about');
});

/* route login.blade */
Route::get('/login', function () {
    return view('login');
});

/* route regis.blade */
Route::get('/register', function () {
    return view('register');
});

/* route custopPaket.blade */
Route::get('/custom-paket', function () {
    return view('customPaket');
});

/* route pilihTipe.blade */
Route::get('/tipe-destinasi', function () {
    return view('pilihTipe');
});

// --- 1. RUTE HALAMAN DESTINASI UTAMA (Menampilkan Paket) ---
Route::get('/destinasi', function (Request $request) {
    $keyword = $request->cari;
    $kategori = $request->kategori;
    $lokasi = $request->lokasi; // Menangkap kota yang diklik dari halaman pilih-kota

    // JIKA tidak ada pencarian kata kunci DAN tidak ada lokasi yang dipilih
    // Maka lempar user kembali ke halaman pemilihan tipe agar tidak "nyasar"
    if (!$keyword && !$lokasi) {
        return redirect('/tipe-destinasi'); 
    }

    $semuaData = collect(Pakets::allPaket());
    $notFound = false;

    // 1. Jalankan filter sesuai input user
    $pakets = $semuaData->filter(function ($paket) use ($keyword, $kategori, $lokasi) {
        $matchKeyword = $keyword ? (stripos($paket['nama'], $keyword) !== false || stripos($paket['lokasi'], $keyword) !== false) : true;
        $matchKategori = $kategori ? (isset($paket['kategori']) && is_array($paket['kategori']) && in_array($kategori, $paket['kategori'])) : true;
        $matchLokasi = $lokasi ? (stripos($paket['lokasi'], $lokasi) !== false) : true;

        return $matchKeyword && $matchKategori && $matchLokasi;
    });

    // 2. Jika pencarian spesifik kosong
    if ($pakets->isEmpty()) {
        $notFound = true;
        
        // JIKA user sebelumnya sudah memilih lokasi (misal: Bali)
        // Maka tampilkan paket lain yang lokasinya masih sama (Bali)
        if ($lokasi) {
            $pakets = $semuaData->where('lokasi', $lokasi);
        } else {
            // Jika tidak ada lokasi spesifik, baru tampilkan semua
            $pakets = $semuaData;
        }
    }

    return view('destinasi', [
        'allPakets' => $pakets,
        'notFound' => $notFound
    ]);
});

// --- 2. RUTE HALAMAN PILIH KOTA (Domestik / Mancanegara) ---
// Parameter {tipe} akan otomatis menangkap kata 'domestik' atau 'mancanegara' dari URL
Route::get('/destinasi/{tipe}', function ($tipe) {
    $semuaData = collect(Pakets::allPaket());
    
    // Filter berdasarkan tipe
    $filtered = $semuaData->where('tipe', $tipe);

    // Ambil lokasi unik beserta satu gambar perwakilan (gambar dari paket pertama yang ditemukan)
    $kotaList = $filtered->groupBy('lokasi')->map(function ($items) {
        return [
            'nama' => $items->first()['lokasi'],
            'gambar' => $items->first()['image'] // Mengambil gambar dari paket pertama di lokasi tersebut
        ];
    })->values();

    return view('pilihKotaNegara', [
        'kotaList' => $kotaList,
        'tipe' => $tipe,
        'title' => $tipe === 'domestik' ? 'Destinasi Domestik' : 'Destinasi Mancanegara'
    ]);
});
