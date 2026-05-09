@extends('layouts')

@section('title', $title . ' - Arfaka Tour and Travel')

@section('content')
    <div class="min-h-screen bg-gray-50 pt-32 pb-20">

        {{-- 1. HEADER DINAMIS (Konteks Kota vs Negara) --}}
        <div class="text-center max-w-3xl mx-auto px-4 mb-16" data-aos="fade-down">

            {{-- Label Kategori dengan warna kustom --}}
            <span
                class="{{ $tipe === 'domestik' ? 'text-travel-primary' : 'text-travel-secondary' }} font-extrabold tracking-widest uppercase text-sm mb-3 block">
                {{ $title }}
            </span>

            {{-- Judul Utama: Otomatis berubah 'Kota' atau 'Negara' --}}
            <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                Pilih {{ $tipe === 'domestik' ? 'Kota' : 'Negara' }} Tujuan Anda
            </h1>

            {{-- Deskripsi Kontekstual --}}
            <p class="text-gray-500 text-lg">
                @if ($tipe === 'domestik')
                    Jelajahi keajaiban tersembunyi di berbagai kota indah di seluruh Nusantara.
                @else
                    Wujudkan impian Anda mengunjungi negara-negara ikonik di berbagai belahan dunia.
                @endif
            </p>

        </div>

        {{-- 2. GRID LOKASI --}}
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12">

            @if ($kotaList->isEmpty())
                {{-- State jika data belum tersedia --}}
                <div class="text-center py-20 bg-white rounded-[2.5rem] shadow-sm border border-gray-100">
                    <div class="mb-6 inline-flex p-4 bg-gray-50 rounded-full text-gray-400">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                            </path>
                        </svg>
                    </div>
                    <p class="text-gray-500 text-lg font-medium">Paket untuk rute ini sedang dalam tahap persiapan.</p>
                    <a href="/pilih-tipe" class="inline-block mt-6 text-travel-primary font-bold hover:underline">
                        &larr; Kembali Pilih Tipe Perjalanan
                    </a>
                </div>
            @else
                {{-- Tampilan Grid --}}
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                    @foreach ($kotaList as $item)
                        {{-- Navigasi menggunakan $item['nama'] --}}
                        <a href="/destinasi?lokasi={{ urlencode($item['nama']) }}"
                            class="group relative h-48 md:h-72 rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 flex items-center justify-center bg-gray-200">

                            {{-- GAMBAR ASLI DARI DATA --}}
                            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            {{-- Overlay Gradien agar teks terbaca jelas --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity duration-300 z-10">
                            </div>

                            {{-- Border Efek saat Hover --}}
                            <div
                                class="absolute inset-0 border-4 border-transparent {{ $tipe === 'domestik' ? 'group-hover:border-[var(--color-travel-primary)]' : 'group-hover:border-[var(--color-travel-secondary)]' }} transition-all duration-500 rounded-[2rem] z-30">
                            </div>

                            {{-- Teks Lokasi --}}
                            <div class="relative z-20 text-center px-4 mt-auto mb-6 md:mb-10">
                                <span
                                    class="block text-[var(--color-travel-tertiary)] text-[10px] font-extrabold uppercase tracking-[0.2em] mb-1 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0">
                                    Eksplorasi
                                </span>
                                <h3
                                    class="text-white text-2xl md:text-3xl font-black tracking-tight uppercase drop-shadow-lg">
                                    {{ $item['nama'] }}
                                </h3>

                                <div
                                    class="inline-flex items-center text-white/90 text-xs font-bold opacity-0 group-hover:opacity-100 transition-all duration-500 mt-2">
                                    Lihat Paket {{ $tipe === 'domestik' ? 'Kota' : 'Negara' }}
                                    <svg class="w-4 h-4 ml-1.5 transition-transform group-hover:translate-x-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
@endsection
