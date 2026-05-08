@props(['active' => false])
<div class="group relative text-2xl font-medium transition-colors duration-200
    {{ $active ? 'text-gray-950' : 'text-gray-500 hover:text-gray-900' }}">
    <a {{ $attributes }}
        class="inline-block px-6 py-6 w-full h-full"
        aria-current="{{ $active ? 'page' : false }}">
    
        {{ $slot }}
    
        <!-- Garis bawah dekoratif -->
        <span class="absolute bottom-0 left-0 h-1 bg-linear-to-r from-travel-primary via-travel-secondary to-travel-tertiary transition-all duration-300
            {{ $active ? 'w-full' : 'w-0 group-hover:w-full' }}">
        </span>
    </a>
</div>
