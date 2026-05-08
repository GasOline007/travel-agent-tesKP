@extends('layouts')

@section('title', $title . ' - Arfaka Tour and Travel')

@section('content')
    {{-- Header Sederhana --}}
    <section class="bg-gray-950 pt-32 pb-20 px-4 md:px-6 lg:px-12 text-center">
        <span class="text-lime-400 font-bold tracking-widest uppercase text-sm mb-2 block">{{ $title }}</span>
        <h1 class="text-4xl md:text-5xl font-black text-white">{{ $subtitle }}</h1>
        <p class="text-gray-400 mt-4 max-w-2xl mx-auto">Pilih kota atau negara tujuan Anda di bawah ini untuk melihat daftar
            paket wisata yang tersedia.</p>
    </section>

    {{-- Grid Lokasi --}}
    <main class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 py-16">

        @if ($lokasiList->isEmpty())
            <div class="text-center py-20">
                <p class="text-gray-500 text-lg">Belum ada rute tersedia untuk kategori ini.</p>
            </div>
        @else
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($lokasiList as $lokasi)
                    {{-- Setiap kartu akan mengarah ke halaman destinasi dengan query string ?lokasi=NamaKota --}}
                    <a href="/destinasi?lokasi={{ urlencode($lokasi) }}"
                        class="group relative h-48 md:h-64 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex items-center justify-center bg-gray-100">

                        {{-- Karena kita mengambil lokasi dinamis, kita pakai warna/gradien acak atau ikon untuk background --}}
                        <div
                            class="absolute inset-0 bg-linear-to-br from-gray-800 to-gray-950 transition-transform duration-500 group-hover:scale-110">
                        </div>

                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-300">
                        </div>

                        <div class="relative z-10 text-center px-4">
                            <h3 class="text-white text-2xl md:text-3xl font-bold tracking-tight mb-1">{{ $lokasi }}
                            </h3>
                            <span
                                class="text-lime-400 text-sm font-semibold opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 flex items-center justify-center">
                                Lihat Paket
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </main>
@endsection
