@props(['active' => false])

<a {{ $attributes }}
    class="px-6 py-4 rounded-full text-xl font-medium transition-all duration-300 {{ $active ? 'bg-white/30 text-white shadow-sm' : 'text-white/80 hover:bg-white/20 hover:text-white' }}"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>