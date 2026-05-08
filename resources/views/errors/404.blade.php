<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite CSS & JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Favicon --}}
    <link rel="icon" type="image/webp" href="{{ asset('img/logoWeb.webp') }}">

    {{-- Judul Dinamis --}}
    <title>@yield('title', 'Arfaka Tour And Travel')</title>
</head>

<body class="font-sans antialiased text-gray-950 flex flex-col min-h-screen">
    <main class="relative flex-1 flex items-center justify-center px-4 py-20">

        <div class="relative z-10 text-center max-w-3xl mx-auto">

            <h1 class="text-9xl md:text-[12rem] font-black text-gray-900 tracking-tighter drop-shadow-sm select-none">
                4<span class="text-lime-500 relative inline-block">0</span>4
            </h1>

            <div class="mt-4 md:mt-8">
                <span
                    class="inline-block px-5 py-2 rounded-full bg-gray-900 text-lime-400 text-sm font-bold tracking-widest uppercase mb-6 shadow-md">
                    Oops! Anda Keluar Jalur
                </span>
                <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-12 max-w-2xl mx-auto">
                    Destinasi yang Anda cari tidak dapat ditemukan di peta kami. Mungkin URL-nya salah ketik, atau
                    halamannya sudah pindah lokasi.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                <a href="/"
                    class="w-full sm:w-auto inline-flex items-center justify-center bg-lime-400 text-gray-900 font-bold px-8 py-4 rounded-full hover:bg-gray-900 hover:text-white transition-all duration-300 shadow-xl hover:shadow-gray-900/30 hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

        </div>
    </main>
</body>

</html>
