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
            <a href="{{ route('home') }}" class="text-blue-600">Beranda</a>
            <a href="{{ route('profil') }}">Profil</a>
            <a href="{{ route('akademik') }}">Akademik</a>
            <a href="{{ route('prestasi') }}">Prestasi</a>
            <a href="{{ route('galeri') }}">Galeri</a>
            <a href="{{ route('berita') }}">Berita</a>
            <a href="{{ route('kontak') }}">Kontak</a>
        </div>

        <a href="#" class="bg-[#002147] text-white px-5 py-2 rounded text-xs font-bold uppercase tracking-widest">
            PPDB 2026
        </a>
    </div>
</nav>
