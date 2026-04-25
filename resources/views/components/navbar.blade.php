<nav class="bg-white py-4 shadow-sm sticky top-0 z-50" x-data="{ open: false }">
    <div class="container mx-auto px-4 flex justify-between items-center">
        {{-- Brand/Logo --}}
        <div class="flex items-center gap-3">
            <img src="{{ asset('img/logo.png') }}" class="h-12" alt="Logo">
            <div>
                <h1 class="font-bold text-[#002147] text-xl leading-none">SDN CIBINONG 2</h1>
                <p class="text-[10px] text-gray-400 tracking-tighter mt-1 uppercase">Maju Bersama Hebat Semua</p>
            </div>
        </div>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex gap-8 text-sm font-semibold">
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

        {{-- Right Side (Button & Hamburger) --}}
        <div class="flex items-center gap-4">
            <a href="#" class="hidden sm:block bg-[#002147] text-white px-5 py-2 rounded text-xs font-bold uppercase tracking-widest active:scale-95 transition">
                PPDB 2026
            </a>

            {{-- Tombol Hamburger (Hanya muncul di HP) --}}
            <button @click="open = !open" class="md:hidden text-[#002147] focus:outline-none">
                <i class="fas" :class="open ? 'fa-times' : 'fa-bars'" style="font-size: 1.5rem;"></i>
            </button>
        </div>
    </div>

    {{-- Mobile Menu (Muncul saat tombol diklik) --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-white border-t mt-4 py-4 px-4 flex flex-col gap-4 font-semibold shadow-inner">

        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-blue-600' : 'text-gray-600' }}">Beranda</a>
        <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'text-blue-600' : 'text-gray-600' }}">Profil</a>
        <a href="{{ route('akademik') }}" class="{{ request()->routeIs('akademik') ? 'text-blue-600' : 'text-gray-600' }}">Akademik</a>
        <a href="{{ route('prestasi') }}" class="{{ request()->routeIs('prestasi') ? 'text-blue-600' : 'text-gray-600' }}">Prestasi</a>
        <a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'text-blue-600' : 'text-gray-600' }}">Galeri</a>
        <a href="{{ route('berita') }}" class="{{ request()->routeIs('berita') ? 'text-blue-600' : 'text-gray-600' }}">Berita</a>
        <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'text-blue-600' : 'text-gray-600' }}">Kontak</a>

        <a href="#" class="bg-[#002147] text-white px-5 py-3 rounded text-center text-xs font-bold uppercase tracking-widest">
            PPDB 2026
        </a>
    </div>
</nav>

{{-- Tambahkan script ini di bagian bawah navbar atau di app.blade.php jika belum ada --}}
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
