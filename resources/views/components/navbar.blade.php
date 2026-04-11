<header id="navbar"
    class="fixed space-x-2 bg-black/20 backdrop-blur-md border-white/10 shadow-lg left-0 top-0 w-full z-20 flex items-center justify-between py-4 px-8 text-white transition-all duration-300">
    <div class="flex items-center space-x-2">
        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
        <span class="text-2xl md:text-3xl font-bold tracking-tight">Arfaka</span>
    </div>

    <div class="hidden lg:block">
        <nav class="flex gap-2">
            <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
            <x-nav-link href="/destinasi" :active="request()->is('destinasi')">Destinasi</x-nav-link>
            <x-nav-link href="/galeri" :active="request()->is('galeri')">Galeri</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">Tentang</x-nav-link>
        </nav>
    </div>

    <div class="flex items-center space-x-3 md:space-x-4">
        {{-- no wa berasal/disimpan dari .env --}}
        <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}?text=test untuk direct ke wa" target="_blank"
            class="hidden md:flex items-center cursor-pointer bg-lime-400 text-gray-900 p-2 md:p-4 rounded-full hover:bg-lime-500 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
            <h3 class="mx-2 hidden sm:block text-base font-medium">Hubungi Kami</h3>
        </a>

        {{-- dropdown button --}}
        <button id="openSidebarBtn"
            class="lg:hidden p-2 bg-gray-200 rounded-lg hover:bg-gray-200/80 transition cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 text-gray-950">
                <path fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm8.25 5.25a.75.75 0 0 1 .75-.75h8.25a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75Z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</header>


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
            class="text-lg font-medium text-gray-700 hover:text-lime-500 transition-colors {{ request()->is('/') ? 'text-lime-500 font-bold' : '' }}">Beranda</a>
        <a href="/destinasi"
            class="text-lg font-medium text-gray-700 hover:text-lime-500 transition-colors {{ request()->is('destinasi') ? 'text-lime-500 font-bold' : '' }}">Destinasi</a>
        <a href="/galeri"
            class="text-lg font-medium text-gray-700 hover:text-lime-500 transition-colors {{ request()->is('galeri') ? 'text-lime-500 font-bold' : '' }}">Galeri</a>
        <a href="/about"
            class="text-lg font-medium text-gray-700 hover:text-lime-500 transition-colors {{ request()->is('about') ? 'text-lime-500 font-bold' : '' }}">Tentang</a>
    </nav>

    <div class="p-6 border-t border-gray-100">
        {{-- no wa berasal/disimpan dari .env --}}
        <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}?text=test untuk direct ke wa" target="_blank"
            class="flex w-full justify-center gap-3 text-center bg-lime-400 text-gray-900 py-3 rounded-xl font-semibold hover:bg-lime-500 transition shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg>
            <h3>
                Rencanakan Trip
            </h3>
        </a>
    </div>
</div>
