{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Detail Paket - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

    {{-- hero section --}}
    <div class="w-full h-[40vh] md:h-[50vh] relative">
        <img src="{{ $paket['image'] }}" alt="{{ $paket['nama'] }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-linear-to-t from-gray-950 via-gray-950/40 to-transparent"></div>

        <div class="absolute bottom-0 left-0 w-full p-6 md:p-12 max-w-7xl mx-auto">
            <div class="flex items-center text-lime-400 mb-2 font-medium">
                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                </svg>
                {{ $paket['lokasi'] }}
            </div>
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-4">
                {{ $paket['nama'] }}
            </h1>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 py-12 relative z-10">
        <div class="flex flex-col lg:flex-row gap-10">

            <div class="lg:w-2/3 space-y-12">

                <section>
                    @if (isset($paket['kategori']) && is_array($paket['kategori']))
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($paket['kategori'] as $kategori)
                                <span
                                    class="bg-lime-50 border border-lime-200 text-lime-700 text-xs md:text-sm font-extrabold uppercase tracking-widest px-2.5 py-1 rounded-full">
                                    {{ $kategori }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Perjalanan Ini</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">{{ $paket['deskripsi'] }}</p>
                </section>

                {{-- rencana perjalanan --}}
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Rencana Perjalanan</h2>
                    <div class="space-y-6">
                        @foreach ($paket['itinerary'] as $jadwal)
                            <div class="group bg-white p-6 border border-gray-200 shadow-sm relative overflow-hidden">
                                <div
                                    class="absolute left-0 top-0 w-1.5 bg-lime-400 h-0 transition-all duration-300 ease-out group-hover:h-full">
                                </div>
                                <h3 class="font-bold text-lg text-gray-900 mb-4 ml-2">{{ $jadwal['hari'] }}</h3>
                                <ul class="space-y-3 ml-2">
                                    @foreach ($jadwal['kegiatan'] as $kegiatan)
                                        <li class="flex items-start text-gray-600">
                                            <div class="mt-1.5 mr-3 w-1.5 h-1.5 rounded-full bg-gray-400 shrink-0">
                                            </div>
                                            {{ $kegiatan }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </section>

                <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-6 border border-green-100 shadow-sm">
                        <h3 class="font-bold text-lg text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Termasuk
                        </h3>
                        <ul class="space-y-2">
                            @foreach ($paket['termasuk'] as $item)
                                <li class="text-gray-600 text-sm flex items-start">
                                    <span class="text-green-500 mr-2">✓</span> {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-red-100 shadow-sm">
                        <h3 class="font-bold text-lg text-gray-900 mb-4 flex items-center">
                            <svg class="w-6 h-6 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Tidak Termasuk
                        </h3>
                        <ul class="space-y-2">
                            @foreach ($paket['tidak_termasuk'] as $item)
                                <li class="text-gray-600 text-sm flex items-start">
                                    <span class="text-red-500 mr-2">✕</span> {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>

                {{-- gallery preview --}}
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Galeri Destinasi</h2>
                    @if (isset($paket['gallery']) && count($paket['gallery']) > 0) {{-- Mengecek apakah key atau variabel gallery itu ada di dalam array $paket && Mengecek jumlah isi di dalam array gallery > 0 --}}
                        <div class="relative w-full rounded-3xl overflow-hidden shadow-lg group">

                            <div id="carousel-track"
                                class="flex transition-transform duration-500 ease-in-out h-64 md:h-96">
                                @foreach ($paket['gallery'] as $img)
                                    <div class="min-w-full h-full">
                                        <img src="{{ $img }}" alt="Preview" class="w-full h-full object-cover">
                                    </div>
                                @endforeach
                            </div>

                            <button id="prevBtn"
                                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white text-gray-900 p-3 rounded-full backdrop-blur-sm transition-all duration-300 opacity-0 group-hover:opacity-100 shadow-md cursor-pointer">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>

                            <button id="nextBtn"
                                class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white text-gray-900 p-3 rounded-full backdrop-blur-sm transition-all duration-300 opacity-0 group-hover:opacity-100 shadow-md cursor-pointer">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </button>

                            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
                                @foreach ($paket['gallery'] as $index => $img)
                                    <button
                                        class="indicator-btn cursor-pointer h-2.5 rounded-full transition-all duration-300 {{ $index == 0 ? 'w-6 bg-lime-400' : 'w-2.5 bg-white/50' }}"
                                        data-index="{{ $index }}"></button>
                                @endforeach
                            </div>

                        </div>
                    @else
                        <p class="text-gray-500 italic">*Belum ada foto galeri untuk paket ini.</p>
                    @endif
                </section>

                {{-- catatan penting --}}
                <section class="bg-amber-50 rounded-2xl p-6 border border-amber-200">
                    <h3 class="font-bold text-lg text-amber-900 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Catatan Penting
                    </h3>
                    <ul class="list-disc list-inside space-y-1 text-sm text-amber-800">
                        @foreach ($paket['catatan'] as $note)
                            <li>{{ $note }}</li>
                        @endforeach
                    </ul>
                </section>

            </div>

            <div class="lg:w-1/3">
                <div class="bg-white rounded-3xl p-8 border border-gray-200 shadow-xl sticky top-28">
                    <div class="mb-6">
                        <span class="text-gray-500 text-sm font-medium">Harga Mulai Dari</span>
                        <div class="text-3xl font-black text-gray-900 mt-1">
                            Rp {{ number_format($paket['harga'], 0, ',', '.') }}
                        </div>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-lime-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="font-medium">Durasi:</span> <span class="ml-auto">{{ $paket['durasi'] }}</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 mr-3 text-lime-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                            </svg>
                            <span class="font-medium">Lokasi:</span> <span class="ml-auto">{{ $paket['lokasi'] }}</span>
                        </div>
                    </div>

                    @php
                        $pesanWA =
                            "Halo Nravel,\nSaya tertarik dengan paket *" .
                            $paket['nama'] .
                            "*.\nMohon info ketersediaan dan pemesanannya.";
                        $urlWA = 'https://wa.me/6285155447502?text=' . urlencode($pesanWA);
                    @endphp

                    <a href="{{ $urlWA }}" target="_blank"
                        class="block w-full text-center bg-gray-900 hover:bg-black text-lime-400 font-bold text-lg py-4 rounded-full transition-colors shadow-lg">
                        Pesan via WhatsApp
                    </a>

                    <p class="text-center text-sm text-gray-400 mt-4">Pemesanan aman & dilayani 24/7</p>
                </div>
            </div>

        </div>
    </main>


    {{-- push kode js ke layouts utama --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const track = document.getElementById('carousel-track');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const indicators = document.querySelectorAll('.indicator-btn');

                if (!track) return; // Hentikan script jika tidak ada carousel

                let currentIndex = 0;
                const totalSlides = indicators.length;


                function updateCarousel() {
                    // Geser track ke kiri sesuai index
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;

                    // Update tampilan titik indikator
                    indicators.forEach((dot, index) => {
                        if (index === currentIndex) {
                            dot.classList.add('w-6', 'bg-lime-400');
                            dot.classList.remove('w-2.5', 'bg-white/50');
                        } else {
                            dot.classList.add('w-2.5', 'bg-white/50');
                            dot.classList.remove('w-6', 'bg-lime-400');
                        }
                    });
                }

                // Event Tombol Kanan
                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
                    updateCarousel();
                });

                // Event Tombol Kiri
                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
                    updateCarousel();
                });

                // Event Klik pada Titik Indikator
                indicators.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentIndex = index;
                        updateCarousel();
                    });
                });
            });
        </script>
    @endpush

@endsection
