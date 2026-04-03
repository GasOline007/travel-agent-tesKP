<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Nravel - Home</title>
</head>

<body class="font-sans antialiased text-gray-950 bg-white">
    <div id="hero" class="relative min-h-screen w-full bg-cover bg-center overflow-hidden">

        <div class="absolute bg-amber-500 left-0 top-0 w-full h-screen md:h-[calc(100%+50px)] -z-10">
            <img src="{{ asset('img/homepage.avif') }}" alt="Background" class="w-full h-full object-cover">
            <div class="bg-linear-to-t from-white via-white/80 to-white/10 absolute inset-x-0 bottom-0 h-full"></div>
        </div>

        {{-- navbar --}}
        <header id="navbar"
            class="fixed space-x-2 bg-black/20 backdrop-blur-md border-white/10 shadow-lg left-0 top-0 w-full z-20 flex items-center justify-between p-4 text-white transition-all duration-300">
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-2xl md:text-3xl font-bold tracking-tight">Nravel</span>
            </div>

            <div class="hidden lg:block">
                <x-navbar></x-navbar>
            </div>

            <div class="flex items-center space-x-3 md:space-x-4">
                <a href="https://wa.me/{{ $no_WA }}?text=halo" target="_blank"
                    class="hidden md:flex items-center cursor-pointer bg-black/60 p-2 md:p-3 rounded-full hover:bg-black/80 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-5 h-5 md:w-6 md:h-6 text-white/80">
                        <path fill-rule="evenodd"
                            d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97-1.94.284-3.916.455-5.922.505a.39.39 0 0 0-.266.112L8.78 21.53A.75.75 0 0 1 7.5 21v-3.955a48.842 48.842 0 0 1-2.652-.316c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-white/80 mx-2 hidden sm:block text-sm font-medium">Hubungi Kami</h3>
                </a>

                {{-- dropdown button --}}
                <button id="openSidebarBtn"
                    class="lg:hidden p-2 text-white bg-black/30 rounded-lg hover:bg-black/50 transition cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-7 text-white">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm8.25 5.25a.75.75 0 0 1 .75-.75h8.25a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </header>

        {{-- welcome text --}}
        <main data-aos="fade-up"
            class="relative h-screen z-10 flex flex-col items-center justify-center pt-34 md:pt-60 pb-16 px-4 md:px-6">
            <div class="text-center max-w-5xl px-2">
                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-serif font-black text-gray-950 leading-tight tracking-tight text-shadow-drop">
                    Discover the Wild<br class="hidden md:block"> Beauty of Indonesia
                </h1>
                <p class="mt-4 md:mt-8 text-base md:text-xl text-gray-800 max-w-3xl mx-auto leading-relaxed">
                    Explore curated destinations, plan your perfect trip, and uncover the wonders of Indonesia's
                    nature in just one click
                </p>
            </div>

            <div
                class="mt-10 md:mt-16 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 w-full md:w-auto">
                <button
                    class="cursor-pointer w-2/3 md:w-auto bg-gray-950 text-white px-10 py-3 md:py-4 rounded-full text-base font-semibold hover:bg-gray-800 transition shadow-lg">
                    Plan My Trip
                </button>
                <button
                    class="cursor-pointer w-2/3 md:w-auto bg-lime-400 text-gray-900 px-10 py-3 md:py-4 rounded-full text-base font-semibold hover:bg-lime-500 transition shadow-md">
                    Kontak Kami
                </button>
            </div>
        </main>
    </div>


    {{-- preview popular package travel --}}
    <section class="relative z-10 w-full bg-white md:bg-gray-50 py-20 px-4 md:px-6 lg:px-12">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
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
    <div>
        <section class="relative bg-gray-900 pt-20 pb-32">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=2000" alt="Bali Temple"
                    class="w-full h-full object-cover object-center" />
                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 lg:px-12">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center">

                    <div class="mb-6 md:mb-0">
                        <div class="flex items-center space-x-3 mb-3">
                            <div class="w-1.5 h-6 bg-lime-400"></div>
                            <span class="text-white font-bold tracking-widest text-sm uppercase">Kenapa Nravel
                                ?</span>
                        </div>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight">
                            Agen Wisata Terpercaya<br class="hidden md:block" /> untuk Liburan di Bali
                        </h2>
                    </div>

                    <div>
                        <a href="#pesan"
                            class="inline-block bg-lime-400 hover:bg-lime-500 text-gray-900 font-bold uppercase text-sm px-8 py-4 rounded-full transition-colors duration-300 shadow-lg">
                            Pesan Sekarang!
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <section class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 lg:px-12 -mt-16 mb-20">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 lg:p-10">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100">

                    <div
                        class="flex flex-col lg:flex-row items-center lg:items-start text-center lg:text-left pt-6 md:pt-0 first:pt-0 lg:px-6 first:px-0">
                        <div
                            class="shrink-0 w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mb-4 lg:mb-0 lg:mr-5">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 00-1.032 0 11.209 11.209 0 01-7.877 3.08.75.75 0 00-.722.515A12.74 12.74 0 002.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 00.374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 00-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08zm3.094 8.016a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Agen Perjalanan Terpercaya</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed">Liburan aman dengan layanan
                                profesional.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex flex-col lg:flex-row items-center lg:items-start text-center lg:text-left pt-6 md:pt-0 lg:px-6">
                        <div
                            class="shrink-0 w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mb-4 lg:mb-0 lg:mr-5">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M5.25 2.25a3 3 0 00-3 3v4.318a3 3 0 00.879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 005.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 00-2.122-.879H5.25zM6.375 7.5a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Paket Wisata & Harga Transparan</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed">Tour lengkap tanpa biaya tersembunyi.
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex flex-col lg:flex-row items-center lg:items-start text-center lg:text-left pt-6 md:pt-0 lg:px-6">
                        <div
                            class="shrink-0 w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mb-4 lg:mb-0 lg:mr-5">
                            <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M14.25 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5a.75.75 0 01.75-.75zM17.25 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5a.75.75 0 01.75-.75zM20.25 6a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5a.75.75 0 01.75-.75zM1.5 12a10.5 10.5 0 0121 0v3.882c0 2.146-1.558 3.968-3.662 4.258l-1.082.149a4.492 4.492 0 01-1.506 0l-1.082-.15C13.058 19.85 11.5 18.028 11.5 15.882V12a.75.75 0 011.5 0v3.882c0 1.25.91 2.312 2.138 2.48l1.082.15c.5.068 1.006.068 1.506 0l1.082-.15c1.228-.168 2.138-1.23 2.138-2.48V12a9 9 0 00-18 0v2.25c0 1.242.504 2.368 1.318 3.183.815.814 1.94 1.317 3.182 1.317h.75a.75.75 0 010 1.5h-.75A6 6 0 011.5 14.25V12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-900">Customer Support 24/7</h4>
                            <p class="text-sm text-gray-500 mt-2 leading-relaxed">Siap membantu 24 jam dengan driver
                                berpengalaman.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- FAX/pertanyaan umum --}}
    <section class="bg-white py-20 px-4 md:px-6 lg:px-12">
        <div class="max-w-4xl mx-auto">

            <div class="flex justify-center items-center p-8">
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
                    <p class="text-gray-600 text-lg">Punya pertanyaan sebelum liburan? Temukan jawabannya di bawah ini.
                    </p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-18 ml-4 text-gray-950">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                </svg>
            </div>

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-8">

                <details class="group border-b border-gray-100 last:border-none" open>
                    <summary
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-yellow-500 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana cara memesan paket wisata di Nravel?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-yellow-500 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-yellow-500 transition-colors duration-300">
                        <span class="text-base md:text-lg">Apakah harga paket sudah termasuk tiket pesawat?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-yellow-500 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-yellow-500 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bisakah saya membuat paket liburan custom sendiri?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-yellow-500 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
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
                        class="flex justify-between items-center font-bold cursor-pointer list-none py-5 text-gray-900 hover:text-yellow-500 transition-colors duration-300">
                        <span class="text-base md:text-lg">Bagaimana dengan sistem pembayaran dan pembatalan?</span>
                        <span
                            class="transition-transform duration-300 group-open:rotate-180 bg-gray-50 text-gray-400 group-hover:bg-yellow-50 group-hover:text-yellow-500 rounded-full p-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
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

    {{-- footer --}}
    <x-footer />

    {{-- sidebar mode:mobile --}}
    <div id="sidebarOverlay"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm z-20 opacity-0 pointer-events-none transition-opacity duration-300">
    </div>

    <div id="sidebarMenu"
        class="fixed top-0 right-0 h-full w-72 bg-white z-50 transform translate-x-full transition-transform duration-300 shadow-2xl flex flex-col">

        <div class="flex items-center justify-between p-6 border-b border-gray-100">
            <span class="text-2xl font-bold text-gray-900 tracking-tight">Menu</span>
            <button id="closeSidebarBtn"
                class="p-2 text-gray-500 hover:text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-full transition cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <nav class="flex flex-col p-6 space-y-4 grow">
            <a href="/"
                class="text-lg font-medium text-gray-700 hover:text-yellow-500 transition-colors {{ request()->is('/') ? 'text-yellow-500 font-bold' : '' }}">Beranda</a>
            <a href="/destinasi"
                class="text-lg font-medium text-gray-700 hover:text-yellow-500 transition-colors {{ request()->is('destinasi') ? 'text-yellow-500 font-bold' : '' }}">Destinasi</a>
            <a href="/travel-tips"
                class="text-lg font-medium text-gray-700 hover:text-yellow-500 transition-colors {{ request()->is('travel-tips') ? 'text-yellow-500 font-bold' : '' }}">Travel
                Tips</a>
            <a href="/about"
                class="text-lg font-medium text-gray-700 hover:text-yellow-500 transition-colors {{ request()->is('about') ? 'text-yellow-500 font-bold' : '' }}">Tentang</a>
        </nav>

        <div class="p-6 border-t border-gray-100">
            <a href="#pesan"
                class="block w-full text-center bg-gray-900 text-white py-3 rounded-xl font-semibold hover:bg-black transition shadow-md">
                Rencanakan Trip
            </a>
        </div>
    </div>
</body>

</html>
