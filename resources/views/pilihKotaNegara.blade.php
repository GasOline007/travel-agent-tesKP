@extends('layouts')

@section('title', $tipe . ' - Arfaka Tour and Travel')

@section('content')
    <div class="min-h-screen bg-gray-50 pt-32 pb-20">

        {{-- 1. HEADER DINAMIS (Konteks Kota vs Negara) --}}
        <div class="text-center max-w-3xl mx-auto px-4 mb-16" data-aos="fade-down">

            {{-- Label Kategori dengan warna kustom --}}
            <span
                class="{{ $tipe === 'domestik' ? 'text-travel-primary' : 'text-travel-secondary' }} font-extrabold tracking-widest uppercase text-sm mb-3 block">
                {{ $tipe }}
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

            @if ($lokasi->isEmpty())
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
                </div>
            @else
                {{-- Tampilan Grid --}}
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                    @foreach ($lokasi as $item)
                        <a href="{{ route('packages.lokasiPaket', ['tipe' => $tipe, 'lokasi' => $item->location]) }}"
                            class="group relative h-56 md:h-72 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 block">

                            {{-- GAMBAR ASLI DARI DATA --}}
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->location }}"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            {{-- Overlay Gradien (Lebih gelap di bawah agar teks putih sangat kontras) --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/40 to-transparent opacity-90 transition-opacity duration-300 group-hover:opacity-100">
                            </div>

                            {{-- Konten Teks (Menempel di bawah) --}}
                            <div class="absolute bottom-0 left-0 w-full p-5 md:p-6 flex flex-col justify-end">

                                {{-- Nama Lokasi --}}
                                <h3
                                    class="text-white text-xl md:text-2xl font-bold tracking-wide drop-shadow-md transition-transform duration-300 group-hover:-translate-y-1">
                                    {{ $item->location }}
                                </h3>

                                {{-- Teks Aksi (Muncul saat di-hover) --}}
                                <div
                                    class="flex items-center text-travel-tertiary text-sm font-semibold opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500 mt-1">
                                    <span>Lihat Paket</span>
                                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
