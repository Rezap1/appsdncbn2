<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<nav class="bg-[#001529]/95 backdrop-blur-md py-3 md:py-4 shadow-2xl sticky top-0 z-[100] border-b border-white/5"
     x-data="{ open: false }">
    <div class="container mx-auto px-4 flex justify-between items-center relative">

        <div class="flex items-center gap-2 md:gap-3 shrink-0 relative z-[110]">
            <div class="p-1 md:p-1.5 bg-white/5 rounded-lg md:rounded-xl border border-white/10">
                <img src="{{ asset('img/logo.png') }}" class="h-8 md:h-12 w-auto" alt="Logo">
            </div>
            <div class="flex flex-col">
                <h1 class="font-black text-white text-base md:text-xl leading-none tracking-tight">SDN CIBINONG 2</h1>
                <p class="text-[7px] md:text-[9px] text-blue-400 font-bold tracking-[0.15em] mt-1 uppercase">Maju Bersama Hebat Semua</p>
            </div>
        </div>

        <div class="hidden lg:flex gap-8 text-[13px] font-bold uppercase tracking-wider">
            @php
                $navItems = ['home' => 'Beranda', 'profil' => 'Profil', 'akademik' => 'Akademik', 'prestasi' => 'Prestasi', 'galeri' => 'Galeri', 'berita' => 'Berita', 'kontak' => 'Kontak'];
            @endphp
            @foreach($navItems as $route => $label)
                <a href="{{ route($route) }}" class="{{ request()->routeIs($route) ? 'text-blue-400' : 'text-slate-300' }} hover:text-blue-400 transition-all relative group">
                    {{ $label }}
                    <span class="absolute -bottom-1 left-0 h-0.5 bg-blue-400 transition-all {{ request()->routeIs($route) ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-3 lg:hidden relative z-[120]">
            <button @click.stop="open = !open"
                    type="button"
                    class="p-2.5 bg-blue-600/20 border border-blue-500/30 rounded-xl text-white hover:bg-blue-600/40 active:scale-90 transition-all">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         @click.away="open = false"
         class="lg:hidden absolute left-0 right-0 top-full bg-[#001529] border-t border-white/10 shadow-2xl z-[105] overflow-hidden">
        <div class="px-4 py-6 flex flex-col gap-2">
            @foreach($navItems as $route => $label)
                <a href="{{ route($route) }}"
                   class="p-4 rounded-xl font-bold uppercase text-[11px] tracking-widest {{ request()->routeIs($route) ? 'bg-blue-600 text-white' : 'text-slate-400 hover:bg-white/5' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>
</nav>

<style>
    [x-cloak] { display: none !important; }
</style>
