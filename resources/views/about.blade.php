{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Tentang - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

{{-- Hero Section --}}
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
            <span class="text-white">Tentang</span>
        </nav>
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight">
            Mengenal <span class="text-lime-400">Arfaka</span><br>Lebih Dekat
        </h1>
        <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto md:mx-0 hidden md:block">
            Kami bukan sekadar agen perjalanan. Kami adalah teman perjalanan Anda untuk menjelajahi keindahan Nusantara.
        </p>
    </div>
</section>

{{-- Main Content --}}
<main class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 -mt-10 md:-mt-20 relative z-10 mb-24">

    {{-- Section 1: Cerita Kami --}}
    <div
        class="bg-white rounded-3xl shadow-xl overflow-hidden mb-20 border border-gray-100 p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row gap-12 items-center">
        <div class="lg:w-1/2">
            <div
                class="inline-block px-4 py-2 rounded-full bg-lime-100 text-lime-700 font-bold text-sm mb-6 uppercase tracking-wider">
                Kisah Kami
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                Berawal dari Cinta pada <span class="text-lime-500">Keindahan Alam Indonesia</span>
            </h2>
            <div class="space-y-4 text-gray-600 leading-relaxed text-lg">
                <p>
                    Arfaka didirikan pada tahun 2024 dengan sebuah misi sederhana: membuat perjalanan wisata di
                    Indonesia menjadi lebih mudah, transparan, dan dapat dinikmati oleh semua orang.
                </p>
                <p>
                    Kami menyadari bahwa merencanakan liburan seringkali memakan waktu dan melelahkan. Oleh karena itu,
                    Nravel hadir sebagai solusi "Satu Pintu" di mana Anda bisa menemukan paket wisata, akomodasi, dan
                    pemandu lokal terbaik tanpa harus repot mencari satu per satu.
                </p>
            </div>
        </div>
        <div class="lg:w-1/2 grid grid-cols-2 gap-4">
            <img src="https://images.unsplash.com/photo-1528277342758-f1d7613953a2?q=80&w=500"
                class="w-full h-48 md:h-64 object-cover rounded-2xl shadow-md mt-8" alt="Traveling">
            <img src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?q=80&w=500"
                class="w-full h-48 md:h-64 object-cover rounded-2xl shadow-md" alt="Nature">
        </div>
    </div>

    {{-- Section 2: Kenapa Memilih Kami --}}
    <div class="text-center mb-16 mt-24">
        <h2 class="text-3xl md:text-4xl font-black text-gray-900 mb-4">Kenapa Memilih Arfaka?</h2>
        <p class="text-gray-500 max-w-2xl mx-auto text-lg">Kami berkomitmen memberikan pelayanan dan pengalaman liburan
            yang tak terlupakan dengan standar terbaik.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
        <div
            class="bg-gray-900 rounded-3xl p-8 text-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
            <div
                class="w-16 h-16 mx-auto bg-lime-400 rounded-2xl flex items-center justify-center mb-6 rotate-3 hover:rotate-6 transition-transform">
                <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">Harga Transparan</h3>
            <p class="text-gray-400">Tidak ada biaya tersembunyi. Apa yang Anda lihat adalah apa yang Anda bayar. Jadwal
                dan harga dijamin pas.</p>
        </div>

        <div
            class="bg-white border border-gray-100 rounded-3xl p-8 text-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
            <div
                class="w-16 h-16 mx-auto bg-lime-100 rounded-2xl flex items-center justify-center mb-6 -rotate-3 hover:-rotate-6 transition-transform">
                <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Pemandu Lokal Spesialis</h3>
            <p class="text-gray-500">Perjalanan Anda akan dipandu oleh warga lokal yang sangat memahami sejarah, budaya,
                dan *hidden gem* di daerah tersebut.</p>
        </div>

        <div
            class="bg-gray-900 rounded-3xl p-8 text-center hover:-translate-y-2 transition-transform duration-300 shadow-xl">
            <div
                class="w-16 h-16 mx-auto bg-lime-400 rounded-2xl flex items-center justify-center mb-6 rotate-3 hover:rotate-6 transition-transform">
                <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">Layanan 24/7</h3>
            <p class="text-gray-400">Tim bantuan kami siap siaga setiap saat untuk memastikan perjalanan liburan Anda
                berjalan lancar tanpa kendala.</p>
        </div>
    </div>

</main>

@endsection