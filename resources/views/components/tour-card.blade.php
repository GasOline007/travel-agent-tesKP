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

<div data-aos="fade-up" class="group flex flex-col bg-white border border-gray-100 rounded-3xl shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
    
    <div class="relative overflow-hidden">
        <img class="w-full h-60 object-cover transition-transform duration-700 group-hover:scale-110" 
             src="{{ $paket['image'] }}" 
             alt="{{ $paket['nama'] }}" />
        
        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-gray-800 shadow-sm">
            {{ $paket['durasi'] }}
        </div>
    </div>

    <div class="p-6 flex flex-col grow">
        <div class="flex items-center text-sm text-gray-500 mb-3 font-medium">
            <svg class="w-4 h-4 mr-1.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            {{ $paket['lokasi'] }}
        </div>

        <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">
            {{ $paket['nama'] }}
        </h5>

        <div class="mt-auto pt-4 border-t border-gray-100 flex items-end justify-between">
            <div>
                <span class="text-xs text-gray-500 block mb-0.5">Mulai dari</span>
                <span class="text-lg font-black text-gray-900">Rp {{ number_format($paket['harga'], 0, ',', '.') }}</span>
            </div>
            <a href="/paket/{{ $paket['slug'] }}" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-gray-950 rounded-full hover:bg-black transition-colors shadow-md">
                Detail
                <svg class="w-3.5 h-3.5 ml-2 transition-transform group-hover:translate-x-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>