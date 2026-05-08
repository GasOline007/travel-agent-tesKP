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
    <title>Masuk - Arfaka Tour & Travel</title>
</head>

<body class="relative font-sans antialiased text-gray-950 flex flex-col min-h-screen">
    {{-- backgorund --}}
    <div class="absolute inset-0 z-10 h-full w-full items-center px-5 py-24 [background:radial-gradient(125%_125%_at_50%_10%,#000_40%,#A3E635_100%)]"></div>
    
    <div class="h-screen w-screen flex items-center justify-center lg:px-8 relative overflow-hidden">

        {{-- Card Container --}}
        <div class="md:max-w-xl w-full h-full md:h-2/3 bg-white md:rounded-xl shadow-2xl overflow-hidden flex justify-center relative z-10">

            {{-- Sisi Kanan (Form Login) --}}
            <div class="w-full h-full p-8 md:p-12 lg:p-16 flex flex-col justify-center">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900">Masuk ke Akun Anda</h3>
                    <p class="text-gray-500 mt-2 text-xs md:sm">Belum punya akun? <a href="/register"
                            class="text-lime-500 font-bold hover:underline">Daftar sekarang</a></p>
                </div>

                <form action="/login" method="POST" class="space-y-6">
                    @csrf

                    {{-- Input Email --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email
                            Address</label>
                        <input type="email" id="email" name="email" required placeholder="nama@email.com"
                            class="w-full px-5 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                    </div>

                    {{-- Input Password --}}
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                            <a href="#"
                                class="text-xs text-gray-500 hover:text-lime-600 font-semibold transition-colors">Lupa
                                Password?</a>
                        </div>
                        <input type="password" id="password" name="password" required placeholder="••••••••"
                            class="w-full px-5 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="w-4 h-4 text-lime-500 bg-gray-100 border-gray-300 rounded focus:ring-lime-400 focus:ring-2">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Ingat Saya</label>
                    </div>

                    {{-- Tombol Login --}}
                    <button type="submit"
                        class="w-full bg-gray-950 text-white font-bold py-3.5 rounded-xl hover:bg-black transition-all duration-300 shadow-lg hover:shadow-gray-900/30 hover:-translate-y-0.5">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
