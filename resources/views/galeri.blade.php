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
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-lime-400/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 relative z-10">
        <nav class="flex mt-8 text-sm md:text-xl font-medium" aria-label="Breadcrumb">
            <a href="/" class="text-lime-400 hover:text-lime-500 transition-colors">Beranda</a>
            <span class="mx-2 text-white">/</span>
            <span class="text-white">Galeri</span>
        </nav>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight">
            Jejak Petualangan<br>Bersama <span class="text-lime-400">Arfaka</span>
        </h1>
        <p class="mt-4 text-gray-300 text-lg max-w-2xl mx-auto md:mx-0 hidden md:block">
            Kumpulan momen tak terlupakan dan senyum bahagia dari para pejalan yang telah mempercayakan liburannya
            kepada kami.
        </p>
    </div>
</section>

{{-- Main Content: Gallery Grid --}}
<main class="max-w-7xl mx-auto px-4 md:px-4 lg:px-0 -mt-12 relative z-10 mb-24">

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($galeri as $foto)
            <div data-aos="fade-up" onclick="openLightbox('{{ $foto['image'] }}')" 
                class="relative group overflow-hidden rounded-lg shadow-lg bg-gray-200 w-full aspect-square cursor-pointer">
                
                <img src="{{ $foto['image'] }}" alt="{{ $foto['lokasi'] }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                <div
                    class="absolute inset-0 bg-linear-to-t from-gray-900 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6 md:p-8">
                    <div
                        class="flex items-center text-lime-400 text-sm font-bold mb-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        {{ $foto['lokasi'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</main>

{{-- Modal / Lightbox Fullscreen --}}
<div id="lightboxModal" class="fixed inset-0 z-100 bg-black/95 hidden flex-col justify-center items-center opacity-0 transition-opacity duration-300 backdrop-blur-md">
    
    <button onclick="closeLightbox()" class="absolute top-6 right-6 md:top-10 md:right-10 text-white hover:text-lime-400 bg-white/20 hover:bg-white/30 p-3 rounded-full backdrop-blur-sm transition-all duration-200 cursor-pointer z-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div class="relative w-full h-full flex items-center justify-center p-4 md:p-12" onclick="closeLightbox()">
        <img id="lightboxImage" src="" alt="Zoomed Image" class="max-w-full max-h-full object-contain scale-95 transition-transform duration-300 shadow-2xl rounded-lg">
    </div>

</div>

{{-- Script JS untuk logika Lightbox --}}
@push('scripts')
<script>
    const modal = document.getElementById('lightboxModal');
    const modalImg = document.getElementById('lightboxImage');

    function openLightbox(imageSrc) {
        // 1. Set source gambar modal dengan gambar yang diklik
        modalImg.src = imageSrc;
        
        // 2. Tampilkan modal dengan menghapus class 'hidden'
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // 3. Kunci scroll body agar user tidak bisa scroll halaman saat modal terbuka
        document.body.classList.add('overflow-hidden');

        // 4. Trigger animasi perlahan (fade-in & scale-up)
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalImg.classList.remove('scale-95');
            modalImg.classList.add('scale-100');
        }, 10);
    }

    function closeLightbox() {
        // 1. Trigger animasi perlahan (fade-out & scale-down)
        modal.classList.add('opacity-0');
        modalImg.classList.remove('scale-100');
        modalImg.classList.add('scale-95');
        
        // 2. Kembalikan scroll body
        document.body.classList.remove('overflow-hidden');

        // 3. Sembunyikan modal setelah animasi selesai (300ms)
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            modalImg.src = ''; // Bersihkan src agar tidak ada bayangan gambar lama saat dibuka lagi
        }, 300);
    }

    // Tutup modal jika tombol ESC di keyboard ditekan (opsional tapi bagus untuk UX)
    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape" && !modal.classList.contains('hidden')) {
            closeLightbox();
        }
    });
</script>
@endpush

@endsection