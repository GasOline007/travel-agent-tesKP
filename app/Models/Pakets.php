<?php

namespace App\Models;

class Pakets
{
    public static function allPaket()
    {
        return [
            [
                'id' => 1,
                'tipe' => 'domestik',
                'nama' => 'Pesiaran Nusa Penida',
                'slug' => 'nusa-penida-trip',
                'kategori' => ['Open Trip', 'Family Gathering'],
                'is_recommended' => false,
                'harga' => 1500000,
                'durasi' => '2 Hari 1 Malam',
                'lokasi' => 'Bali',
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4',
                'deskripsi' => 'Menikmati keindahan Kelingking Beach, Broken Beach, dan snorkeling di Crystal Bay.',
                'gallery' => [
                    'https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1000',
                    'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1000'
                ],
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
                    'Keberangkatan Open Trip minimal 6 Pax. Jika kuota tidak terpenuhi, jadwal akan disesuaikan.',
                    'Jadwal penyeberangan fastboat sangat bergantung pada kondisi cuaca.',
                    'Peserta disarankan membawa sunblock, topi, dan kacamata hitam.',
                    'Harga berlaku untuk WNI, WNA dikenakan tambahan Rp 150.000.'
                ]
            ],
            [
                'id' => 14,
                'tipe' => 'domestik',
                'nama' => 'pantai kuta',
                'slug' => 'pantai-kuta',
                'kategori' => ['Family Gathering'],
                'is_recommended' => true,
                'harga' => 1500000,
                'durasi' => '2 Hari 1 Malam',
                'lokasi' => 'Bali',
                'image' => 'https://images.unsplash.com/photo-1666873536534-7b1a5a333d24?w=600',
                'deskripsi' => 'Menikmati keindahan Kelingking Beach, Broken Beach, dan snorkeling di Crystal Bay.',
                'gallery' => [
                    'https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1000',
                    'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1000'
                ],
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
                    'Keberangkatan Open Trip minimal 6 Pax. Jika kuota tidak terpenuhi, jadwal akan disesuaikan.',
                    'Jadwal penyeberangan fastboat sangat bergantung pada kondisi cuaca.',
                    'Peserta disarankan membawa sunblock, topi, dan kacamata hitam.',
                    'Harga berlaku untuk WNI, WNA dikenakan tambahan Rp 150.000.'
                ]
            ],
            [
                'id' => 2,
                'tipe' => 'domestik',
                'nama' => 'Sunrise Bromo Adventure',
                'slug' => 'bromo-sunrise',
                'kategori' => ['Open Trip'],
                'is_recommended' => true,
                'harga' => 850000,
                'durasi' => '1 Hari',
                'lokasi' => 'Jawa Timur',
                'image' => 'https://images.unsplash.com/photo-1666138873881-f43934e1ec71',
                'deskripsi' => 'Melihat matahari terbit dari Penanjakan 1, dilanjutkan eksplorasi kawah Bromo dan Pasir Berbisik.',
                'gallery' => [
                    'https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1000',
                    'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1000'
                ],
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
                    'Open trip ini digabung dengan peserta lain (minimum jalan 5 orang per Jeep).',
                    'Suhu udara di Bromo bisa mencapai 5-10 derajat Celcius.',
                    'Peserta DIWAJIBKAN membawa jaket tebal, sarung tangan, kupluk, dan masker.',
                    'Bagi yang memiliki riwayat asma, mohon membawa obat-obatan pribadi.'
                ]
            ],
            [
                'id' => 3,
                'tipe' => 'domestik',
                'nama' => 'Eksotisme Labuan Bajo',
                'slug' => 'labuan-bajo-trip',
                'kategori' => ['Open Trip', 'Meeting Planner', 'Family Gathering'],
                'is_recommended' => true,
                'harga' => 4500000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'NTT',
                'image' => 'https://images.unsplash.com/photo-1516690561799-46d8f74f9abf',
                'deskripsi' => 'Live on board menggunakan kapal phinisi, mengunjungi Pulau Padar, Komodo, dan Pink Beach.',
                'gallery' => [
                    'https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000',
                    'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1000',
                    'https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?q=80&w=1000'
                ],
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
                    'Tersedia opsi charter (Private Phinisi) untuk rombongan Family Gathering atau Corporate/Meeting Planner.',
                    'Untuk Open Trip, peserta akan sharing fasilitas dek dengan peserta lain (minimal keberangkatan 8 Pax).',
                    'Jadwal itinerary bersifat fleksibel tergantung arus laut dan cuaca.',
                    'Wanita yang sedang haid/menstruasi DIWAJIBKAN melapor kepada Ranger sebelum melihat Komodo.'
                ]
            ],
            [
                'id' => 4,
                'tipe' => 'domestik',
                'nama' => 'City Tour Yogyakarta',
                'slug' => 'jogja-heritage',
                'kategori' => ['Family Gathering', 'Meeting Planner'],
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
                    'Transportasi Mobil AC Privat (Avanza/Innova/Hiace/Bus Sedang)',
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
                    'Harga di atas berlaku untuk minimal keberangkatan 4 Pax.',
                    'Sangat cocok untuk rombongan meeting planner (Outing Perusahaan) atau kumpul keluarga.',
                    'Pakaian harus sopan (menutup bahu dan lutut) saat mengunjungi Keraton dan Borobudur.',
                    'Khusus hari Senin, sebagian besar museum di dalam Keraton tutup.'
                ]
            ],
            [
                'id' => 5,
                'tipe' => 'domestik',
                'nama' => 'Jelajah Alam Sumba',
                'slug' => 'sumba-explore',
                'kategori' => ['Open Trip'],
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
                    'Keberangkatan Open Trip minimal 4 Pax.',
                    'Bawalah pakaian yang nyaman untuk aktivitas outdoor dan trekking ringan.',
                    'Dilarang merusak atau mengambil benda apapun di area kampung adat.'
                ]
            ],
            [
                'id' => 6,
                'tipe' => 'domestik',
                'nama' => 'Pesona Belitung',
                'slug' => 'belitung-trip',
                'kategori' => ['Family Gathering', 'Meeting Planner'],
                'is_recommended' => true,
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
                    'Rute sangat santai dan minim trekking, ideal untuk liburan keluarga atau corporate trip/meeting.',
                    'Pulau Pasir hanya dapat dikunjungi saat air laut surut.',
                    'Gunakan alas kaki yang nyaman karena banyak aktivitas di pasir pantai.'
                ]
            ],
            [
                'id' => 7,
                'tipe' => 'domestik',
                'nama' => 'Derawan Island Hopping',
                'slug' => 'derawan-island',
                'kategori' => ['Open Trip', 'Family Gathering'],
                'is_recommended' => true,
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
                    'Open Trip tersedia setiap weekend (Jumat-Minggu) dengan minimal keberangkatan 4 Pax.',
                    'Dilarang menggunakan sunblock berkimia saat berenang di Danau Kakaban agar tidak merusak ubur-ubur.',
                    'Kemunculan Manta Ray di Sangalaki bersifat alami dan tidak dijamin 100%.'
                ]
            ],
            [
                'id' => 8,
                'tipe' => 'domestik',
                'nama' => 'Pesona Danau Toba',
                'slug' => 'toba-samosir',
                'kategori' => ['Family Gathering', 'Meeting Planner'],
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
                    'Transportasi Darat (Mobil/Hiace/Bus Pariwisata Ber-AC)',
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
                    'Sangat cocok dan direkomendasikan untuk acara Family Gathering atau Group Tour besar.',
                    'Udara di Berastagi cukup dingin di malam hari, disarankan membawa jaket.',
                    'Waktu tempuh antar kota cukup panjang, siapkan kondisi fisik yang prima.'
                ]
            ],
            // ==================== MANCANEGARA ==================== //
            [
                'id'             => 9,
                'tipe'           => 'mancanegara',
                'nama'           => 'Pesona Jepang - Cherry Blossom',
                'slug'           => 'jepang-sakura',
                'kategori'       => ['Open Trip', 'Family Gathering'],
                'is_recommended' => true,
                'harga'          => 18500000,
                'durasi'         => '7 Hari 6 Malam',
                'lokasi'         => 'Jepang',
                'image'          => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e',
                'deskripsi'      => 'Menikmati musim semi Jepang dengan bunga sakura yang bermekaran di Tokyo, Kyoto, dan Osaka.',
                'gallery'        => [
                    'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=1000',
                    'https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=1000',
                    'https://images.unsplash.com/photo-1480796927426-f609979314bd?w=1000',
                ],
                'itinerary' => [
                    [
                        'hari'     => 'Hari 1 - Tokyo',
                        'kegiatan' => [
                            'Tiba di Bandara Narita / Haneda',
                            'Transfer ke hotel & check-in',
                            'Makan malam di Shinjuku',
                            'Malam bebas jalan-jalan di Shibuya Crossing',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 2 - Tokyo',
                        'kegiatan' => [
                            'Sarapan di hotel',
                            'Kunjungan ke Asakusa & Senso-ji Temple',
                            'Akihabara Electric Town',
                            'Harajuku & Takeshita Street',
                            'Shibuya Sky Observation Deck',
                            'Makan malam di Izakaya lokal',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 3 - Tokyo - Hakone',
                        'kegiatan' => [
                            'Sarapan & Check-out',
                            'Perjalanan ke Hakone dengan Romancecar',
                            'Melihat Gunung Fuji dari Danau Ashi',
                            'Naik Ropeway Hakone',
                            'Check-in Ryokan & menikmati Onsen',
                            'Makan malam tradisional kaiseki',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 4 - Kyoto',
                        'kegiatan' => [
                            'Sarapan & perjalanan ke Kyoto via Shinkansen',
                            'Kunjungan ke Fushimi Inari Shrine',
                            'Arashiyama Bamboo Grove',
                            'Kinkaku-ji (Golden Pavilion)',
                            'Makan malam di kawasan Gion',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 5 - Kyoto - Nara',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Nishiki Market (Dapur Kyoto)',
                            'Perjalanan ke Nara - Todai-ji Temple',
                            'Memberi makan rusa di Nara Park',
                            'Kembali ke Kyoto / lanjut ke Osaka',
                            'Check-in hotel Osaka',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 6 - Osaka',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Osaka Castle',
                            'Dotonbori (Street food & Glico Man)',
                            'Universal Studios Japan (opsional)',
                            'Makan malam & malam terakhir di Osaka',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 7 - Pulang',
                        'kegiatan' => [
                            'Sarapan & check-out',
                            'Belanja oleh-oleh terakhir',
                            'Transfer ke Bandara Kansai',
                            'Penerbangan kembali ke Jakarta',
                        ],
                    ],
                ],
                'termasuk' => [
                    'Tiket pesawat PP Jakarta - Tokyo / Osaka - Jakarta',
                    'JR Pass 7 hari (unlimited Shinkansen)',
                    'Hotel bintang 3-4 (6 malam)',
                    '1 malam Ryokan dengan Onsen di Hakone',
                    'Tour Guide berbahasa Indonesia',
                    'Sarapan setiap hari',
                    'Asuransi perjalanan',
                ],
                'tidak_termasuk' => [
                    'Visa Jepang (dibantu pengurusan)',
                    'Makan siang & makan malam (kecuali yang tertulis)',
                    'Universal Studios Japan',
                    'Pengeluaran pribadi & tips',
                ],
                'catatan' => [
                    'Musim sakura biasanya berlangsung akhir Maret - awal April, jadwal menyesuaikan.',
                    'Pengurusan visa Jepang dibantu oleh tim Arfaka dengan biaya terpisah.',
                    'Minimal keberangkatan Open Trip 10 pax.',
                    'Tersedia opsi Private Trip untuk keluarga atau perusahaan.',
                ],
            ],

            [
                'id'             => 10,
                'tipe'           => 'mancanegara',
                'nama'           => 'Eropa Barat Klasik',
                'slug'           => 'eropa-barat-klasik',
                'kategori'       => ['Open Trip', 'Meeting Planner'],
                'is_recommended' => true,
                'harga'          => 32000000,
                'durasi'         => '10 Hari 9 Malam',
                'lokasi'         => 'Eropa Barat',
                'image'          => 'https://images.unsplash.com/photo-1499856871958-5b9627545d1a',
                'deskripsi'      => 'Jelajahi tiga kota ikonik Eropa — Paris yang romantis, Amsterdam yang memukau, dan Roma yang bersejarah.',
                'gallery'        => [
                    'https://images.unsplash.com/photo-1499856871958-5b9627545d1a?w=1000',
                    'https://images.unsplash.com/photo-1534430480872-3498386e7856?w=1000',
                    'https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=1000',
                ],
                'itinerary' => [
                    [
                        'hari'     => 'Hari 1 - Keberangkatan',
                        'kegiatan' => [
                            'Kumpul di Bandara Soekarno-Hatta',
                            'Penerbangan menuju Paris (transit)',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 2-3 - Paris',
                        'kegiatan' => [
                            'Tiba di Bandara Charles de Gaulle, check-in hotel',
                            'Menara Eiffel & Champs-Élysées',
                            'Louvre Museum',
                            'Notre-Dame de Paris & Seine River Cruise',
                            'Versailles Palace (day trip)',
                            'Galeries Lafayette',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 4-5 - Amsterdam',
                        'kegiatan' => [
                            'Perjalanan ke Amsterdam via Thalys / Eurostar',
                            'Canal Cruise di kanal Amsterdam',
                            'Rijksmuseum & Van Gogh Museum',
                            'Zaanse Schans (Kincir Angin)',
                            'Keukenhof Gardens (musim semi)',
                            'Diamond Factory tour',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 6 - Brussels (Transit)',
                        'kegiatan' => [
                            'Perjalanan ke Brussels',
                            'Grand Place & Manneken Pis',
                            'Cokelat dan waffle Belgium',
                            'Perjalanan ke Roma via penerbangan',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 7-8 - Roma',
                        'kegiatan' => [
                            'Tiba di Roma, check-in hotel',
                            'Colosseum & Roman Forum',
                            'Vatican City - Sistine Chapel & St. Peter\'s Basilica',
                            'Trevi Fountain & Spanish Steps',
                            'Campo de\' Fiori & tasting pasta',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 9 - Bebas & Belanja',
                        'kegiatan' => [
                            'Waktu bebas belanja oleh-oleh',
                            'Via Condotti (luxury shopping)',
                            'Makan malam perpisahan',
                            'Transfer ke Bandara Fiumicino',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 10 - Kembali ke Jakarta',
                        'kegiatan' => [
                            'Penerbangan Roma - Jakarta (transit)',
                            'Tiba di Jakarta',
                        ],
                    ],
                ],
                'termasuk' => [
                    'Tiket pesawat PP Jakarta - Paris / Roma - Jakarta',
                    'Tiket kereta antar kota (Paris - Amsterdam - Brussels)',
                    'Hotel bintang 4 (9 malam)',
                    'Tour Guide berbahasa Indonesia',
                    'Bus pariwisata ber-AC selama tour',
                    'Sarapan setiap hari',
                    'Asuransi perjalanan internasional',
                    'Tiket masuk objek wisata sesuai itinerary',
                ],
                'tidak_termasuk' => [
                    'Visa Schengen (dibantu pengurusan)',
                    'Makan siang & makan malam',
                    'Pengeluaran pribadi',
                    'Tips untuk guide & driver',
                ],
                'catatan' => [
                    'Visa Schengen wajib diurus minimal 3 minggu sebelum keberangkatan.',
                    'Tim Arfaka akan membantu kelengkapan dokumen visa.',
                    'Minimal keberangkatan 15 pax untuk Open Trip.',
                    'Tersedia paket Private / Corporate untuk rombongan perusahaan.',
                ],
            ],

            [
                'id'             => 11,
                'tipe'           => 'mancanegara',
                'nama'           => 'Thailand Multicity',
                'slug'           => 'thailand-multicity',
                'kategori'       => ['Open Trip', 'Family Gathering'],
                'is_recommended' => false,
                'harga'          => 6500000,
                'durasi'         => '5 Hari 4 Malam',
                'lokasi'         => 'Thailand',
                'image'          => 'https://images.unsplash.com/photo-1563492065599-3520f775eeed',
                'deskripsi'      => 'Menjelajahi Bangkok yang modern, pantai Pattaya, dan keindahan alam Phuket dalam satu perjalanan.',
                'gallery'        => [
                    'https://images.unsplash.com/photo-1563492065599-3520f775eeed?w=1000',
                    'https://images.unsplash.com/photo-1506665531195-3566af2b4dfa?w=1000',
                    'https://images.unsplash.com/photo-1537953773345-d172ccf13cf1?w=1000',
                ],
                'itinerary' => [
                    [
                        'hari'     => 'Hari 1 - Bangkok',
                        'kegiatan' => [
                            'Tiba di Bandara Suvarnabhumi',
                            'Check-in hotel di Bangkok',
                            'Chatuchak Weekend Market / MBK Shopping',
                            'Makan malam di Asiatique The Riverfront',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 2 - Bangkok',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Grand Palace & Wat Phra Kaew',
                            'Wat Arun (Temple of Dawn)',
                            'Cruise di Sungai Chao Phraya',
                            'Khao San Road malam hari',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 3 - Pattaya',
                        'kegiatan' => [
                            'Sarapan & check-out',
                            'Perjalanan ke Pattaya (2 jam)',
                            'Sanctuary of Truth',
                            'Nong Nooch Tropical Garden & Elephant Show',
                            'Walking Street Pattaya',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 4 - Phuket',
                        'kegiatan' => [
                            'Penerbangan Pattaya / Bangkok - Phuket',
                            'Phi Phi Island Tour (speedboat)',
                            'Snorkeling di Maya Bay',
                            'Patong Beach & Bangla Road',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 5 - Kembali',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Phuket Old Town',
                            'Belanja oleh-oleh',
                            'Transfer ke Bandara Phuket',
                            'Penerbangan kembali ke Jakarta',
                        ],
                    ],
                ],
                'termasuk' => [
                    'Tiket pesawat PP Jakarta - Bangkok / Phuket - Jakarta',
                    'Tiket pesawat domestik Bangkok - Phuket',
                    'Hotel bintang 3-4 (4 malam)',
                    'Transportasi antar kota (AC)',
                    'Tour Guide lokal berbahasa Indonesia',
                    'Tiket masuk objek wisata sesuai itinerary',
                    'Sarapan setiap hari',
                    'Asuransi perjalanan',
                ],
                'tidak_termasuk' => [
                    'Visa on Arrival Thailand (jika diperlukan)',
                    'Makan siang & makan malam',
                    'Pengeluaran pribadi',
                    'Tips guide & driver',
                ],
                'catatan' => [
                    'WNI bebas visa ke Thailand untuk kunjungan hingga 30 hari.',
                    'Minimal keberangkatan Open Trip 8 pax.',
                    'Hindari pakaian terbuka saat mengunjungi Grand Palace & kuil.',
                    'Tersedia paket tanpa Pattaya atau tanpa Phuket sesuai permintaan.',
                ],
            ],

            [
                'id'             => 12,
                'tipe'           => 'mancanegara',
                'nama'           => 'Korea Selatan 4 Season',
                'slug'           => 'korea-selatan',
                'kategori'       => ['Open Trip', 'Family Gathering'],
                'is_recommended' => true,
                'harga'          => 14900000,
                'durasi'         => '6 Hari 5 Malam',
                'lokasi'         => 'Korea Selatan',
                'image'          => 'https://images.unsplash.com/photo-1538669715315-155098f0fb1d',
                'deskripsi'      => 'Menjelajahi Seoul yang dinamis, kota pesisir Busan, dan keindahan alam Pulau Jeju.',
                'gallery'        => [
                    'https://images.unsplash.com/photo-1538669715315-155098f0fb1d?w=1000',
                    'https://images.unsplash.com/photo-1517154421773-0529f29ea451?w=1000',
                    'https://images.unsplash.com/photo-1578637387939-43c525550085?w=1000',
                ],
                'itinerary' => [
                    [
                        'hari'     => 'Hari 1 - Seoul',
                        'kegiatan' => [
                            'Tiba di Bandara Incheon',
                            'Airport Railroad ke pusat kota',
                            'Check-in hotel di Seoul',
                            'Myeongdong Shopping Street',
                            'Makan malam Korean BBQ pertama',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 2 - Seoul',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Gyeongbokgung Palace & Hanbok experience',
                            'Bukchon Hanok Village',
                            'Insadong Art Street',
                            'N Seoul Tower (Namsan)',
                            'Han River Picnic',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 3 - Busan',
                        'kegiatan' => [
                            'Sarapan & check-out',
                            'KTX (Kereta Cepat) Seoul - Busan',
                            'Gamcheon Culture Village',
                            'Haeundae Beach',
                            'Jagalchi Fish Market & makan malam seafood segar',
                            'Check-in hotel Busan',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 4 - Jeju',
                        'kegiatan' => [
                            'Penerbangan Busan - Jeju',
                            'Hallasan National Park',
                            'Seongsan Ilchulbong (Sunrise Peak)',
                            'Manjanggul Cave',
                            'Jeju Haenyeo (Women Divers) Show',
                            'Check-in resort di Jeju',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 5 - Jeju - Seoul',
                        'kegiatan' => [
                            'Sarapan & menikmati resort',
                            'Cheonjeyeon Waterfall',
                            'Teddy Bear Museum',
                            'Penerbangan kembali ke Seoul',
                            'Lotte World Tower Observation',
                            'Dongdaemun Design Plaza (malam)',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 6 - Kembali',
                        'kegiatan' => [
                            'Sarapan & check-out',
                            'Belanja terakhir di Duty Free',
                            'Transfer ke Bandara Incheon',
                            'Penerbangan kembali ke Jakarta',
                        ],
                    ],
                ],
                'termasuk' => [
                    'Tiket pesawat PP Jakarta - Seoul / Seoul - Jakarta',
                    'Tiket KTX Seoul - Busan',
                    'Tiket pesawat domestik Busan - Jeju - Seoul',
                    'Hotel bintang 4 (5 malam)',
                    'Tour Guide berbahasa Indonesia',
                    'Transportasi bus pariwisata',
                    'Tiket masuk objek wisata sesuai itinerary',
                    'Sarapan setiap hari',
                    'Asuransi perjalanan',
                ],
                'tidak_termasuk' => [
                    'Visa Korea Selatan (dibantu pengurusan)',
                    'Makan siang & makan malam',
                    'Pengeluaran pribadi & oleh-oleh',
                    'Tips guide & driver',
                ],
                'catatan' => [
                    'Visa Korea Selatan wajib diurus minimal 2 minggu sebelum keberangkatan.',
                    'Tersedia untuk semua musim — spring (April), summer (Juli), autumn (Oktober), winter (Desember).',
                    'Minimal keberangkatan Open Trip 10 pax.',
                    'Suhu winter bisa di bawah -10°C, pastikan membawa pakaian hangat.',
                ],
            ],

            [
                'id'             => 13,
                'tipe'           => 'mancanegara',
                'nama'           => 'Australia East Coast',
                'slug'           => 'australia-east-coast',
                'kategori'       => ['Open Trip', 'Meeting Planner'],
                'is_recommended' => false,
                'harga'          => 28000000,
                'durasi'         => '8 Hari 7 Malam',
                'lokasi'         => 'Australia',
                'image'          => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9',
                'deskripsi'      => 'Menjelajahi pantai ikonik Sydney, budaya seni Melbourne, dan taman hiburan kelas dunia di Gold Coast.',
                'gallery'        => [
                    'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?w=1000',
                    'https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=1000',
                    'https://images.unsplash.com/photo-1524293581917-878a6d017c71?w=1000',
                ],
                'itinerary' => [
                    [
                        'hari'     => 'Hari 1-2 - Sydney',
                        'kegiatan' => [
                            'Tiba di Bandara Sydney Kingsford Smith',
                            'Check-in hotel',
                            'Sydney Opera House & Harbour Bridge',
                            'Bondi Beach',
                            'Darling Harbour',
                            'Blue Mountains Day Trip',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 3-4 - Melbourne',
                        'kegiatan' => [
                            'Penerbangan Sydney - Melbourne',
                            'Federation Square & Flinders Street Station',
                            'Queen Victoria Market',
                            'Great Ocean Road Day Trip',
                            'Twelve Apostles',
                            'Laneways & Street Art Melbourne',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 5-6 - Gold Coast',
                        'kegiatan' => [
                            'Penerbangan Melbourne - Gold Coast',
                            'Surfers Paradise Beach',
                            'Warner Bros. Movie World',
                            'Sea World atau Wet\'n\'Wild',
                            'Currumbin Wildlife Sanctuary (kanguru & koala)',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 7 - Brisbane',
                        'kegiatan' => [
                            'South Bank Parklands',
                            'Story Bridge',
                            'Belanja oleh-oleh terakhir',
                            'Makan malam perpisahan',
                        ],
                    ],
                    [
                        'hari'     => 'Hari 8 - Kembali',
                        'kegiatan' => [
                            'Sarapan & check-out',
                            'Transfer ke Bandara Brisbane',
                            'Penerbangan kembali ke Jakarta',
                        ],
                    ],
                ],
                'termasuk' => [
                    'Tiket pesawat PP Jakarta - Sydney / Brisbane - Jakarta',
                    'Tiket pesawat domestik Sydney - Melbourne & Melbourne - Gold Coast',
                    'Hotel bintang 4 (7 malam)',
                    'Tour Guide berbahasa Indonesia',
                    'Transportasi bus pariwisata',
                    'Tiket masuk objek wisata sesuai itinerary',
                    'Sarapan setiap hari',
                    'Asuransi perjalanan internasional',
                ],
                'tidak_termasuk' => [
                    'Visa Australia (dibantu pengurusan)',
                    'Makan siang & makan malam',
                    'Pengeluaran pribadi & oleh-oleh',
                    'Tips guide & driver',
                ],
                'catatan' => [
                    'Visa Australia harus diajukan minimal 4 minggu sebelum keberangkatan.',
                    'Tim Arfaka membantu proses aplikasi Visa Australia.',
                    'Minimal keberangkatan Open Trip 12 pax.',
                    'Musim terbaik kunjungan: September - November (spring) atau Maret - Mei (autumn).',
                ],
            ],
        ];
    }

    public static function findPaket($slug)
    {
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
