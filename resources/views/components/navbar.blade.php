<nav class="flex gap-2">
    <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
    <x-nav-link href="/destinasi" :active="request()->is('destinasi')">Destinasi</x-nav-link>
    <x-nav-link href="/travel-tips" :active="request()->is('travel-tips')">Travel Tips</x-nav-link>
    <x-nav-link href="/about" :active="request()->is('about')">Tentang</x-nav-link>
</nav>