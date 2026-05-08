@props(['title', 'active' => false])

<div class="relative h-full w-full flex" x-data="{ open: false }" @click.away="open = false">
    <button @click="open = !open"
        class="group relative inline-flex items-center px-6 py-6 text-2xl font-medium transition-colors duration-200 w-full h-full cursor-pointer
        {{ $active ? 'text-gray-950' : 'text-gray-500 hover:text-gray-900' }}">

        <span>{{ $title }}</span>

        <!-- Icon Panah -->
        <svg class="ml-1 w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>

        <!-- Garis bawah dekoratif -->
        <span
            class="absolute bottom-0 left-0 h-1 bg-linear-to-r from-travel-primary via-travel-secondary to-travel-tertiary transition-all duration-300
            {{ $active ? 'w-full' : 'w-0 group-hover:w-full' }}">
        </span>
    </button>

    <!-- Menu Dropdown -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 top-full mt-0 w-full bg-zinc-50 border border-gray-100 shadow-xl rounded-b-xl overflow-hidden z-50"
        style="display: none;">
        {{ $slot }}
    </div>
</div>
