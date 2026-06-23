@props(['paket'])

<div data-aos="fade-up"
    class="group flex flex-col bg-white border border-gray-100 rounded-3xl shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

    {{-- Bagian Gambar --}}
    <div class="relative overflow-hidden">
        <img class="w-full h-60 object-cover transition-transform duration-700 group-hover:scale-110"
            src="{{ Storage::url($paket->image) }}" alt="{{ $paket->name }}" />

        <div
            class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-gray-800 shadow-sm">
            {{ $paket->duration }}
        </div>

        {{-- Badge Recommended / Paling Populer (Kiri Atas) --}}
        @if ($paket->is_recommended)
            <div
                class="absolute -top-2 -left-16 bg-travel-primary w-48 h-20 text-gray-900 shadow-lg flex items-center justify-center z-10 -rotate-45">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-thumbs-up-icon lucide-thumbs-up size-10 rotate-45 text-white">
                    <path
                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z" />
                    <path d="M7 10v12" />
                </svg>
            </div>
        @endif
    </div>

    {{-- Bagian Konten --}}
    <div class="relative p-6 flex flex-col grow">

        {{-- KATEGORI (Gaya Pill Tags Dinamis) --}}
        @if ($paket->categories->isNotEmpty())
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach ($paket->categories as $kategori)
                    <span
                        class="bg-lime-50 border border-travel-secondary-dark text-travel-secondary-dark text-[10px] font-extrabold uppercase tracking-widest px-2.5 py-1 rounded-full">
                        {{ $kategori->name }}
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
            {{ $paket->location }}
        </div>

        {{-- Judul --}}
        <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">
            {{ $paket->name }}
        </h5>

        {{-- Harga & Tombol Bawah --}}
        <div class="mt-auto pt-4 border-t border-gray-300 flex items-end justify-between">
            <div>
                <span class="text-xs text-gray-500 block mb-0.5">Mulai dari</span>
                <span class="text-lg font-black text-gray-900">Rp
                    {{ number_format($paket->price, 0, ',', '.') }}</span>
            </div>
            <a href="{{ route('packages.detailPaket', $paket->slug) }}"
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
