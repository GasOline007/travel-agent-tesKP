{{-- @props(['paket'])

<div class="max-w-sm bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <div class="relative">
        <img class="w-full h-52 object-cover" src="{{ $paket['image'] }}" alt="{{ $paket['nama'] }}" />
        <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-semibold text-blue-600 shadow-sm">
            {{ $paket['durasi'] }}
        </div>
    </div>

    <div class="p-5">
        <div class="flex items-center text-sm text-gray-500 mb-2">
            <svg class="w-4 h-4 mr-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            {{ $paket['lokasi'] }}
        </div>

        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 line-clamp-1">
            {{ $paket['nama'] }}
        </h5>

        <div class="flex items-center justify-between mt-5">
            <div>
                <span class="text-xs text-gray-400 block">Mulai dari</span>
                <span class="text-xl font-extrabold text-blue-700">Rp {{ number_format($paket['harga'], 0, ',', '.') }}</span>
            </div>
            <a href="/paket/{{ $paket['slug'] }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 transition-colors">
                Detail
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div> --}}



@props(['paket'])

<div data-aos="fade-up"
    class="group flex flex-col bg-white border border-gray-100 rounded-3xl shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

    {{-- Bagian Gambar --}}
    <div class="relative overflow-hidden">
        <img class="w-full h-60 object-cover transition-transform duration-700 group-hover:scale-110"
            src="{{ $paket['image'] }}" alt="{{ $paket['nama'] }}" />

        <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-gray-800 shadow-sm">
            {{ $paket['durasi'] }}
        </div>

        {{-- Badge Recommended / Paling Populer (Kiri Atas) --}}
        @if (isset($paket['is_recommended']) && $paket['is_recommended'])
            <div
                class="absolute -top-2 -left-16 bg-travel-primary w-48 h-20 text-gray-900 shadow-lg flex items-center justify-center z-10 -rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10 rotate-45 group-hover:animate-bounce text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                </svg>
            </div>
        @endif
    </div>

    {{-- Bagian Konten --}}
    <div class="relative p-6 flex flex-col grow">

        {{-- KATEGORI (Gaya Pill Tags Dinamis) --}}
        @if (isset($paket['kategori']) && is_array($paket['kategori']))
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach ($paket['kategori'] as $kategori)
                    <span
                        class="bg-lime-50 border border-lime-200 text-lime-700 text-[10px] font-extrabold uppercase tracking-widest px-2.5 py-1 rounded-full">
                        {{ $kategori }}
                    </span>
                @endforeach
            </div>
        @endif

        {{-- Lokasi --}}
        <div class="flex items-center text-sm text-gray-500 mb-2 font-medium">
            <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            {{ $paket['lokasi'] }}
        </div>

        {{-- Judul --}}
        <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">
            {{ $paket['nama'] }}
        </h5>

        {{-- Harga & Tombol Bawah --}}
        <div class="mt-auto pt-4 border-t border-gray-300 flex items-end justify-between">
            <div>
                <span class="text-xs text-gray-500 block mb-0.5">Mulai dari</span>
                <span class="text-lg font-black text-gray-900">Rp
                    {{ number_format($paket['harga'], 0, ',', '.') }}</span>
            </div>
            <a href="/paket/{{ $paket['slug'] }}"
                class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-gray-950 rounded-full hover:bg-black transition-colors shadow-md group/btn">
                Detail
                <svg class="w-3.5 h-3.5 ml-2 transition-transform group-hover/btn:translate-x-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>
