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

<body class="font-sans antialiased text-gray-950 bg-white flex flex-col min-h-screen">

    {{-- Navbar selalu tampil di atas --}}
    <x-navbar />

    {{-- Di sinilah konten spesifik dari halaman (Home, About, dll) akan masuk --}}
    <main class="grow">
        @yield('content')
    </main>

    {{-- Footer selalu tampil di bawah --}}
    <x-footer />

    {{-- untuk script animasi dll --}}
    @stack('scripts')
</body>

</html>