{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Destinasi - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

    {{-- header --}}
    <section class="py-20 md:py-40 relative overflow-hidden">
        {{-- bg image --}}
        <div class="absolute left-0 top-0 w-full h-screen -z-10">
            <img src="{{ asset('img/homepage.avif') }}" alt="Background" class="w-full h-full object-cover">
            <div class="bg-linear-to-t from-gray-950 via-gray-950/80 to-white/10 absolute inset-x-0 bottom-0 h-full"></div>
        </div>

        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-lime-400/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 relative z-10">
            <nav class="flex mt-8 text-sm md:text-xl font-medium" aria-label="Breadcrumb">
                <a href="/" class="text-lime-400 hover:text-lime-500">Beranda</a>
                <span class="mx-2 text-white">/</span>
                <a href="/pilih-kota" class="text-lime-400 hover:text-lime-500">Pilih Kota</a>
                @if(request('lokasi'))
                    <span class="mx-2 text-white">/</span>
                    <span class="text-white">{{ request('lokasi') }}</span>
                @endif
            </nav>
            
            {{-- JUDUL DINAMIS --}}
            <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mt-2">
                @if(request('lokasi'))
                    Paket Wisata di <span class="text-lime-400">{{ request('lokasi') }}</span>
                @else
                    Temukan <span class="text-lime-400">Petualangan</span><br>Selanjutnya di Sini
                @endif
            </h1>
            
            <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto md:mx-0 hidden md:block">
                @if(request('lokasi'))
                    Jelajahi keajaiban tersembunyi dan destinasi ikonik yang ada di {{ request('lokasi') }}.
                @else
                    Jelajahi keajaiban tersembunyi dan destinasi ikonik. Pilih paket perjalanan yang dirancang khusus untuk Anda.
                @endif
            </p>
        </div>
    </section>

    {{-- search bar untuk cari paket spesifik --}}
    <div class="max-w-3xl mx-auto -mt-8">
        <form action="/destinasi" method="GET" class="relative">
            
            {{-- PENTING: Bawa terus parameter lokasi agar saat user nge-search, kotanya tidak keriset --}}
            @if(request('lokasi'))
                <input type="hidden" name="lokasi" value="{{ request('lokasi') }}">
            @endif

            {{-- search input group --}}
            <div class="relative mx-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" name="cari" value="{{ request('cari') }}"
                    class="block w-full p-4 pl-12 text-gray-900 shadow-xl rounded-full bg-white focus:ring-lime-400 focus:border-lime-400 transition-all outline-none"
                    placeholder="Cari destinasi @if(request('lokasi')) di {{ request('lokasi') }} @endif">
                <button type="submit"
                    class="cursor-pointer text-gray-900 absolute right-2.5 bottom-2.5 bg-lime-400 hover:bg-lime-500 font-bold rounded-full text-sm px-6 py-2 transition-colors">
                    Cari
                </button>
            </div>
            
            {{-- Category Filters (Pill Style) --}}
            <div class="mt-6 px-4 md:px-0">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-3 ml-2">Pilih Kategori:</p>
                <div class="flex flex-wrap gap-3 items-center">
                    <label class="cursor-pointer">
                        <input type="radio" name="kategori" value="" class="hidden peer" onchange="this.form.submit()" {{ request('kategori') == '' ? 'checked' : '' }}>
                        <span class="px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-semibold transition-all peer-checked:bg-lime-400 peer-checked:text-gray-900 peer-checked:border-lime-400 hover:border-lime-400 shadow-sm block">
                            Semua
                        </span>
                    </label>

                    @foreach (['Open Trip', 'Family Gathering', 'Meeting Planner'] as $kat)
                        <label class="cursor-pointer">
                            <input type="radio" name="kategori" value="{{ $kat }}" class="hidden peer" onchange="this.form.submit()" {{ request('kategori') == $kat ? 'checked' : '' }}>
                            <span class="px-5 py-2.5 rounded-full border border-gray-200 bg-white text-gray-600 text-sm font-semibold transition-all peer-checked:bg-lime-400 peer-checked:text-gray-900 peer-checked:border-lime-400 hover:border-lime-400 shadow-sm block">
                                {{ $kat }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>
        </form>
    </div>

    <main class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 py-16">

        @if (isset($notFound) && $notFound)
            <div class="max-w-4xl mx-auto mb-12 animate-in fade-in slide-in-from-top-4 duration-500">
                <div class="bg-amber-50 border-l-4 border-amber-400 p-6 rounded-2xl shadow-sm flex items-center">
                    <div class="bg-amber-100 p-2 rounded-full mr-4">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-amber-900 font-bold text-lg">Pencarian Tidak Ditemukan</h4>
                        <p class="text-amber-800 opacity-80">Maaf, paket "<span
                                class="font-bold underline">{{ request('cari') }}</span>" tidak tersedia. Menampilkan
                            semua paket menarik lainnya.</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($allPakets as $paket)
                <x-tour-card :paket="$paket" />
            @empty
                <div class="col-span-full py-20 text-center">
                    <p class="text-gray-400 text-lg">Belum ada paket tersedia saat ini.</p>
                </div>
            @endforelse
        </div>
    </main>






    {{-- CTA Custom Paket --}}
<section class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 pb-20">
    <div class="bg-zinc-900 rounded-3xl px-8 py-12 md:px-12 md:py-16 shadow-lg">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

            {{-- Kiri: Teks --}}
            <div class="text-center lg:text-left max-w-xl">
                
                <span class="block mb-3 text-travel-primary text-sm font-semibold tracking-wide uppercase">
                    Tidak menemukan yang cocok?
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-5">
                    Buat Paket Wisata <br class="hidden md:block">
                    <span class="text-travel-tertiary">Sesuai Keinginanmu</span>
                </h2>

                <p class="text-zinc-400 text-base leading-relaxed">
                    Ceritakan destinasi impian, jumlah peserta, dan budget Anda. Tim kami akan merancang itinerary eksklusif khusus untuk Anda.
                </p>

            </div>

            {{-- Kanan: Fitur + Tombol --}}
            <div class="flex flex-col items-center lg:items-start gap-8 shrink-0 w-full lg:w-auto">

                {{-- 3 Poin Keunggulan (Tanpa Border, Menggunakan SVG) --}}
                <div class="flex flex-wrap justify-center lg:justify-start gap-6 sm:gap-8 w-full">
                    
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-white/10 rounded-lg text-travel-tertiary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-zinc-200 text-sm font-medium">Bebas Destinasi</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-white/10 rounded-lg text-travel-tertiary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-zinc-200 text-sm font-medium">Sesuai Budget</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-white/10 rounded-lg text-travel-tertiary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="text-zinc-200 text-sm font-medium">Respon Cepat</span>
                    </div>

                </div>

                {{-- Tombol CTA & Keterangan --}}
                <div class="flex flex-col items-center lg:items-start gap-3 w-full">
                    <a href="/custom-paket"
                        class="group inline-flex w-full sm:w-auto items-center justify-center gap-2 bg-travel-tertiary hover:bg-white text-zinc-900 font-semibold text-sm px-8 py-3.5 rounded-full transition-colors duration-300">
                        Buat Custom Paket Sekarang
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <p class="text-zinc-500 text-sm flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Gratis konsultasi via WhatsApp
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
