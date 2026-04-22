<nav class="bg-white py-4 shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="{{ asset('img/logo.png') }}" class="h-12" alt="Logo">
            <div>
                <h1 class="font-bold text-[#002147] text-xl leading-none">SDN CIBINONG 2</h1>
                <p class="text-[10px] text-gray-400 tracking-tighter mt-1 uppercase">Maju Bersama Hebat Semua</p>
            </div>
        </div>

        <div class="hidden md:flex gap-8 text-sm font-semibold">
            {{-- Logika: Jika route adalah 'home', pakai class blue, jika tidak pakai text-gray-600 --}}
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Beranda</a>

            <a href="{{ route('profil') }}"
               class="{{ request()->routeIs('profil') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Profil</a>

            <a href="{{ route('akademik') }}"
               class="{{ request()->routeIs('akademik') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Akademik</a>

            <a href="{{ route('prestasi') }}"
               class="{{ request()->routeIs('prestasi') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Prestasi</a>

            <a href="{{ route('galeri') }}"
               class="{{ request()->routeIs('galeri') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Galeri</a>

            <a href="{{ route('berita') }}"
               class="{{ request()->routeIs('berita') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Berita</a>

            <a href="{{ route('kontak') }}"
               class="{{ request()->routeIs('kontak') ? 'text-blue-600' : 'text-gray-600' }} hover:text-blue-600 transition">Kontak</a>
        </div>

        <a href="#" class="bg-[#002147] text-white px-5 py-2 rounded text-xs font-bold uppercase tracking-widest active:scale-95 transition">
            PPDB 2026
        </a>
    </div>
</nav>
