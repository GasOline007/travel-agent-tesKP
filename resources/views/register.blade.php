@extends('layouts')

@section('title', 'Daftar - Arfaka Tour & Travel')

@section('content')
    <div
        class="min-h-screen flex items-center justify-center bg-gray-50 py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden">

        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-lime-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-gray-900/10 rounded-full blur-3xl"></div>

        <div class="max-w-4xl w-full bg-white rounded-4 shadow-2xl overflow-hidden flex flex-row-reverse relative z-10">

            {{-- Sisi Kanan (Gambar Destinasi - Dibalik posisinya untuk variasi) --}}
            <div class="hidden md:block md:w-1/2 relative">
                <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=1000" alt="Register Background"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-linear-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 text-white">
                    <span
                        class="bg-lime-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4 inline-block">Join
                        Member</span>
                    <h2 class="text-3xl font-serif font-bold leading-tight mb-2">Mulai Perjalanan Anda.</h2>
                    <p class="text-gray-300 text-sm">Dapatkan akses ke rute eksklusif dan diskon khusus member.</p>
                </div>
            </div>

            {{-- Sisi Kiri (Form Register) --}}
            <div class="w-full md:w-1/2 p-8 md:p-10 lg:p-12 flex flex-col justify-center">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-900">Buat Akun Baru</h3>
                    <p class="text-gray-500 mt-2 text-sm">Sudah punya akun? <a href="/login"
                            class="text-lime-600 font-bold hover:underline">Masuk di sini</a></p>
                </div>

                <form action="/register" method="POST" class="space-y-4">
                    @csrf

                    {{-- Input Nama --}}
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required placeholder="John Doe"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                    </div>

                    {{-- Input Email --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required placeholder="nama@email.com"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                    </div>

                    {{-- Input No HP/WA --}}
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Nomor WhatsApp</label>
                        <input type="tel" id="phone" name="phone" required placeholder="08123456789"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                    </div>

                    {{-- Input Password --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-1">Ulangi
                                Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                placeholder="••••••••"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-lime-400 focus:border-transparent transition-all outline-none">
                        </div>
                    </div>

                    {{-- Syarat & Ketentuan --}}
                    <div class="flex items-start mt-2">
                        <input type="checkbox" id="terms" required
                            class="mt-1 w-4 h-4 text-lime-500 bg-gray-100 border-gray-300 rounded focus:ring-lime-400 focus:ring-2">
                        <label for="terms" class="ml-2 text-xs text-gray-500 leading-relaxed">
                            Saya setuju dengan <a href="#" class="text-lime-600 hover:underline">Syarat &
                                Ketentuan</a> serta <a href="#" class="text-lime-600 hover:underline">Kebijakan
                                Privasi</a> Arfaka.
                        </label>
                    </div>

                    {{-- Tombol Register --}}
                    <button type="submit"
                        class="w-full bg-lime-400 text-gray-900 font-bold py-3.5 rounded-xl hover:bg-lime-500 transition-all duration-300 shadow-lg mt-2">
                        Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
