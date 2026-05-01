<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<nav class="sticky top-0 z-[100] border-b border-white/5 bg-[#07111f]/85 backdrop-blur-2xl shadow-[0_8px_30px_rgba(0,0,0,0.35)]"
     x-data="{ open: false }">

    {{-- Glow Accent --}}
    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-cyan-400/60 to-transparent"></div>

    <div class="container mx-auto px-4 py-3 md:py-4 flex justify-between items-center relative">

        {{-- LOGO --}}
        <div class="flex items-center gap-3 shrink-0 relative z-[110]">
            <div class="p-2 bg-white/5 rounded-2xl border border-white/10 shadow-inner shadow-cyan-500/10">
                <img src="{{ asset('img/logo.png') }}" class="h-9 md:h-12 w-auto" alt="Logo">
            </div>

            <div class="flex flex-col">
                <h1 class="font-black text-white text-base md:text-xl leading-none tracking-tight">
                    SDN CIBINONG 2
                </h1>
                <p class="text-[8px] md:text-[10px] text-cyan-400 font-bold tracking-[0.2em] mt-1 uppercase">
                    Modern Digital School
                </p>
            </div>
        </div>


        {{-- DESKTOP NAV --}}
        <div class="hidden lg:flex items-center gap-3">

            @php
                $navItems = [
                    'home' => 'Beranda',
                    'profil' => 'Profil',
                    'akademik' => 'Akademik',
                    'prestasi' => 'Prestasi',
                    'galeri' => 'Galeri',
                    'berita' => 'Berita',
                    'kontak' => 'Kontak'
                ];
            @endphp

            <div class="flex gap-2 text-[13px] font-bold uppercase tracking-wider">

                @foreach($navItems as $route => $label)
                    <a href="{{ route($route) }}"
                       class="relative px-4 py-2 rounded-xl transition-all duration-300
                       {{ request()->routeIs($route)
                            ? 'text-cyan-300 bg-cyan-500/10 border border-cyan-400/20'
                            : 'text-slate-300 hover:text-cyan-300 hover:bg-white/5' }}">
                        {{ $label }}

                        @if(request()->routeIs($route))
                            <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-6 h-1 rounded-full bg-cyan-400"></span>
                        @endif
                    </a>
                @endforeach

            </div>

            {{-- CTA BUTTON --}}
            <a href="{{ route('kontak') }}"
               class="ml-4 px-5 py-3 bg-cyan-500 text-slate-900 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-cyan-400 shadow-[0_10px_25px_rgba(6,182,212,0.35)] hover:-translate-y-0.5 transition-all">
                Hubungi Kami
            </a>

        </div>


        {{-- MOBILE TOGGLE --}}
        <div class="lg:hidden relative z-[120]">
            <button @click.stop="open = !open"
                    type="button"
                    class="p-3 bg-cyan-500/10 border border-cyan-400/20 rounded-2xl text-cyan-300 hover:bg-cyan-500/20 active:scale-90 transition-all">

                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="open"
                     x-cloak
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>


    {{-- MOBILE MENU --}}
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         @click.away="open = false"
         class="lg:hidden absolute left-0 right-0 top-full bg-[#07111f]/98 backdrop-blur-2xl border-t border-white/10 shadow-2xl z-[105] overflow-hidden">

        <div class="px-4 py-6 flex flex-col gap-3">

            @foreach($navItems as $route => $label)
                <a href="{{ route($route) }}"
                   class="p-4 rounded-2xl font-bold uppercase text-[11px] tracking-widest transition-all
                   {{ request()->routeIs($route)
                        ? 'bg-cyan-500 text-slate-900 shadow-lg shadow-cyan-500/20'
                        : 'text-slate-300 hover:bg-white/5 hover:text-cyan-300' }}">
                    {{ $label }}
                </a>
            @endforeach

            {{-- Mobile CTA --}}
            <a href="{{ route('kontak') }}"
               class="mt-2 p-4 rounded-2xl bg-cyan-500 text-slate-900 text-center font-black uppercase tracking-widest shadow-lg shadow-cyan-500/20">
                Hubungi Kami
            </a>

        </div>
    </div>
</nav>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
