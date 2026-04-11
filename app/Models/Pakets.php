<?php

namespace App\Models;

class Pakets {
    public static function allPaket()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Pesiaran Nusa Penida',
                'slug' => 'nusa-penida-trip',
                'harga' => 1500000,
                'durasi' => '2 Hari 1 Malam',
                'lokasi' => 'Bali',
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4',
                'deskripsi' => 'Menikmati keindahan Kelingking Beach, Broken Beach, dan snorkeling di Crystal Bay.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Hotel (Area Sanur/Kuta) jam 07.00 pagi',
                            'Menyeberang ke Nusa Penida menggunakan Fastboat',
                            'Tiba di Nusa Penida & disambut oleh supir lokal',
                            'Eksplorasi Angel\'s Billabong & Broken Beach',
                            'Makan Siang di Restoran Lokal',
                            'Menikmati pemandangan Kelingking Beach',
                            'Makan Malam di pinggir pantai',
                            'Check-in Hotel di Nusa Penida & Istirahat'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS)',
                        'kegiatan' => [
                            'Sarapan pagi di Hotel & Check-out',
                            'Snorkeling di Crystal Bay & Manta Point',
                            'Makan Siang',
                            'Kembali ke Pelabuhan untuk naik Fastboat ke Sanur',
                            'Tiba di Sanur & Drop off kembali ke Hotel awal'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Tiket Fastboat Sanur - Nusa Penida (PP)',
                    'Hotel 1 Malam di Nusa Penida (Bintang 3)',
                    'Transportasi Privat (AC) selama di Nusa Penida',
                    'Alat Snorkeling lengkap',
                    'Tiket masuk semua objek wisata',
                    '1x Sarapan, 2x Makan Siang, 1x Makan Malam'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat ke Bali',
                    'Pengeluaran Pribadi (Belanja, Laundry, dll)',
                    'Tip Supir/Guide lokal (Sukarela)'
                ],
                'catatan' => [
                    'Jadwal penyeberangan fastboat sangat bergantung pada kondisi cuaca.',
                    'Peserta disarankan membawa sunblock, topi, dan kacamata hitam.',
                    'Mohon bawa pakaian ganti dan pakaian renang untuk hari kedua.',
                    'Harga berlaku untuk WNI, WNA dikenakan tambahan Rp 150.000.'
                ]
            ],
            [
                'id' => 2,
                'nama' => 'Sunrise Bromo Adventure',
                'slug' => 'bromo-sunrise',
                'harga' => 850000,
                'durasi' => '1 Hari',
                'lokasi' => 'Jawa Timur',
                'image' => 'https://images.unsplash.com/photo-1666138873881-f43934e1ec71',
                'deskripsi' => 'Melihat matahari terbit dari Penanjakan 1, dilanjutkan eksplorasi kawah Bromo dan Pasir Berbisik.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (Snack Pagi)',
                        'kegiatan' => [
                            'Penjemputan tengah malam (23.30 - 00.30) di Malang/Surabaya',
                            'Perjalanan menuju rest area Bromo',
                            'Transit ke Jeep 4WD (Hardtop)',
                            'Menuju Penanjakan 1 / Bukit Kingkong untuk menanti Sunrise',
                            'Turun menuju Lautan Pasir',
                            'Trekking ringan / naik kuda menuju Kawah Bromo',
                            'Eksplorasi Pasir Berbisik & Bukit Teletubbies / Savana',
                            'Kembali ke rest area & kembali ke kota asal',
                            'Tiba di Malang/Surabaya sekitar pukul 13.00 siang'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi antar jemput (Avanza/Innova/Hiace)',
                    'Sewa Jeep 4WD (Hardtop) di Bromo',
                    'Tiket masuk Taman Nasional Bromo Tengger Semeru (TNBTS)',
                    'Air Mineral & Snack Pagi ringan',
                    'BBM, Tol, dan Parkir'
                ],
                'tidak_termasuk' => [
                    'Sewa Kuda menuju Kawah Bromo',
                    'Sewa Jaket / Tikar di Penanjakan',
                    'Makan Siang',
                    'Dokumentasi Drone / Fotografer khusus'
                ],
                'catatan' => [
                    'Suhu udara di Bromo bisa mencapai 5-10 derajat Celcius.',
                    'Peserta DIWAJIBKAN membawa jaket tebal, sarung tangan, kupluk, dan masker.',
                    'Bagi yang memiliki riwayat asma, mohon membawa obat-obatan pribadi.',
                    'Open trip digabung dengan peserta lain, jika ingin private silakan hubungi admin.'
                ]
            ],
            [
                'id' => 3,
                'nama' => 'Eksotisme Labuan Bajo',
                'slug' => 'labuan-bajo-trip',
                'harga' => 4500000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'NTT',
                'image' => 'https://images.unsplash.com/photo-1516690561799-46d8f74f9abf',
                'deskripsi' => 'Live on board menggunakan kapal phinisi, mengunjungi Pulau Padar, Komodo, dan Pink Beach.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Komodo jam 10.00 WITA',
                            'Transfer menuju pelabuhan & naik ke Kapal Phinisi (Liveaboard)',
                            'Berlayar menuju Pulau Kelor (Trekking bukit)',
                            'Menuju Pulau Manjarite (Snorkeling)',
                            'Menikmati Sunset di Pulau Kalong (Melihat ribuan kelelawar)',
                            'Makan Malam & Istirahat di Kapal'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Morning call jam 04.30 WITA untuk trekking Pulau Padar',
                            'Menikmati Sunrise dari puncak Pulau Padar',
                            'Sarapan di Kapal',
                            'Berlayar ke Pink Beach (Berenang & bersantai)',
                            'Menuju Pulau Komodo (Trekking melihat Komodo bersama Ranger)',
                            'Makan Malam & Acara bebas'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP, MS)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Snorkeling di Manta Point (mencari Manta Ray)',
                            'Singgah di Taka Makassar',
                            'Pulau Kanawa (Snorkeling terakhir)',
                            'Kembali ke Pelabuhan Labuan Bajo',
                            'Drop off di Bandara Komodo atau Hotel di darat'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Sewa Kapal Phinisi (Kabin AC) selama 3H2M',
                    'Makan Fullboard selama di kapal',
                    'Kopi, Teh, dan Air Mineral sepuasnya',
                    'Alat Snorkeling dan Pelampung',
                    'Guide lokal & Ranger Komodo',
                    'Dokumentasi (Mirrorless & GoPro)'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat menuju/dari Labuan Bajo',
                    'Tiket Masuk Taman Nasional Komodo (Rp 250k - Rp 500k)',
                    'Hotel di Labuan Bajo (jika ingin extend)',
                    'Tip untuk kru kapal'
                ],
                'catatan' => [
                    'Jadwal itinerary bersifat fleksibel tergantung arus laut dan cuaca.',
                    'Dilarang menerbangkan drone di kawasan Taman Nasional tanpa izin resmi.',
                    'Wanita yang sedang haid/menstruasi DIWAJIBKAN melapor kepada Ranger sebelum melihat Komodo.'
                ]
            ],
            [
                'id' => 4,
                'nama' => 'City Tour Yogyakarta',
                'slug' => 'jogja-heritage',
                'harga' => 500000,
                'durasi' => '1 Hari',
                'lokasi' => 'Yogyakarta',
                'image' => 'https://images.unsplash.com/photo-1584810359583-96fc3448beaa',
                'deskripsi' => 'Keliling Candi Borobudur, Keraton Yogyakarta, dan belanja oleh-oleh di Malioboro.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS)',
                        'kegiatan' => [
                            'Penjemputan di Stasiun Tugu / Hotel jam 08.00 pagi',
                            'Perjalanan menuju Magelang',
                            'Eksplorasi Candi Borobudur',
                            'Makan Siang di Restoran Lokal (Spesial Gudeg/Ayam Goreng)',
                            'Kunjungan ke Keraton Yogyakarta Hadiningrat',
                            'Eksplorasi Taman Sari (Water Castle)',
                            'Waktu bebas belanja oleh-oleh di Jalan Malioboro & Pasar Beringharjo',
                            'Pusat Oleh-oleh Bakpia Pathok',
                            'Pengantaran kembali ke Stasiun/Hotel'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi Mobil AC Privat (Avanza/Innova)',
                    'Supir merangkap Guide lokal',
                    'BBM dan Biaya Parkir',
                    'Tiket masuk semua objek wisata (Borobudur - Pelataran, Keraton, Taman Sari)',
                    '1x Makan Siang',
                    'Air Mineral 600ml'
                ],
                'tidak_termasuk' => [
                    'Tiket Kereta/Pesawat menuju Yogyakarta',
                    'Tiket khusus naik ke bangunan/struktur Candi Borobudur',
                    'Pengeluaran Pribadi',
                    'Tip Supir'
                ],
                'catatan' => [
                    'Harga berlaku untuk minimal keberangkatan 4 Pax.',
                    'Pakaian harus sopan (menutup bahu dan lutut) saat mengunjungi Keraton dan Borobudur.',
                    'Khusus hari Senin, sebagian besar museum di dalam Keraton tutup.',
                    'Lalu lintas di sekitar Malioboro mungkin padat, jadwal akan disesuaikan.'
                ]
            ],
            [
                'id' => 5,
                'nama' => 'Jelajah Alam Sumba',
                'slug' => 'sumba-explore',
                'harga' => 3200000,
                'durasi' => '4 Hari 3 Malam',
                'lokasi' => 'NTT',
                'image' => 'https://images.unsplash.com/photo-1580828551460-64ebbf738421',
                'deskripsi' => 'Menikmati hamparan padang savana, desa adat Ratenggaro, dan indahnya Danau Weekuri.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Tiba di Bandara Tambolaka',
                            'Makan siang di restoran lokal',
                            'Mengunjungi Kampung Adat Ratenggaro',
                            'Menikmati sunset di Pantai Bwana',
                            'Check-in hotel di Sumba Barat Daya'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Berenang di Danau Weekuri',
                            'Kunjungan ke Air Terjun Lapopu',
                            'Perjalanan menuju Sumba Timur',
                            'Check-in hotel di Waingapu'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Melihat padang savana Puru Kambera',
                            'Berkunjung ke Air Terjun Tanggedu',
                            'Sunset di Bukit Wairinding',
                            'Makan malam dan kembali ke hotel'
                        ]
                    ],
                    [
                        'hari' => 'Hari 4 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Membeli oleh-oleh khas Sumba (Kain Tenun)',
                            'Drop off di Bandara Umbu Mehang Kunda, Waingapu'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi AC (Innova)',
                    'Penginapan 3 Malam (Bintang 3)',
                    'Makan sesuai itinerary',
                    'Tiket masuk wisata dan donasi desa adat',
                    'Air mineral selama tour'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat PP',
                    'Pengeluaran Pribadi',
                    'Tipping Guide & Driver'
                ],
                'catatan' => [
                    'Bawalah pakaian yang nyaman untuk aktivitas outdoor dan trekking ringan.',
                    'Dilarang merusak atau mengambil benda apapun di area kampung adat.'
                ]
            ],
            [
                'id' => 6,
                'nama' => 'Pesona Belitung',
                'slug' => 'belitung-trip',
                'harga' => 1250000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Bangka Belitung',
                'image' => 'https://images.unsplash.com/photo-1563087293-f895ad1bd9a4',
                'deskripsi' => 'Island hopping di Pulau Lengkuas, melihat replika SD Laskar Pelangi, dan menikmati kuliner khas.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Tiba di Bandara HAS Hanandjoeddin',
                            'Makan mi Belitung dan minum es jeruk kunci',
                            'Mengunjungi replika SD Muhammadiyah (Laskar Pelangi)',
                            'Museum Kata Andrea Hirata',
                            'Pantai Burung Mandi',
                            'Makan malam dan Check-in hotel'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Menuju Pantai Tanjung Kelayang',
                            'Island hopping: Pulau Pasir, Pulau Batu Berlayar, Pulau Lengkuas',
                            'Snorkeling di dekat Pulau Lengkuas',
                            'Mengunjungi Pulau Kelayang (Gua Kelayang)',
                            'Menikmati sunset di Pantai Tanjung Tinggi',
                            'Makan malam seafood'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Mencari oleh-oleh khas Belitung',
                            'Kunjungan ke Rumah Adat Belitung',
                            'Danau Kaolin',
                            'Transfer ke Bandara'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Hotel 2 malam (Bintang 3)',
                    'Transportasi darat dan sewa perahu tradisional',
                    'Alat snorkeling dan life jacket',
                    'Makan sesuai itinerary (termasuk 1x Mie Belitung)',
                    'Tiket masuk objek wisata'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat',
                    'Tiket Museum Kata',
                    'Keperluan pribadi'
                ],
                'catatan' => [
                    'Pulau Pasir hanya dapat dikunjungi saat air laut surut.',
                    'Gunakan alas kaki yang nyaman karena banyak aktivitas di pasir pantai.'
                ]
            ],
            [
                'id' => 7,
                'nama' => 'Derawan Island Hopping',
                'slug' => 'derawan-island',
                'harga' => 2800000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Kalimantan Timur',
                'image' => 'https://images.unsplash.com/photo-1596766453664-874f63cecd37',
                'deskripsi' => 'Berenang bersama ubur-ubur tanpa sengat di Danau Kakaban dan melihat Manta Ray di Sangalaki.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Kalimarau (Berau) atau Tarakan',
                            'Perjalanan darat menuju Pelabuhan Tanjung Batu',
                            'Menyeberang menggunakan Speedboat ke Pulau Derawan',
                            'Check-in Water Villa / Homestay',
                            'Jalan-jalan sore di Pulau Derawan melihat penyu',
                            'Makan malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Menuju Pulau Maratua untuk snorkeling dan foto',
                            'Menuju Pulau Kakaban (Berenang bersama Stingless Jellyfish)',
                            'Makan siang ala piknik',
                            'Menuju Pulau Sangalaki (Konservasi penyu dan mencari Manta Ray)',
                            'Kembali ke Derawan dan makan malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Kembali ke Pelabuhan Tanjung Batu via Speedboat',
                            'Perjalanan darat kembali ke Bandara',
                            'Tour selesai'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi Darat PP',
                    'Speedboat untuk menyeberang dan Island Hopping',
                    'Akomodasi 2 malam di Derawan (Water Villa / setaraf)',
                    'Makan sesuai itinerary',
                    'Tiket retribusi pulau',
                    'Alat snorkeling'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat ke Berau / Tarakan',
                    'Tipping Guide/Boatman',
                    'Sewa kamera bawah air'
                ],
                'catatan' => [
                    'Dilarang menggunakan sunblock berkimia saat berenang di Danau Kakaban agar tidak merusak ubur-ubur.',
                    'Kemunculan Manta Ray di Sangalaki bersifat alami dan tidak dijamin 100%.'
                ]
            ],
            [
                'id' => 8,
                'nama' => 'Pesona Danau Toba',
                'slug' => 'toba-samosir',
                'harga' => 1750000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Sumatera Utara',
                'image' => 'https://images.unsplash.com/photo-1541334466548-43283236e788',
                'deskripsi' => 'Mengunjungi keindahan Danau Toba, Pulau Samosir, Air Terjun Sipiso-piso dan budaya Batak.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Kualanamu / Silangit',
                            'Perjalanan menuju Parapat via Pematang Siantar',
                            'Singgah di Toko Paten (beli oleh-oleh kacang tumbuk)',
                            'Tiba di Parapat dan makan siang',
                            'Menyeberang ke Pulau Samosir menggunakan kapal feri',
                            'Check-in hotel di Samosir',
                            'Makan malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Mengunjungi Desa Tomok (Makam Raja Sidabutar)',
                            'Mengunjungi Desa Ambarita (Melihat Kursi Batu Raja Siallagan)',
                            'Menonton pertunjukan Tari Sigale-gale',
                            'Kembali ke Parapat dan perjalanan ke Berastagi',
                            'Singgah di Air Terjun Sipiso-piso dan Bukit Simarjarunjung',
                            'Tiba di Berastagi, makan malam dan check-in hotel'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Mengunjungi Pasar Buah Berastagi',
                            'Melihat Pagoda Lumbini',
                            'Perjalanan kembali ke Medan',
                            'Singgah di Istana Maimun dan Masjid Raya (Jika waktu memungkinkan)',
                            'Drop off Bandara Kualanamu'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi Darat (Mobil/Hiace Ber-AC)',
                    'Tiket Feri penyeberangan Parapat - Samosir PP',
                    'Akomodasi 1 Malam Samosir, 1 Malam Berastagi',
                    'Makan sesuai itinerary',
                    'Tiket masuk wisata',
                    'Air mineral harian'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat',
                    'Donasi untuk Tari Sigale-gale (opsional)',
                    'Pengeluaran Pribadi'
                ],
                'catatan' => [
                    'Udara di Berastagi cukup dingin di malam hari, disarankan membawa jaket.',
                    'Waktu tempuh antar kota cukup panjang, siapkan kondisi fisik yang prima.'
                ]
            ]
        ];
    } 

    public static function findPaket($slug){
    // 1. Ambil semua data paket
    $semuaData = collect(static::allPaket());
    
    // 2. Cari satu data pertama yang slug-nya cocok dengan parameter di URL
    $paket = $semuaData->firstWhere('slug', $slug);

    // 3. Jika paket tidak ditemukan, tampilkan halaman 404 (Not Found)
    if (!$paket) {
        abort(404);
    }

    return $paket;
    }
}