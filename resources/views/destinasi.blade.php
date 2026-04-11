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
        <div class="bg-linear-to-t from-gray-950 via-gray-950/80 to-white/10 absolute inset-x-0 bottom-0 h-full">
        </div>
    </div>

    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-lime-400/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 relative z-10">
        <nav class="flex mt-8 text-sm md:text-xl font-medium" aria-label="Breadcrumb">
            <a href="/" class="text-lime-400 hover:text-lime-500">Beranda</a>
            <span class="mx-2 text-white">/</span>
            <span class="text-white">Destinasi</span>
        </nav>
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight">
            Temukan <span class="text-lime-400">Petualangan</span><br>Selanjutnya di Sini
        </h1>
        <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto md:mx-0 hidden md:block">
            Jelajahi keajaiban tersembunyi dan destinasi ikonik. Pilih paket perjalanan yang
            dirancang khusus untuk kenyamanan dan petualangan Anda.
        </p>
    </div>
</section>

{{-- search bar untuk cari paket spesifik --}}
<div class="max-w-3xl mx-auto -mt-8">
    <form action="/destinasi" method="GET" class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" name="cari" value="{{ request('cari') }}"
            class="block w-full p-4 pl-12 text-gray-900 shadow-xl rounded-full bg-white focus:ring-lime-400 focus:border-lime-400 transition-all outline-none"
            placeholder="Cari destinasi">
        <button type="submit"
            class="text-gray-900 absolute right-2.5 bottom-2.5 bg-lime-400 hover:bg-lime-500 font-bold rounded-full text-sm px-6 py-2 transition-colors">
            Cari
        </button>
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

@endsection