{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Beranda - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

    {{-- Hero Section: Premium Professional Travel --}}
    {{-- gallery carousel preview --}}
    <section class="w-full"> {{-- Container agar lebih rapi di layar lebar --}}
        <div class="relative w-full mt-20 h-[70vh] overflow-hidden shadow-2xl group">

            <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out h-full">
                @foreach ($heroSlider as $arr)
                    <div class="relative min-w-full h-full bg-gray-900">
                        {{-- Image Slider --}}
                        <img src="{{ $arr['image'] }}" alt="Carousel Image" class="w-full h-full object-cover">

                        {{-- Overlay Gradien Hitam (PENTING agar teks terbaca) --}}
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>

                        {{-- Text Slider (Sudah pakai Flexbox Center) --}}
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
                            {{-- Judul Utama --}}
                            <h1
                                class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white drop-shadow-xl mb-4 tracking-tight leading-tight max-w-4xl">
                                {{ $arr['text'] }}
                            </h1>

                            {{-- Subjudul --}}
                            @if ($arr['subtext'] ?? false)
                                <p class="text-white/75 text-base md:text-xl max-w-2xl mb-8 leading-relaxed font-light">
                                    {{ $arr['subtext'] }}
                                </p>
                            @endif

                            {{-- Tombol CTA --}}
                            @if ($arr['button'] ?? false)
                                <a href="{{ $arr['link'] ?? '#' }}"
                                    class="group/btn inline-flex items-center gap-3 bg-travel-tertiary hover:bg-travel-tertiary text-gray-900 font-bold text-sm md:text-base px-8 py-4 rounded-full shadow-2xl shadow-amber-500/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-amber-400/50 uppercase tracking-widest">
                                    Lihat Paket Wisata
                                    <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>




            {{-- Tombol Di Mobile --}}
            <div
                class="absolute flex items-center justify-center gap-x-2 left-1/2 bottom-6 -translate-x-1/2 md:hidden bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full shadow-md z-10 animate-pulse">
                {{-- Ikon Kiri --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

                {{-- Teks --}}
                <span class="text-sm font-medium text-gray-700">Usap Ke Samping</span>

                {{-- Ikon Kanan --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>




            {{-- Tombol Prev --}}
            <button id="prevBtn"
                class="absolute hidden md:block mx-4 left-4 bottom-6 md:bottom-auto md:left-6 md:top-1/2 md:-translate-y-1/2 bg-white/80 hover:bg-white/30 text-gray-900 hover:text-gray-900 p-4 rounded-full backdrop-blur-md transition-all duration-300 opacity-0 group-hover:opacity-100 shadow-lg cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            {{-- Tombol Next --}}
            <button id="nextBtn"
                class="absolute hidden md:block mx-4 right-4 bottom-6 md:bottom-auto md:right-6 md:top-1/2 md:-translate-y-1/2 bg-white/80 hover:bg-white/30 text-gray-900 hover:text-gray-900 p-4 rounded-full backdrop-blur-md transition-all duration-300 opacity-0 group-hover:opacity-100 shadow-lg cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

        </div>
    </section>



    {{-- Apa yang Bisa Kami Bantu? --}}
    <section class="w-full bg-zinc-50 py-24 px-4 md:px-6 lg:px-12 overflow-hidden">
        <div class="max-w-7xl mx-auto">

            {{-- Header --}}
            <div class="flex flex-col mb-8">
                <div>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight mb-4">
                        Kami Siap Melayani
                    </h2>
                </div>
                <p class="text-gray-600 text-lg">
                    Tiga layanan utama kami<br>dirancang untuk memenuhi setiap kebutuhan perjalanan Anda.
                </p>
            </div>

            {{-- Cards --}}
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-px bg-gray-100 rounded-3xl overflow-hidden border border-travel-primary">

                {{-- 1. Jasa & Layanan Wisata --}}
                <div
                    class="group bg-white hover:bg-gray-950 transition-colors duration-500 p-8 md:p-10 flex flex-col gap-8 cursor-default">

                    {{-- Nomor + Icon --}}
                    <div class="flex items-start justify-between">
                        <span
                            class="text-[11px] font-bold text-gray-600 group-hover:text-zinc-300 tracking-widest transition-colors duration-500">
                            01
                        </span>
                        <div
                            class="w-10 h-10 rounded-full border border-gray-100 group-hover:border-travel-primary/40 flex items-center justify-center transition-all duration-500">
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-travel-primary transition-colors duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Konten --}}
                    <div class="flex flex-col gap-4 flex-1">
                        <h3
                            class="text-2xl font-bold text-gray-900 group-hover:text-white transition-colors duration-500 leading-snug">
                            Jasa & Layanan Wisata
                        </h3>
                        <p
                            class="text-sm text-gray-400 group-hover:text-zinc-500 leading-relaxed transition-colors duration-500">
                            Perencanaan perjalanan dari awal hingga akhir — itinerary, pemandu lokal, akomodasi, dan tiket
                            wisata semua diurus oleh tim profesional kami.
                        </p>

                        <ul class="mt-2 space-y-2.5">
                            @foreach (['Perencanaan Itinerary', 'Guide Lokal Berpengalaman', 'Booking Hotel & Akomodasi', 'Tiket Wisata & Pesawat'] as $item)
                                <li class="flex items-center gap-3">
                                    <div class="w-px h-3 bg-travel-primary shrink-0"></div>
                                    <span
                                        class="text-xs text-gray-500 group-hover:text-zinc-400 transition-colors duration-500">
                                        {{ $item }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CTA --}}
                    <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank"
                        class="inline-flex items-center gap-2 text-xs font-bold text-gray-400 group-hover:text-travel-primary transition-all duration-300 hover:gap-4 w-fit mt-auto">
                        Konsultasi Gratis
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- 2. Paket Wisata (highlighted) --}}
                <div
                    class="group bg-gray-950 hover:bg-travel-primary transition-colors duration-500 p-8 md:p-10 flex flex-col gap-8 cursor-default relative overflow-hidden">

                    {{-- Nomor + Icon --}}
                    <div class="flex items-start justify-between">
                        <span
                            class="text-[11px] font-bold text-gray-300 group-hover:text-zinc-600 tracking-widest transition-colors duration-500">
                            02
                        </span>
                        <div
                            class="w-10 h-10 rounded-full border border-travel-tertiary group-hover:border-zinc-600 flex items-center justify-center transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-travel-tertiary group-hover:text-zinc-600 transition-colors duration-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 flex-1">
                        <h3 class="text-2xl font-bold text-white leading-snug">
                            Paket Wisata
                        </h3>
                        <p
                            class="text-sm text-zinc-400 group-hover:text-white/70 leading-relaxed transition-colors duration-500">
                            Domestik maupun mancanegara — paket siap berangkat dengan harga transparan, fasilitas lengkap,
                            dan itinerary yang sudah tersusun rapi.
                        </p>

                        <ul class="mt-2 space-y-2.5">
                            @foreach (['Open Trip & Private Trip', 'Family Gathering', 'Meeting Planner / MICE', 'Custom Paket Sesuai Budget'] as $item)
                                <li class="flex items-center gap-3">
                                    <div
                                        class="w-px h-3 bg-travel-tertiary group-hover:bg-white shrink-0 transition-colors duration-500">
                                    </div>
                                    <span
                                        class="text-xs text-zinc-400 group-hover:text-white/80 transition-colors duration-500">
                                        {{ $item }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="/destinasi/domestik"
                        class="inline-flex items-center gap-2 text-xs font-bold text-travel-tertiary group-hover:text-white transition-all duration-300 hover:gap-4 w-fit mt-auto">
                        Lihat Semua Paket
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- 3. Sewa Transportasi --}}
                <div
                    class="group bg-white hover:bg-gray-950 transition-colors duration-500 p-8 md:p-10 flex flex-col gap-8 cursor-default">

                    <div class="flex items-start justify-between">
                        <span
                            class="text-[11px] font-bold text-gray-600 group-hover:text-zinc-300 tracking-widest transition-colors duration-500">
                            03
                        </span>
                        <div
                            class="w-10 h-10 rounded-full border border-gray-100 group-hover:border-travel-secondary/40 flex items-center justify-center transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 text-gray-400 group-hover:text-travel-secondary transition-colors duration-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 flex-1">
                        <h3
                            class="text-2xl font-bold text-gray-900 group-hover:text-white transition-colors duration-500 leading-snug">
                            Sewa Transportasi
                        </h3>
                        <p
                            class="text-sm text-gray-400 group-hover:text-zinc-500 leading-relaxed transition-colors duration-500">
                            Armada lengkap dengan pengemudi berpengalaman untuk perjalanan wisata, jemput bandara, atau
                            acara khusus Anda.
                        </p>

                        <ul class="mt-2 space-y-2.5">
                            @foreach (['Minibus & Hiace', 'Elf & Medium Bus', 'Big Bus Pariwisata', 'Jemput Antar Bandara'] as $item)
                                <li class="flex items-center gap-3">
                                    <div class="w-px h-3 bg-travel-secondary shrink-0"></div>
                                    <span
                                        class="text-xs text-gray-500 group-hover:text-zinc-400 transition-colors duration-500">
                                        {{ $item }}
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank"
                        class="inline-flex items-center gap-2 text-xs font-bold text-gray-400 group-hover:text-travel-secondary transition-all duration-300 hover:gap-4 w-fit mt-auto">
                        Cek Ketersediaan
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>





    {{-- Tentang Kami --}}
    <section class="w-full bg-zinc-50 py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row items-start gap-10 lg:gap-20 mb-16">

                {{-- Kiri: Heading + Deskripsi + Keunggulan --}}
                <div class="w-full md:w-5/12">
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight mb-6">
                        Tentang Kami
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        <strong>Arfaka Tour and Travel</strong> hadir untuk mewujudkan perjalanan impian Anda dengan layanan
                        yang profesional dan transparan. Kami percaya bahwa setiap perjalanan bukan sekadar mengunjungi
                        destinasi, melainkan merangkai cerita dan pengalaman berharga yang patut dikenang selamanya.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach ([['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label' => 'Berlisensi & Terpercaya'], ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => 'Harga Transparan'], ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'label' => 'Support 24 Jam'], ['icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'label' => '10.000+ Klien Puas']] as $item)
                            <div
                                class="flex items-center gap-3 bg-white rounded-xl px-4 py-3 border border-gray-100 shadow-sm">
                                <div
                                    class="w-8 h-8 rounded-lg bg-travel-primary/10 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4 text-travel-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="{{ $item['icon'] }}" />
                                    </svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-700">{{ $item['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Kanan: Timeline --}}
                <div class="w-full md:w-7/12">

                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-10">Perjalanan Kami</p>

                    <div class="relative">

                        {{-- Garis vertikal --}}
                        <div class="absolute left-0 top-2 bottom-2 w-px bg-gray-200"></div>

                        <div class="flex flex-col gap-10 pl-8">

                            {{-- 2019 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-travel-primary border-2 border-white ring-2 ring-travel-primary/20">
                                </div>
                                <span
                                    class="text-xs font-bold text-travel-primary uppercase tracking-widest block mb-1">2019</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Pendirian PT Arfaka Tour and Travel</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    PT Arfaka Tour and Travel resmi didirikan dan mendapatkan izin usaha perjalanan wisata.
                                    Beroperasi perdana dengan fokus layanan wisata lokal di Bali dan sekitarnya.
                                </p>
                            </div>

                            {{-- 2020 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">2020</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Bertahan di Masa Pandemi</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Di tengah guncangan pandemi global, Arfaka beradaptasi dengan menghadirkan paket wisata
                                    lokal, staycation, dan perjalanan jarak dekat yang aman.
                                </p>
                            </div>

                            {{-- 2021 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">2021</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Ekspansi Destinasi Nusantara</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Membuka rute baru ke Lombok, Raja Ampat, Labuan Bajo, dan Kepulauan Seribu — memperluas
                                    jangkauan layanan ke seluruh penjuru Indonesia.
                                </p>
                            </div>

                            {{-- 2022 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">2022</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">1.000 Klien Pertama</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Arfaka mencapai milestone 1.000 klien terlayani — bukti nyata kepercayaan dan komitmen
                                    kami terhadap kualitas layanan.
                                </p>
                            </div>

                            {{-- 2023 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">2023</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Membuka Layanan Mancanegara</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Resmi meluncurkan paket wisata internasional ke Jepang, Eropa, dan Asia Tenggara dengan
                                    harga kompetitif dan itinerary terstruktur.
                                </p>
                            </div>

                            {{-- 2024 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">2024</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">10.000+ Klien Terlayani</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Meraih milestone lebih dari 10.000 klien yang mempercayakan perjalanan mereka kepada
                                    kami.
                                </p>
                            </div>

                            {{-- Sekarang --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-travel-secondary border-2 border-white ring-2 ring-travel-secondary/20 animate-pulse">
                                </div>
                                <span class="inline-flex items-center gap-2 mb-1">
                                    <span
                                        class="text-xs font-bold text-travel-secondary uppercase tracking-widest">Sekarang</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-travel-secondary animate-ping"></span>
                                </span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Terus Berkembang untuk Anda</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Arfaka terus berinovasi menghadirkan layanan perjalanan terbaik — memperluas destinasi,
                                    meningkatkan kualitas, dan membangun pengalaman wisata yang tak terlupakan bagi setiap
                                    klien.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            {{-- Logo Marquee: Mitra & Instansi --}}
            <section class="w-full py-6 border-y border-gray-100 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 mb-8">
                    <p class="text-center text-xs text-gray-400 uppercase tracking-widest font-semibold">
                        Dipercaya & Bekerja Sama Dengan
                    </p>
                </div>
                <div class="relative" x-data="{ paused: false }">
                    <div
                        class="absolute left-0 top-0 h-full w-24 md:w-40 bg-linear-to-r from-zinc-50 to-transparent z-10 pointer-events-none">
                    </div>
                    <div
                        class="absolute right-0 top-0 h-full w-24 md:w-40 bg-linear-to-l from-zinc-50 to-transparent z-10 pointer-events-none">
                    </div>

                    <div class="flex items-center marquee-track" :class="paused ? 'marquee-paused' : ''"
                        @mouseenter="paused = true" @mouseleave="paused = false">

                        @php
                            $partners = [
                                ['name' => 'ASITA', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'IATA', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'Kemenparekraf', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'Garuda Indonesia', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'Bank BCA', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'Traveloka', 'logo' => asset('img/logoWeb.webp')],
                                ['name' => 'Tiket.com', 'logo' => asset('img/logoWeb.webp')],
                            ];
                        @endphp

                        {{-- Set 1 --}}
                        @foreach ($partners as $partner)
                            @if ($partner['logo'])
                                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}"
                                    class="h-28 w-auto object-contain shrink-0 mr-20 opacity-60 hover:opacity-100 transition-all duration-300">
                            @else
                                <span
                                    class="text-sm font-bold text-gray-400 tracking-widest whitespace-nowrap shrink-0 mr-20">
                                    {{ $partner['name'] }}
                                </span>
                            @endif
                        @endforeach

                        {{-- Set 2 --}}
                        @foreach ($partners as $partner)
                            @if ($partner['logo'])
                                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}"
                                    class="h-28 w-auto object-contain shrink-0 mr-20 opacity-60 hover:opacity-100 transition-all duration-300"
                                    aria-hidden="true">
                            @else
                                <span
                                    class="text-sm font-bold text-gray-400 tracking-widest whitespace-nowrap shrink-0 mr-20"
                                    aria-hidden="true">
                                    {{ $partner['name'] }}
                                </span>
                            @endif
                        @endforeach

                    </div>
                </div>
            </section>

        </div>
    </section>





    {{-- section why choose this travel agent --}}
    <section class="bg-gray-950 text-white py-26 relative">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                <div class="w-full lg:w-1/2">
                    <span class="text-travel-primary font-bold tracking-widest text-lg uppercase mb-2 block">Kenapa
                        Arfaka?</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-extrabold tracking-tight mb-12">
                        Liburan Tenang,<br>Tanpa Ribet.
                    </h2>

                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-travel-tertiary flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Agen Perjalanan Terpercaya</h4>
                                <p class="mt-1 text-gray-500">Legalitas jelas dan pengalaman melayani ratusan rute
                                    perjalanan di Bali.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-travel-tertiary flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Harga Jujur & Transparan</h4>
                                <p class="mt-1 text-gray-500">Paket All-in-One yang sudah mencakup tiket wisata,
                                    transport, hingga makan.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-travel-tertiary flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Support Penuh 24 Jam</h4>
                                <p class="mt-1 text-gray-500">Customer service yang ramah siap dihubungi kapan pun Anda
                                    butuh.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex justify-center md:justify-start">
                        <a href="{{ env('WHATSAPP_NUMBER') }}"
                            class="inline-block bg-travel-tertiary text-gray-950 text-sm font-bold uppercase tracking-wider px-10 py-4 rounded hover:bg-travel-tertiary-dark hover:text-gray-900 transition-colors">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="hidden lg:block absolute -top-4 -right-4 w-full h-full border-2 border-travel-primary rounded-2xl">
                    </div>
                    <img src="{{ asset('img/flyerKepulauanSeribu.svg') }}" alt="Bali"
                        class="relative w-full h-fit object-cover rounded-2xl shadow-xl z-10 hidden md:block">
                </div>

            </div>
        </div>
    </section>




    {{-- Cara Pesan Section --}}
    <section class="w-full bg-zinc-50 py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            {{-- Header --}}
            <div class="text-center mb-16">
                <span class="text-travel-primary font-semibold tracking-widest text-lg uppercase mb-3 block">
                    Mudah & Cepat
                </span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900">
                    Cara Pesan Paket Wisata
                </h2>
            </div>

            {{-- Steps --}}
            <div class="relative">

                {{-- Garis penghubung horizontal (desktop) --}}
                <div class="hidden lg:block absolute top-10 left-1/4 right-1/4 h-px bg-gray-300 -translate-y-1/2"
                    style="left: 12.5%; right: 12.5%;"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">

                    {{-- Step 1 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        {{-- Nomor + Icon --}}
                        <div class="relative mb-6">
                            <div
                                class="w-20 h-20 rounded-2xl bg-[#e8f8ff] flex items-center justify-center transition-all duration-300 group-hover:bg-travel-primary group-hover:shadow-lg group-hover:shadow-travel-primary/30 group-hover:-translate-y-1">
                                <svg class="w-9 h-9 text-travel-primary group-hover:text-white transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            {{-- Badge nomor --}}
                            <span
                                class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-travel-primary text-white text-xs font-bold flex items-center justify-center shadow">
                                1
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pilih Paket</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-45">
                            Jelajahi destinasi pilihan kami dan temukan paket yang sesuai budget Anda.
                        </p>
                    </div>

                    {{-- Step 2 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative mb-6">
                            <div
                                class="w-20 h-20 rounded-2xl bg-[#e8f8ff] flex items-center justify-center transition-all duration-300 group-hover:bg-travel-primary group-hover:shadow-lg group-hover:shadow-travel-primary/30 group-hover:-translate-y-1">
                                <svg class="w-9 h-9 text-travel-primary group-hover:text-white transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-travel-primary text-white text-xs font-bold flex items-center justify-center shadow">
                                2
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Hubungi via WhatsApp</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-45">
                            Klik tombol Pesan dan tim kami siap membantu konfirmasi ketersediaan.
                        </p>
                    </div>

                    {{-- Step 3 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative mb-6">
                            <div
                                class="w-20 h-20 rounded-2xl bg-[#e4f5ec] flex items-center justify-center transition-all duration-300 group-hover:bg-travel-secondary group-hover:shadow-lg group-hover:shadow-travel-primary/30 group-hover:-translate-y-1">
                                <svg class="w-9 h-9 text-travel-secondary group-hover:text-white transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-travel-secondary text-white text-xs font-bold flex items-center justify-center shadow">
                                3
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bayar DP 30%</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-45">
                            Lakukan pembayaran uang muka untuk mengamankan slot perjalanan Anda.
                        </p>
                    </div>

                    {{-- Step 4 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative mb-6">
                            <div
                                class="w-20 h-20 rounded-2xl bg-[#e4f5ec] flex items-center justify-center transition-all duration-300 group-hover:bg-travel-secondary group-hover:shadow-lg group-hover:shadow-travel-secondary/30 group-hover:-translate-y-1">
                                <svg class="w-9 h-9 text-travel-secondary group-hover:text-white transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span
                                class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-travel-secondary text-white text-xs font-bold flex items-center justify-center shadow">
                                4
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Siap Berangkat!</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-45">
                            Lunasi H-3 keberangkatan dan nikmati liburan impian Anda bersama kami.
                        </p>
                    </div>

                </div>
            </div>

            {{-- CTA bawah --}}
            <div class="mt-14 text-center">
                <a href="/destinasi"
                    class="inline-flex items-center gap-2 bg-travel-primary hover:bg-travel-primary-dark text-white font-semibold px-8 py-3.5 rounded-full transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-travel-primary/30">
                    Mulai Pilih Paket
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>




    {{-- preview popular package travel section --}}
    <section class="relative z-10 w-full bg-zinc-50 pb-10 md:py-10 px-4 md:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">Destinasi Pilihan</h2>
                    <p class="text-gray-600 text-lg">Jelajahi keindahan alam Indonesia dengan paket perjalanan eksklusif
                        yang kami rancang khusus untuk Anda.</p>
                </div>
                <a href="/destinasi"
                    class="mt-6 md:mt-0 inline-flex items-center font-semibold text-gray-900 hover:text-gray-600 transition-colors group">
                    Lihat Semua Paket
                    <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- some popular package --}}
                @foreach ($hookPakets as $paket)
                    <x-tour-card :paket="$paket" />
                @endforeach
            </div>
        </div>
    </section>




    {{-- FAX/pertanyaan umum --}}
    <section class=" bg-zinc-50 py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto">

            <div class="flex flex-col md:flex-row justify-center items-center p-8">
                <div class="text-center flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-18 ml-4 text-gray-950 md:hidden">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Pertanyaan yang Sering
                        Diajukan</h2>
                    <p class="text-gray-600 text-lg">Punya pertanyaan sebelum liburan? Temukan jawabannya di bawah ini.
                    </p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-18 ml-4 text-gray-950 hidden md:block">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-8">

                <details class="group border-b border-gray-100 last:border-none" open>
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-travel-secondary transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana cara memesan paket wisata di Arfaka?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-travel-secondary rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Anda dapat memesan melalui website dengan menekan tombol <strong>"Detail"</strong> pada paket
                        yang diinginkan, kemudian klik tombol <strong>"Pesan"</strong> yang akan otomatis mengarahkan
                        Anda ke WhatsApp Customer Support kami. Kami akan membantu proses booking hingga selesai.
                    </div>
                </details>

                <details class="group border-b border-gray-100 last:border-none">
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-travel-secondary transition-colors duration-300">
                        <span class="text-base md:text-lg">Apakah harga paket sudah termasuk tiket pesawat?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-travel-secondary rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Sebagian besar paket kami merupakan <em>Land Tour</em> (hanya mencakup transportasi, akomodasi,
                        dan tiket wisata di lokasi tujuan). Tiket pesawat <strong>tidak termasuk</strong> kecuali ada
                        keterangan khusus pada detail paket. Namun, kami bisa membantu mencarikan tiket pesawat jika
                        Anda membutuhkannya.
                    </div>
                </details>

                <details class="group border-b border-gray-100 last:border-none">
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-travel-secondary transition-colors duration-300">
                        <span class="text-base md:text-lg">Bisakah saya membuat paket liburan custom sendiri?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-travel-secondary rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Tentu saja! Kami sangat fleksibel. Jika Anda memiliki preferensi destinasi, hotel, atau jadwal
                        yang berbeda dari paket reguler kami, silakan hubungi Customer Support kami. Tim Nravel akan
                        merancang itinerary yang sesuai dengan keinginan dan budget Anda.
                    </div>
                </details>

                <details class="group border-b border-gray-100 last:border-none">
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-travel-secondary transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana dengan sistem pembayaran dan pembatalan?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-travel-secondary rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Pembayaran dilakukan melalui transfer bank resmi Nravel dengan sistem DP (Down Payment) sebesar
                        30% saat pemesanan, dan pelunasan maksimal H-3 sebelum keberangkatan. Untuk kebijakan pembatalan
                        (refund), hal tersebut bergantung pada regulasi hotel dan mitra transportasi kami di waktu
                        tersebut.
                    </div>
                </details>

            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const track = document.getElementById('carousel-track');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const carouselContainer = track ? track.parentElement : null;

                if (!track || !carouselContainer) return;

                let currentIndex = 0;
                const totalSlides = track.children.length;

                // Variabel untuk melacak posisi sentuhan
                let touchStartX = 0;
                let touchEndX = 0;

                function updateCarousel() {
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                function nextSlide() {
                    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
                    updateCarousel();
                }

                function prevSlide() {
                    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
                    updateCarousel();
                }

                // --- Logika Touch Events (Swipe) ---

                carouselContainer.addEventListener('touchstart', (e) => {
                    touchStartX = e.changedTouches[0].screenX;
                    // Hentikan auto-slide saat menyentuh
                    clearInterval(autoSlide);
                }, {
                    passive: true
                });

                carouselContainer.addEventListener('touchend', (e) => {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                    // Jalankan kembali auto-slide setelah jari diangkat
                    startAutoSlide();
                }, {
                    passive: true
                });

                function handleSwipe() {
                    const swipeDistance = touchStartX - touchEndX;
                    const minSwipeDistance = 50; // Jarak minimal swipe dalam pixel

                    if (swipeDistance > minSwipeDistance) {
                        // Swipe ke Kiri -> Slide Next
                        nextSlide();
                    } else if (swipeDistance < -minSwipeDistance) {
                        // Swipe ke Kanan -> Slide Prev
                        prevSlide();
                    }
                }

                // --- Navigasi Tombol ---
                if (nextBtn) nextBtn.addEventListener('click', () => {
                    nextSlide();
                    resetAutoSlide();
                });

                if (prevBtn) prevBtn.addEventListener('click', () => {
                    prevSlide();
                    resetAutoSlide();
                });

                // --- Kontrol Auto Slide ---
                let autoSlide;

                function startAutoSlide() {
                    autoSlide = setInterval(nextSlide, 4000);
                }

                function resetAutoSlide() {
                    clearInterval(autoSlide);
                    startAutoSlide();
                }

                // Inisialisasi awal
                startAutoSlide();

                // Hentikan auto-slide saat mouse masuk (Desktop)
                carouselContainer.addEventListener('mouseenter', () => clearInterval(autoSlide));
                carouselContainer.addEventListener('mouseleave', () => startAutoSlide());
            });
        </script>
    @endpush
@endsection
