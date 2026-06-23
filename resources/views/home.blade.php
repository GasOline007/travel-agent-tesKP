{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Beranda - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

    {{-- Hero Section: Premium Professional Travel --}}
    {{-- gallery carousel preview --}}
    <section class="w-full"> {{-- Container agar lebih rapi di layar lebar --}}
        <div class="relative w-full mt-20 h-[50vh] md:h-[70vh] overflow-hidden shadow-2xl group">

            <div id="carousel-track" class="flex transition-transform duration-700 ease-in-out h-full">
                @foreach ($banners as $banner)
                    <div class="relative min-w-full h-full bg-gray-900">
                        {{-- Image Slider --}}
                        <img src="{{ Storage::url($banner->image) }}" alt="Carousel Image" class="w-full h-full object-cover">

                        {{-- Overlay Gradien Hitam (PENTING agar teks terbaca) --}}
                        <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>

                        {{-- Text Slider (Sudah pakai Flexbox Center) --}}
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
                            {{-- Judul Utama --}}
                            <h1
                                class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white drop-shadow-xl mb-4 tracking-tight leading-tight max-w-4xl">
                                {{ $banner->text }}
                            </h1>

                            {{-- Subjudul --}}
                            @if ($banner->subtext)
                                <p class="text-white/75 text-base md:text-xl max-w-2xl mb-8 leading-relaxed font-light">
                                    {{ $banner->subtext }}
                                </p>
                            @endif

                            {{-- Tombol CTA --}}
                            @if ($banner->button)
                                <a href="{{ $banner->link ?? '#' }}"
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

    {{-- Company Specialist (8 Grid Layout) --}}
<section class="w-full bg-zinc-50 py-24 px-4 md:px-6 lg:px-12 overflow-hidden relative">
    
    {{-- Aksen Latar Belakang --}}
    <div class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-travel-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10">

        {{-- Header Section --}}
        <div class="text-center mb-16">
            <span class="text-travel-primary font-bold tracking-widest text-sm uppercase mb-3 block">Layanan Spesialis</span>
            <h2 class="text-3xl md:text-5xl font-serif font-extrabold text-gray-900 mb-6">
                Company Specialist
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                Delapan layanan unggulan kami yang dirancang khusus untuk memenuhi berbagai agenda, edukasi, hiburan, hingga kebutuhan bisnis Anda.
            </p>
        </div>

        {{-- 8 Grid Items --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">

            {{-- 1. Company Gathering --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Company Gathering</h3>
            </div>

            {{-- 2. Family Gathering --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Family Gathering</h3>
            </div>

            {{-- 3. Meeting Gathering --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Meeting Gathering</h3>
            </div>

            {{-- 4. Study Tour --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Study Tour</h3>
            </div>

            {{-- 5. Outbound --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Outbound</h3>
            </div>

            {{-- 6. Eco Edu Tourism --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Eco Edu Tourism</h3>
            </div>

            {{-- 7. Entertainment --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Entertainment</h3>
            </div>

            {{-- 8. Entrepreneurship --}}
            <div class="group bg-white border border-gray-100 hover:border-travel-primary/50 hover:shadow-xl hover:shadow-travel-primary/10 rounded-2xl p-6 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-1">
                <div class="w-14 h-14 bg-zinc-50 group-hover:bg-travel-primary/10 rounded-full flex items-center justify-center mb-4 transition-colors duration-300">
                    <svg class="w-7 h-7 text-gray-400 group-hover:text-travel-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.45" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base md:text-lg">Entrepreneurship</h3>
            </div>

        </div>
    </div>
</section>

    {{-- Tentang Kami --}}
    <section class="w-full bg-zinc-50 pb-20 px-4 md:pt-20 md:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row items-start gap-10 lg:gap-20 mb-16">

                {{-- Kiri: Heading + Deskripsi + Keunggulan --}}
                <div class="w-full md:w-5/12">
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-tight mb-6">
                        Tentang Kami
                    </h2>

                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        <strong>Arfaka</strong> merupakan suatu perusahaan yang bergerak dalam
                        bidang jasa yang meliputi berbagai kebutuhan seperti, Event
                        Organizer, Tour Travel, Outbound Activity, Gathering, Foto Video
                        Graphy serta kebutuhan event lainnya.
                        Dengan mengusung motto 'Guide Better Activity', Staff maupun
                        segenap Tim Lapangan, baik Project Officer, Fasilitator & Guide
                        ARFAKA senantiasa melayani klien dengan pelayanan yang
                        terbaik sepenuh hati demi kepuasan serta kebermanfaatan
                        dalam setiap program yang dilaksanakan.
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

                            {{-- 2010 --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-travel-primary border-2 border-white ring-2 ring-travel-primary/20">
                                </div>
                                <span
                                    class="text-xs font-bold text-travel-primary uppercase tracking-widest block mb-1">2010</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Pendirian Arfaka Tour Organizer</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Resmi didirikan sebagai penyedia jasa penawaran paket wisata. Pada tahun ini juga, jejak
                                    digital pertama perusahaan dimulai melalui pembuatan sebuah web blog.
                                </p>
                            </div>

                            {{-- Perjalanan 1 Dekade --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span
                                    class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">Perjalanan
                                    1 Dekade</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Kualitas & Kepercayaan Pelanggan</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Berhasil menjaga kualitas layanan yang dibuktikan dengan tingginya pemesanan berulang
                                    (repeat order) dari basis pelanggan lama yang solid, didukung kuat oleh pemasaran
                                    konvensional dari mulut ke mulut (word of mouth).
                                </p>
                            </div>

                            {{-- Era Transformasi --}}
                            <div class="relative">
                                <div
                                    class="absolute -left-8.5 top-1 w-3 h-3 rounded-full bg-gray-200 border-2 border-white">
                                </div>
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest block mb-1">Era
                                    Transformasi</span>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Inisiatif Ekspansi Pasar</h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Menyadari perlunya menjaring segmentasi pasar baru, Direktur menginstruksikan langkah
                                    strategis fundamental agar perusahaan dapat beradaptasi dan bersaing secara kompetitif
                                    di luar jaringan yang sudah ada.
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
                                <h4 class="text-sm font-bold text-gray-900 mb-1">Transformasi Digital & Optimalisasi SEO
                                </h4>
                                <p class="text-xs text-gray-400 leading-relaxed">
                                    Membangun website resmi (company profile) sebagai brosur digital interaktif dan media
                                    konversi pelanggan. Website ini diintegrasikan dengan Search Engine Optimization (SEO)
                                    untuk meningkatkan brand awareness dan menempati posisi strategis di mesin pencari
                                    Google.
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
                <div class="relative marquee-wrapper">
                    <div
                        class="absolute left-0 top-0 h-full w-24 md:w-40 bg-linear-to-r from-zinc-50 to-transparent z-10 pointer-events-none">
                    </div>
                    <div
                        class="absolute right-0 top-0 h-full w-24 md:w-40 bg-linear-to-l from-zinc-50 to-transparent z-10 pointer-events-none">
                    </div>

                    @php
                        $speedPerItem = 8; // detik per logo
                        $duration = max(30, count($partners) * $speedPerItem);
                    @endphp

                    <div class="flex items-center marquee-track" style="--marquee-duration: {{ $duration }}s">

                        {{-- SET 1 --}}
                        @for ($i = 0; $i < 5; $i++)
                            @foreach ($partners as $partner)
                                @if ($partner->logo)
                                    <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}"
                                        class="h-28 w-auto object-contain shrink-0 mr-20 opacity-60 hover:opacity-100 transition-all duration-300">
                                @else
                                    <span
                                        class="text-sm font-bold text-gray-400 tracking-widest whitespace-nowrap shrink-0 mr-20">
                                        {{ $partner->name }}
                                    </span>
                                @endif
                            @endforeach
                        @endfor

                        {{-- SET 2 --}}
                        @for ($i = 0; $i < 5; $i++)
                            @foreach ($partners as $partner)
                                @if ($partner->logo)
                                    <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}"
                                        class="h-28 w-auto object-contain shrink-0 mr-20 opacity-60 hover:opacity-100 transition-all duration-300"
                                        aria-hidden="true">
                                @else
                                    <span
                                        class="text-sm font-bold text-gray-400 tracking-widest whitespace-nowrap shrink-0 mr-20"
                                        aria-hidden="true">
                                        {{ $partner->name }}
                                    </span>
                                @endif
                            @endforeach
                        @endfor

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
                                <h4 class="text-xl font-bold">Personal</h4>
                                <p class="mt-1 text-gray-400">Memberikan yang terbaik dengan, Attitude, Ramah,
                                    santun dan Profesional dalam melayani kegiatan
                                    ataupun perjalanan wisata</p>
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
                                <h4 class="text-xl font-bold">Price</h4>
                                <p class="mt-1 text-gray-400">Memberikan solusi paket wisata dengan menyesuaikan
                                    harga terbaik hingga pemilihan destinasi wisata dengan
                                    mengutamakan kualitas pelayanan dan fasilitas </p>
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
                                <h4 class="text-xl font-bold">Program</h4>
                                <p class="mt-1 text-gray-400">Pilihan paket wisata sesuai dengan keinginan anda dan
                                    didukung dengan pelayanan terbaik dan ramah serta
                                    profesional</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex justify-center md:justify-start">
                        <a href="https://wa.me/{{ $no_wa }}" target="_blank"
                            class="inline-block bg-travel-tertiary text-gray-950 text-sm font-bold uppercase tracking-wider px-10 py-4 rounded hover:bg-travel-tertiary-dark hover:text-gray-900 transition-colors">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="hidden lg:block absolute -top-4 -right-4 w-full h-full border-2 border-travel-primary rounded-2xl">
                    </div>
                    <img src="{{ asset('img/posterHome.webp') }}" alt="Bali"
                        class="relative w-full h-fit object-cover rounded-2xl shadow-xl z-10 hidden md:block">
                </div>

            </div>
        </div>
    </section>

    {{-- Section Visi & Misi Travel Agent --}}
    <section class="bg-gray-950 py-24 md:py-32 relative overflow-hidden">

        {{-- Aksen Blur Minimalis di Latar Belakang (Opsional agar tidak terlalu flat) --}}
        <div
            class="absolute top-0 right-0 -mr-32 -mt-32 w-[30rem] h-[30rem] rounded-full bg-travel-primary/5 blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-start">

                {{-- Kolom Kiri: VISI (Span 5) --}}
                <div class="lg:col-span-5 flex flex-col">
                    {{-- Label Sub-judul --}}
                    <div class="inline-flex items-center gap-3 mb-6">
                        <span class="w-12 h-px bg-travel-primary"></span>
                        <span class="text-travel-primary text-sm font-bold tracking-widest uppercase">Visi
                            Perusahaan</span>
                    </div>

                    {{-- Tipografi Besar untuk Visi --}}
                    <h2 class="text-3xl md:text-4xl font-serif font-extrabold text-white leading-tight mb-8">
                        Menjadi <span class="text-travel-tertiary">Terdepan</span> dalam Pengalaman Perjalanan Anda.
                    </h2>

                    <p class="text-lg md:text-xl text-gray-400 font-light leading-relaxed">
                        "Menjadi penyedia jasa layanan pariwisata terdepan yang mengutamakan kualitas pelayanan dan
                        manajemen perjalanan, guna menjamin keamanan, kenyamanan, serta menciptakan pengalaman wisata yang
                        menyenangkan dan berkesan bagi setiap pelanggan."
                    </p>
                </div>

                {{-- Kolom Kanan: MISI (Span 7) --}}
                <div class="lg:col-span-7 flex flex-col lg:mt-6">
                    {{-- Label Sub-judul (Mobile: Kiri, Desktop: Menyesuaikan) --}}
                    <div class="inline-flex items-center gap-3 mb-10">
                        <span class="text-travel-tertiary text-sm font-bold tracking-widest uppercase">Misi Kami</span>
                        <span class="w-12 h-px bg-travel-tertiary"></span>
                    </div>

                    {{-- Daftar Misi Minimalis --}}
                    <div class="flex flex-col gap-8 md:gap-10">

                        {{-- Poin 01 --}}
                        <div class="flex gap-6 md:gap-8 group">
                            <div class="shrink-0">
                                <span
                                    class="text-4xl md:text-5xl font-black text-gray-800 group-hover:text-travel-primary transition-colors duration-500">01</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h4 class="text-xl md:text-2xl font-bold text-white mb-2">Perencanaan Aman & Nyaman</h4>
                                <p
                                    class="text-base text-gray-400 leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                                    Memfasilitasi dan memberikan kemudahan dalam perencanaan perjalanan wisata yang aman dan
                                    nyaman.
                                </p>
                            </div>
                        </div>

                        {{-- Garis Pemisah Tipis --}}
                        <hr class="border-gray-800/60">

                        {{-- Poin 02 --}}
                        <div class="flex gap-6 md:gap-8 group">
                            <div class="shrink-0">
                                <span
                                    class="text-4xl md:text-5xl font-black text-gray-800 group-hover:text-travel-primary transition-colors duration-500">02</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h4 class="text-xl md:text-2xl font-bold text-white mb-2">Paket Wisata Inovatif</h4>
                                <p
                                    class="text-base text-gray-400 leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                                    Menyediakan beragam pilihan paket perjalanan yang inovatif, menarik, dan berkualitas
                                    tinggi.
                                </p>
                            </div>
                        </div>

                        {{-- Garis Pemisah Tipis --}}
                        <hr class="border-gray-800/60">

                        {{-- Poin 03 --}}
                        <div class="flex gap-6 md:gap-8 group">
                            <div class="shrink-0">
                                <span
                                    class="text-4xl md:text-5xl font-black text-gray-800 group-hover:text-travel-primary transition-colors duration-500">03</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <h4 class="text-xl md:text-2xl font-bold text-white mb-2">Pelayanan Prima Konsisten</h4>
                                <p
                                    class="text-base text-gray-400 leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                                    Berkomitmen memberikan pelayanan prima secara konsisten demi mewujudkan kepuasan
                                    tertinggi pelanggan.
                                </p>
                            </div>
                        </div>

                    </div>
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
                        <div class="relative mb-6">
                            <div
                                class="w-20 h-20 rounded-2xl bg-[#e8f8ff] flex items-center justify-center transition-all duration-300 group-hover:bg-travel-primary group-hover:shadow-lg group-hover:shadow-travel-primary/30 group-hover:-translate-y-1">
                                <svg class="w-9 h-9 text-travel-primary group-hover:text-white transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
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
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Bayar DP</h3>
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
                <a href="{{ route('packages.tipe') }}"
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
                <a href="{{ route('packages.tipe') }}"
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
                @foreach ($recommendedPackages as $paket)
                    <x-tour-card :paket="$paket" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ/pertanyaan umum --}}
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
                        yang berbeda dari paket reguler kami, silakan hubungi Customer Support kami. Tim Arfaka akan
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
                        Pembayaran dilakukan melalui transfer bank resmi Arfaka Tour dengan sistem DP (Down Payment) sebesar
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
                    autoSlide = setInterval(nextSlide, 6000);
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
