<?php

namespace App\Models;

class Pakets {
    public static function all()
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
            ],
            [
                'id' => 9,
                'nama' => 'Orangutan Tanjung Puting',
                'slug' => 'tanjung-puting',
                'harga' => 3500000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Kalimantan Tengah',
                'image' => 'https://images.unsplash.com/photo-1560157077-980b1e10cc14',
                'deskripsi' => 'Pengalaman unik menyusuri sungai di hutan Kalimantan menggunakan perahu Klotok untuk melihat Orangutan.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Iskandar, Pangkalan Bun',
                            'Menuju Pelabuhan Kumai',
                            'Menaiki Klotok (perahu kayu tradisional) menyusuri Sungai Sekonyer',
                            'Makan siang di atas Klotok',
                            'Singgah di Tanjung Harapan untuk melihat feeding Orangutan',
                            'Susur sungai malam hari melihat kunang-kunang',
                            'Makan malam dan tidur di atas Klotok'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi di atas kapal',
                            'Melanjutkan perjalanan ke Pondok Tanggui (feeding Orangutan jam 09.00)',
                            'Perjalanan ke Camp Leakey (pusat rehabilitasi Orangutan)',
                            'Makan siang di kapal',
                            'Trekking singkat di Camp Leakey (feeding jam 14.00)',
                            'Kembali ke area nipa palm untuk bersandar',
                            'Makan malam dan istirahat'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Perjalanan kembali menuju Pelabuhan Kumai',
                            'Transfer kembali ke Bandara Iskandar'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Sewa Klotok Private (Lengkap dengan dek tidur dan kelambu)',
                    'Makan fullboard masakan koki lokal di kapal',
                    'Ranger / Guide resmi Taman Nasional',
                    'Tiket masuk Taman Nasional Tanjung Puting',
                    'Transfer Bandara PP'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat ke Pangkalan Bun',
                    'Biaya tambahan kamera (jika menggunakan kamera profesional)',
                    'Tipping kru kapal dan guide'
                ],
                'catatan' => [
                    'Kondisi tidur di atas perahu menggunakan kasur matras dan kelambu (semi-outdoor).',
                    'Bawa lotion anti nyamuk, pakaian menyerap keringat, dan jas hujan ringan.',
                    'Dilarang memberi makan satwa liar dan menjaga jarak aman.'
                ]
            ],
            [
                'id' => 10,
                'nama' => 'Eksplorasi Wae Rebo',
                'slug' => 'wae-rebo-trekking',
                'harga' => 1800000,
                'durasi' => '2 Hari 1 Malam',
                'lokasi' => 'NTT',
                'image' => 'https://images.unsplash.com/photo-1590408544465-9851f5c64319',
                'deskripsi' => 'Trekking menuju desa di atas awan, Wae Rebo, dan merasakan hidup di Mbaru Niang.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Labuan Bajo pagi hari',
                            'Perjalanan darat menuju Denge (sekitar 5 jam)',
                            'Makan siang di Denge',
                            'Persiapan dan mulai trekking menuju Wae Rebo (sekitar 3-4 jam)',
                            'Tiba di Wae Rebo, mengikuti upacara penyambutan (Waelu)',
                            'Bebas berinteraksi dengan masyarakat lokal dan berfoto',
                            'Makan malam khas Wae Rebo bersama masyarakat',
                            'Istirahat di rumah adat (Mbaru Niang)'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS)',
                        'kegiatan' => [
                            'Bangun pagi untuk menikmati kabut pagi di desa (Sunrise)',
                            'Sarapan pagi bersama',
                            'Membeli kopi khas Wae Rebo atau kerajinan tangan',
                            'Trekking turun kembali ke Denge',
                            'Makan siang',
                            'Perjalanan kembali menuju Labuan Bajo',
                            'Drop off di Hotel Labuan Bajo'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi PP dari Labuan Bajo ke Denge',
                    'Jasa Ojek lokal di Denge',
                    'Menginap 1 Malam di Mbaru Niang (Kasur komunal)',
                    'Makan sesuai itinerary',
                    'Donasi Upacara Waelu',
                    'Guide lokal / Porter'
                ],
                'tidak_termasuk' => [
                    'Akomodasi di Labuan Bajo',
                    'Pengeluaran pribadi',
                    'Tip untuk Guide / Porter'
                ],
                'catatan' => [
                    'Fisik harus prima karena jalur trekking menanjak di dalam hutan.',
                    'Bawa barang secukupnya menggunakan daypack.',
                    'Fasilitas di Wae Rebo sangat dasar, listrik terbatas dan sinyal telekomunikasi tidak ada.'
                ]
            ],
            [
                'id' => 11,
                'nama' => 'Pesona Dieng Plateau',
                'slug' => 'dieng-plateau',
                'harga' => 750000,
                'durasi' => '2 Hari 1 Malam',
                'lokasi' => 'Jawa Tengah',
                'image' => 'https://images.unsplash.com/photo-1600803513360-1e5bdfd1ec65',
                'deskripsi' => 'Menikmati golden sunrise di Bukit Sikunir, Kawah Sikidang, dan keindahan Candi Arjuna.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Stasiun Purwokerto / Yogyakarta',
                            'Perjalanan menuju Wonosobo - Dieng',
                            'Makan siang kuliner khas Mie Ongklok',
                            'Eksplorasi Komplek Candi Arjuna',
                            'Mengunjungi Kawah Sikidang',
                            'Menuju Batu Pandang Ratapan Angin melihat Telaga Warna dari atas',
                            'Check-in Homestay dan Makan Malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS)',
                        'kegiatan' => [
                            'Bangun jam 03.00 pagi, persiapan melihat sunrise',
                            'Trekking singkat ke Bukit Sikunir',
                            'Menikmati Golden Sunrise Sikunir',
                            'Sarapan pagi di area Sikunir',
                            'Mengunjungi Telaga Warna dan Telaga Pengilon',
                            'Kembali ke Homestay, mandi dan check-out',
                            'Beli oleh-oleh (Carica, Purwaceng)',
                            'Kembali ke Purwokerto / Yogyakarta'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi AC selama tour',
                    'Homestay di Dieng (1 kamar 2 orang)',
                    'Tiket masuk seluruh objek wisata',
                    'Makan sesuai itinerary (termasuk Mie Ongklok)',
                    'Driver as Guide'
                ],
                'tidak_termasuk' => [
                    'Tiket Kereta Api dari kota asal',
                    'Sewa jaket tebal di Dieng',
                    'Pengeluaran Pribadi'
                ],
                'catatan' => [
                    'Suhu udara di Dieng sangat dingin, wajib membawa jaket tebal, sarung tangan, dan kupluk.',
                    'Trekking Sikunir relatif aman untuk pemula, namun tetap gunakan sepatu yang nyaman.'
                ]
            ],
            [
                'id' => 12,
                'nama' => 'Blue Fire Kawah Ijen',
                'slug' => 'kawah-ijen-blue-fire',
                'harga' => 550000,
                'durasi' => '1 Hari 1 Malam',
                'lokasi' => 'Jawa Timur',
                'image' => 'https://images.unsplash.com/photo-1541480036128-4ce315486a42',
                'deskripsi' => 'Pendakian malam melihat fenomena api biru langka dan kawah belerang berwarna toska.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (Snack Pagi)',
                        'kegiatan' => [
                            'Penjemputan di Stasiun/Hotel Banyuwangi (00.00 WIB)',
                            'Perjalanan darat menuju Pos Paltuding',
                            'Briefing dan persiapan pendakian (01.30 WIB)',
                            'Trekking menuju puncak Kawah Ijen (sekitar 2 jam)',
                            'Turun ke area kawah untuk melihat fenomena Blue Fire',
                            'Menikmati keindahan kawah toska saat matahari terbit (Sunrise)',
                            'Melihat aktivitas penambang belerang tradisional',
                            'Trekking turun kembali ke Paltuding',
                            'Perjalanan kembali ke Banyuwangi, singgah di Air Terjun Jagir (opsional)',
                            'Drop off di Banyuwangi (09.00 WIB)'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi (Jeep/Trooper/Avanza)',
                    'Tiket masuk Kawah Ijen',
                    'Penyewaan Masker Gas khusus belerang',
                    'Air mineral & Snack ringan',
                    'Guide lokal (Penambang belerang berpengalaman)'
                ],
                'tidak_termasuk' => [
                    'Akomodasi Hotel di Banyuwangi',
                    'Sewa troli/gerobak dorong pendakian',
                    'Asuransi Perjalanan',
                    'Oleh-oleh kerajinan belerang'
                ],
                'catatan' => [
                    'Fenomena Blue Fire tidak selalu terlihat, tergantung cuaca dan intensitas belerang.',
                    'DILARANG keras bagi penderita asma dan penyakit jantung.',
                    'Gunakan sepatu trekking, jaket, dan senter kepala (headlamp).'
                ]
            ],
            [
                'id' => 13,
                'nama' => 'Budaya Tana Toraja',
                'slug' => 'tana-toraja-culture',
                'harga' => 2200000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Sulawesi Selatan',
                'image' => 'https://images.unsplash.com/photo-1596540608034-77ab40a97753',
                'deskripsi' => 'Mendalami budaya leluhur, melihat pemakaman unik di tebing batu, dan menikmati Kopi Toraja.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Sultan Hasanuddin, Makassar pagi hari',
                            'Perjalanan darat via Trans Sulawesi menuju Rantepao (Toraja)',
                            'Singgah di Pare-Pare untuk istirahat (Makan siang biaya sendiri)',
                            'Melewati Gunung Nona di Enrekang',
                            'Tiba di Rantepao malam hari, Check-in Hotel',
                            'Makan malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Mengunjungi Londa (Makam purba di dalam gua alam)',
                            'Mengunjungi Kete Kesu (Kompleks rumah adat Tongkonan tertua)',
                            'Makan siang',
                            'Mengunjungi Lemo (Makam di tebing batu dengan patung Tau-Tau)',
                            'Singgah ke pasar lokal untuk membeli Kopi Toraja asli',
                            'Makan malam dan kembali ke hotel'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Mengunjungi Patung Yesus Buntu Burake',
                            'Perjalanan darat kembali menuju Makassar',
                            'Drop off di Bandara atau Hotel di Makassar'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Transportasi darat nyaman (Innova/Hiace)',
                    'Akomodasi 2 malam di Rantepao',
                    'Makan sesuai itinerary',
                    'Tiket masuk objek wisata',
                    'Lampu petromaks/senter di Gua Londa',
                    'Local Guide Tana Toraja'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat PP',
                    'Sumbangan/Donasi adat (opsional jika ada upacara Rambu Solo)',
                    'Tipping Guide/Supir'
                ],
                'catatan' => [
                    'Perjalanan dari Makassar ke Toraja memakan waktu sekitar 8-9 jam darat.',
                    'Selalu menjaga kesopanan dan tidak menyentuh tengkorak/tulang di area pemakaman.',
                    'Jika beruntung, tamu bisa diajak melihat upacara adat kematian (Rambu Solo) yang sedang berlangsung.'
                ]
            ],
            [
                'id' => 14,
                'nama' => 'Penyelaman Taman Laut Bunaken',
                'slug' => 'bunaken-diving',
                'harga' => 1950000,
                'durasi' => '3 Hari 2 Malam',
                'lokasi' => 'Sulawesi Utara',
                'image' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5',
                'deskripsi' => 'Menyelami taman laut kelas dunia dengan dinding karang raksasa dan ratusan spesies ikan tropis.',
                'itinerary' => [
                    [
                        'hari' => 'Hari 1 (MS, MM)',
                        'kegiatan' => [
                            'Penjemputan di Bandara Sam Ratulangi Manado',
                            'City tour singkat Manado (Kawasan Mega Mas, Monumen Lilin)',
                            'Menuju Dermaga Marina dan menyeberang ke Pulau Bunaken',
                            'Check-in Resort di Bunaken',
                            'Bebas berenang di depan resort',
                            'Makan malam di Resort'
                        ]
                    ],
                    [
                        'hari' => 'Hari 2 (MP, MS, MM)',
                        'kegiatan' => [
                            'Sarapan pagi',
                            'Sesi Snorkeling / Fun Dive di spot 1 (Lekuan Wall)',
                            'Istirahat dan Makan siang di kapal atau resort',
                            'Sesi Snorkeling / Fun Dive di spot 2 (Fukui Point)',
                            'Kembali ke resort, bersantai sambil menanti sunset',
                            'Makan malam'
                        ]
                    ],
                    [
                        'hari' => 'Hari 3 (MP)',
                        'kegiatan' => [
                            'Sarapan pagi dan Check-out',
                            'Menyeberang kembali ke Manado',
                            'Belanja oleh-oleh khas Manado (Klapertart, Sambal Roa)',
                            'Drop off Bandara Sam Ratulangi'
                        ]
                    ]
                ],
                'termasuk' => [
                    'Akomodasi 2 malam di Bunaken Resort (AC)',
                    'Sewa perahu penyeberangan dan island hopping',
                    'Alat Snorkeling lengkap',
                    'Makan sesuai itinerary',
                    'Tiket masuk Taman Nasional Bunaken',
                    'Guide Laut (Dive Master untuk pendampingan)'
                ],
                'tidak_termasuk' => [
                    'Tiket Pesawat',
                    'Biaya tambahan Scuba Diving (Bagi yang memiliki lisensi selam)',
                    'Pengeluaran Pribadi'
                ],
                'catatan' => [
                    'Dilarang menyentuh, menginjak, atau mengambil terumbu karang laut.',
                    'Harga paket ini berlaku untuk aktivitas Snorkeling. Untuk upgrade ke paket Scuba Diving dikenakan biaya tambahan.',
                    'Bawalah kamera bawah air atau sewa di lokasi untuk mengabadikan momen.'
                ]
            ]
        ];
    } 
}