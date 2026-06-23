{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Galeri - Arfaka Tour and Travel')

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

        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-travel-primary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 relative z-10">
            <nav class="flex mt-8 text-sm md:text-xl font-medium" aria-label="Breadcrumb">
                <a href="/" class="text-travel-primary hover:text-travel-primary-dark transition-colors">Beranda</a>
                <span class="mx-2 text-white">/</span>
                <span class="text-white">Galeri</span>
            </nav>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight">
                Jejak Petualangan<br>Bersama <span class="text-travel-primary">Arfaka</span>
            </h1>
            <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto md:mx-0 hidden md:block">
                Kumpulan momen tak terlupakan dan senyum bahagia dari para pejalan yang telah mempercayakan liburannya
                kepada kami.
            </p>
        </div>
    </section>

    {{-- Main Content: Gallery Grid --}}
    <main class="max-w-7xl mx-auto px-4 md:px-4 lg:px-0 -mt-12 relative z-10 mb-24">
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-6">
            @foreach ($galeri as $foto)
                <div data-aos="fade-up"
                    onclick="openLightbox('{{ Storage::url($foto->image) }}', '{{ $foto->location }}', '{{ $foto->customer }}', '{{ $foto->caption }}')"
                    class="group bg-white rounded-xl shadow-lg overflow-hidden cursor-pointer transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">

                    {{-- Gambar --}}
                    <div class="relative w-full aspect-[4/3] overflow-hidden bg-gray-200">
                        <img src="{{ Storage::url($foto->image) }}" alt="{{ $foto->location }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                        {{-- Badge Lokasi --}}
                        <div
                            class="absolute top-2 left-2 md:top-3 md:left-3 flex items-center gap-1 bg-black/60 backdrop-blur-sm text-white text-[10px] md:text-sm font-semibold px-2 py-1 md:px-3 md:py-1.5 rounded-full">
                            <svg class="w-3 h-3 md:w-5 md:h-5 text-travel-tertiary shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="truncate max-w-[80px] md:max-w-[140px]">{{ $foto->location }}</span>
                        </div>

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16zM11 8v6M8 11h6" />
                            </svg>
                        </div>
                    </div>

                    {{-- Keterangan Card --}}
                    <div class="p-2.5 md:p-4">
                        <p class="text-gray-800 font-semibold text-xs md:text-base line-clamp-2">
                            {{ $foto->caption }}
                        </p>

                        <div class="mt-2 md:mt-3 flex items-center gap-1.5 md:gap-2 pt-2 md:pt-3 border-t border-gray-100">
                            <div
                                class="w-5 h-5 md:w-7 md:h-7 rounded-full bg-travel-primary/10 flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 md:w-4 md:h-4 text-travel-primary" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="text-gray-500 text-[10px] md:text-sm font-medium truncate">
                                {{ $foto->customer }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    {{-- Modal / Lightbox Fullscreen --}}
    <div id="lightboxModal"
        class="fixed inset-0 z-[100] bg-black/95 hidden flex-col justify-center items-center opacity-0 transition-opacity duration-300 backdrop-blur-md">

        <button onclick="closeLightbox()"
            class="absolute top-6 right-6 md:top-10 md:right-10 text-white hover:text-travel-primary bg-white/20 hover:bg-white/30 p-3 rounded-full backdrop-blur-sm transition-all duration-200 cursor-pointer z-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="relative w-full h-full flex flex-col items-center justify-center p-4 md:p-12"
            onclick="closeLightbox(event)">
            <img id="lightboxImage" src="" alt="Zoomed Image"
                class="max-w-full max-h-[75vh] object-contain scale-95 transition-transform duration-300 shadow-2xl rounded-lg">

            {{-- Info detail di bawah gambar --}}
            <div id="lightboxInfo" onclick="event.stopPropagation()"
                class="mt-4 max-w-2xl w-full bg-white/10 backdrop-blur-sm rounded-lg p-4 text-center">
                <p id="lightboxCaption" class="text-white font-medium text-sm md:text-base"></p>
                <div class="mt-2 flex flex-wrap justify-center gap-4 text-gray-300 text-xs md:text-sm">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-travel-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span id="lightboxLocation"></span>
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-travel-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span id="lightboxCustomer"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Script JS untuk logika Lightbox --}}
    @push('scripts')
        <script>
            const modal = document.getElementById('lightboxModal');
            const modalImg = document.getElementById('lightboxImage');
            const modalCaption = document.getElementById('lightboxCaption');
            const modalLocation = document.getElementById('lightboxLocation');
            const modalCustomer = document.getElementById('lightboxCustomer');

            function openLightbox(imageSrc, location, customer, caption) {
                modalImg.src = imageSrc;
                modalCaption.textContent = caption;
                modalLocation.textContent = location;
                modalCustomer.textContent = customer;

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');

                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalImg.classList.remove('scale-95');
                    modalImg.classList.add('scale-100');
                }, 10);
            }

            function closeLightbox() {
                modal.classList.add('opacity-0');
                modalImg.classList.remove('scale-100');
                modalImg.classList.add('scale-95');
                document.body.classList.remove('overflow-hidden');

                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    modalImg.src = '';
                }, 300);
            }

            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape" && !modal.classList.contains('hidden')) {
                    closeLightbox();
                }
            });
        </script>
    @endpush

@endsection
