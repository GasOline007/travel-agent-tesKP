<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Semua Destinasi - Nravel</title>
</head>

<body class="bg-white font-sans antialiased">

    {{-- navbar --}}
    <header id="navbar"
        class="fixed space-x-2 bg-black/20 backdrop-blur-md border-white/10 shadow-lg left-0 top-0 w-full z-20 flex items-center justify-between p-4 text-white transition-all duration-300">
        <div class="flex items-center space-x-2">
            <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                </path>
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

            {{-- sidebar button --}}
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

    {{-- header --}}
    <section class="py-20 md:py-40 relative overflow-hidden">
        {{-- bg image --}}
        <div class="absolute bg-amber-500 left-0 top-0 w-full h-screen md:h-[calc(100%+50px)] -z-10">
            <img src="{{ asset('img/homepage.avif') }}" alt="Background" class="w-full h-full object-cover">
            <div class="bg-linear-to-t from-gray-950 via-gray-950/80 to-white/10 absolute inset-x-0 bottom-0 h-full">
            </div>
        </div>
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-lime-400/10 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-12 relative z-10">
            <nav class="flex mt-8 text-sm md:text-xl text-lime-400/80 font-medium" aria-label="Breadcrumb">
                <a href="/" class="hover:text-lime-400">Beranda</a>
                <span class="mx-2">/</span>
                <span class="text-white">Destinasi</span>
            </nav>
            <h1 class="text-4xl md:text-6xl font-black text-white leading-tight">
                Temukan <span class="text-lime-400">Petualangan</span><br>Selanjutnya di Sini
            </h1>
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

        @if(isset($notFound) && $notFound)
            <div class="max-w-4xl mx-auto mb-12 animate-in fade-in slide-in-from-top-4 duration-500">
                <div class="bg-amber-50 border-l-4 border-amber-400 p-6 rounded-2xl shadow-sm flex items-center">
                    <div class="bg-amber-100 p-2 rounded-full mr-4">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-amber-900 font-bold text-lg">Pencarian Tidak Ditemukan</h4>
                        <p class="text-amber-800 opacity-80">Maaf, paket "<span class="font-bold underline">{{ request('cari') }}</span>" tidak tersedia. Menampilkan semua paket menarik lainnya.</p>
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

        {{-- @if (count($allPakets) >= 12)
            <div class="mt-20 text-center">
                <a href="#"
                    class="px-8 py-3 bg-lime-400 text-gray-900 font-bold rounded-full hover:bg-lime-500 transition">
                    Lihat Lebih Banyak
                </a>
            </div>
        @endif --}}
    </main>

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
