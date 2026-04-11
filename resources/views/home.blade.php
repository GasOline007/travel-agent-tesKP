{{-- 1. Panggil file layout utama --}}
@extends('layouts')

{{-- 2. Tentukan judul khusus untuk tab browser halaman ini --}}
@section('title', 'Beranda - Arfaka Tour and Travel')

{{-- 3. Masukkan semua isi halaman ke dalam section 'content' --}}
@section('content')

    {{-- Hero Section: Premium Professional Travel --}}
    <div id="hero" class="relative min-h-screen w-full flex items-center justify-center overflow-hidden bg-gray-950">
        {{-- 1. Background Image with Elegant Cinematic Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/homepage.avif') }}" alt="Background Arfaka Travel" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-linear-to-b from-transparent via-gray-950/50 to-gray-950"></div>
        </div>
        {{-- 2. Welcome Content --}}
        <main data-aos="fade-up" data-aos-duration="1000"
            class="relative z-10 flex flex-col items-center justify-center px-4 md:px-6 text-center w-full max-w-6xl mx-auto mt-16">
            {{-- Sub-heading / Tagline Atas --}}
            <span
                class="hidden md:block text-lime-400 font-semibold tracking-[0.25em] uppercase mb-2 text-md md:text-xl drop-shadow-md">
                Wujudkan Perjalanan Impian Anda
            </span>
            {{-- Main Headline --}}
            <h1
                class="text-5xl md:text-7xl lg:text-9xl font-sans text-white leading-tight md:leading-[1.1] tracking-tight mb-2 drop-shadow-lg">
                <span class="font-bold">Arfaka</span> <span class="font-light italic text-slate-200">Tour & Travel</span>
            </h1>
            {{-- Deskripsi --}}
            <p class="text-lg md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed font-light mb-10 drop-shadow">
                <span class="hidden md:block">Perjalanan bukan sekadar berpindah tempat.</span> Temukan makna baru, jelajahi destinasi tersembunyi, dan nikmati
                liburan eksklusif tanpa ribet bersama konsultan perjalanan profesional kami.
            </p>
            {{-- 3. Call to Action (CTA) Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
                {{-- Tombol Primary (Mencolok) --}}
                <a href="/destinasi"
                    class="group w-full sm:w-auto flex items-center justify-center bg-lime-400 text-gray-950 px-8 py-4 rounded-full text-base font-bold hover:bg-lime-500 hover:shadow-lg hover:shadow-lime-500/30 hover:-translate-y-1 transition-all duration-300">
                    Eksplorasi Destinasi
                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>
        </main>
        {{-- 4. Scroll Indicator (Opsional, manis untuk di desktop) --}}
        <div
            class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10 flex-col items-center animate-bounce hidden md:flex">
            <span class="text-slate-400 text-xs tracking-widest uppercase mb-2">Scroll</span>
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>


    {{-- preview popular package travel section --}}
    <section class="relative z-10 w-full bg-white py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">Destinasi Pilihan</h2>
                    <p class="text-gray-600 text-lg">Jelajahi keindahan alam Indonesia dengan paket perjalanan eksklusif
                        yang kami rancang khusus untuk Anda.</p>
                </div>
                <a href="/destinasi"
                    class="mt-6 md:mt-0 inline-flex items-center font-semibold text-gray-900 hover:text-gray-600 transition-colors group">
                    Lihat Semua Paket
                    <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- some popular package --}}
                @foreach ($hookPakets as $paket)
                    <x-tour-card :paket="$paket" />
                @endforeach
            </div>
        </div>
    </section>


    {{-- section why choose this travel agent --}}
    <section class="bg-gray-950 text-white py-26 relative">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                <div class="w-full lg:w-1/2">
                    <span class="text-lime-400 font-bold tracking-widest text-sm uppercase mb-2 block">Kenapa
                        Arfaka?</span>
                    <h2 class="text-3xl md:text-5xl font-serif font-extrabold tracking-tight mb-12">
                        Liburan Tenang,<br>Tanpa Ribet.
                    </h2>

                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-lime-400 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Agen Perjalanan Terpercaya</h4>
                                <p class="mt-1 text-gray-500">Legalitas jelas dan pengalaman melayani ratusan rute
                                    perjalanan di Bali.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-lime-400 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Harga Jujur & Transparan</h4>
                                <p class="mt-1 text-gray-500">Paket All-in-One yang sudah mencakup tiket wisata,
                                    transport, hingga makan.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="shrink-0 mt-1">
                                <div class="w-8 h-8 rounded-full bg-lime-400 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Support Penuh 24 Jam</h4>
                                <p class="mt-1 text-gray-500">Customer service yang ramah siap dihubungi kapan pun Anda
                                    butuh.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex justify-center md:justify-start">
                        <a href="{{ env('WHATSAPP_NUMBER') }}"
                            class="inline-block bg-white text-gray-950 text-sm font-bold uppercase tracking-wider px-10 py-4 rounded hover:bg-lime-400 hover:text-gray-900 transition-colors">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="hidden lg:block absolute -top-6 -right-6 w-full h-full border-2 border-lime-400 rounded-2xl">
                    </div>
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1000" alt="Bali"
                        class="relative w-full h-125 object-cover rounded-2xl shadow-xl z-10 hidden md:block">
                </div>

            </div>
        </div>
    </section>


    {{-- FAX/pertanyaan umum --}}
    <section class=" bg-white md:bg-gray-50 py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto">

            <div class="flex flex-col md:flex-row justify-center items-center p-8">
                <div class="text-center flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-18 ml-4 text-gray-950 md:hidden">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-lime-600 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana cara memesan paket wisata di Arfaka?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-lime-600 rounded-full p-1">
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-lime-600 transition-colors duration-300">
                        <span class="text-base md:text-lg">Apakah harga paket sudah termasuk tiket pesawat?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-lime-600 rounded-full p-1">
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-lime-600 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bisakah saya membuat paket liburan custom sendiri?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-lime-600 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Tentu saja! Kami sangat fleksibel. Jika Anda memiliki preferensi destinasi, hotel, atau jadwal
                        yang berbeda dari paket reguler kami, silakan hubungi Customer Support kami. Tim Nravel akan
                        merancang itinerary yang sesuai dengan keinginan dan budget Anda.
                    </div>
                </details>

                <details class="group border-b border-gray-100 last:border-none">
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-lime-600 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana dengan sistem pembayaran dan pembatalan?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-lime-600 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </span>
                    </summary>
                    <div
                        class="text-gray-600 pb-6 text-sm md:text-base leading-relaxed overflow-hidden transition-all duration-300">
                        Pembayaran dilakukan melalui transfer bank resmi Nravel dengan sistem DP (Down Payment) sebesar
                        30% saat pemesanan, dan pelunasan maksimal H-3 sebelum keberangkatan. Untuk kebijakan pembatalan
                        (refund), hal tersebut bergantung pada regulasi hotel dan mitra transportasi kami di waktu
                        tersebut.
                    </div>
                </details>

            </div>
        </div>
    </section>


@endsection
