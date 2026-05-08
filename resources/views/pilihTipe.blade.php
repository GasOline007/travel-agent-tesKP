@extends('layouts')

@section('title', 'Pilih Tipe Perjalanan - Arfaka Tour and Travel')

@section('content')
    <div class="min-h-screen bg-white flex flex-col items-center justify-center pt-28 pb-20">

        {{-- Bagian Header --}}
        <div class="text-center max-w-3xl mx-auto px-4 mb-16" data-aos="fade-down">
            <span class="text-travel-primary font-semibold tracking-widest uppercase text-sm mb-3 block">
                Mulai Petualangan Anda
            </span>
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-5 tracking-tight">
                Ke Mana Tujuan Anda?
            </h1>
            <p class="text-gray-500 text-lg md:text-xl">
                Pilih untuk menjelajahi keindahan alam Nusantara atau ciptakan momen tak terlupakan di penjuru dunia.
            </p>
        </div>

        {{-- Kontainer Kartu Pilihan --}}
        <div class="max-w-6xl mx-auto px-4 md:px-8 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10">

                {{-- KARTU 1: DOMESTIK --}}
                <a href="/destinasi/domestik"
                    class="group relative h-[450px] md:h-[500px] rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                    
                    {{-- Background Image --}}
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000" alt="Domestik"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-105">

                    {{-- Elegant Gradient Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent transition-opacity duration-500"></div>

                    {{-- Konten Kartu --}}
                    <div class="absolute inset-0 p-8 md:p-10 flex flex-col justify-end">
                        {{-- Ikon Simpel --}}
                        <svg class="w-10 h-10 text-white/80 mb-5 transform transition-transform duration-500 group-hover:-translate-y-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>

                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Domestik</h2>
                        <p class="text-gray-300 text-base md:text-lg mb-8 max-w-sm line-clamp-2">
                            Eksplorasi keindahan alam, budaya, dan kuliner memukau di Indonesia.
                        </p>

                        {{-- Tombol Glassmorphism --}}
                        <div class="inline-flex items-center justify-between px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full w-max text-white text-sm font-medium transition-all duration-300 group-hover:bg-white group-hover:text-gray-900">
                            <span>Lihat Destinasi</span>
                            <svg class="w-4 h-4 ml-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

                {{-- KARTU 2: MANCANEGARA --}}
                <a href="/destinasi/mancanegara"
                    class="group relative h-[450px] md:h-[500px] rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500">
                    
                    {{-- Background Image --}}
                    <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?q=80&w=1000" alt="Mancanegara"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-105">

                    {{-- Elegant Gradient Overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent transition-opacity duration-500"></div>

                    {{-- Konten Kartu --}}
                    <div class="absolute inset-0 p-8 md:p-10 flex flex-col justify-end">
                        {{-- Ikon Simpel --}}
                        <svg class="w-10 h-10 text-white/80 mb-5 transform transition-transform duration-500 group-hover:-translate-y-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-3">Mancanegara</h2>
                        <p class="text-gray-300 text-base md:text-lg mb-8 max-w-sm line-clamp-2">
                            Wujudkan impian keliling dunia dan ciptakan kenangan di berbagai negara.
                        </p>

                        {{-- Tombol Glassmorphism --}}
                        <div class="inline-flex items-center justify-between px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full w-max text-white text-sm font-medium transition-all duration-300 group-hover:bg-white group-hover:text-gray-900">
                            <span>Lihat Destinasi</span>
                            <svg class="w-4 h-4 ml-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection