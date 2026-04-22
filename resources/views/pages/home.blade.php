@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="relative pt-12 pb-24 md:pb-32 bg-white overflow-hidden">
    {{-- Dekorasi Dots --}}
    <div class="absolute left-4 top-1/2 -translate-y-1/2 hidden lg:block opacity-20">
        <div class="grid grid-cols-4 gap-2">
            @for ($i = 0; $i < 16; $i++)
                <div class="w-1.5 h-1.5 bg-blue-600 rounded-full"></div>
            @endfor
        </div>
    </div>

    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12 relative z-10">
        {{-- Kolom Kiri: Teks --}}
        <div class="md:w-1/2 text-center md:text-left">
            <p class="text-blue-600 font-bold text-sm tracking-widest uppercase mb-4">
                Berilmu • Berkarakter • Berprestasi
            </p>
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#002147] leading-tight mb-6">
                Mencetak Generasi <br> Cerdas dan <br> Berkarakter
            </h1>
            <p class="text-gray-500 text-lg mb-8 max-w-lg leading-relaxed">
                SDN Cibinong 2 berkomitmen memberikan pendidikan berkualitas untuk membentuk siswa yang siap menghadapi masa depan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-md font-bold shadow-lg hover:bg-blue-700 transition">Selengkapnya &rarr;</a>
                <a href="{{ route('profil') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-md font-bold hover:bg-blue-50 transition">Lihat Profil Sekolah</a>
            </div>
        </div>

        {{-- Kolom Kanan: Slider --}}
        <div class="md:w-1/2 w-full relative">
            <div class="swiper myHeroSwiper rounded-3xl shadow-2xl relative z-10 border-4 border-white overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/1.jpg') }}" class="w-full h-[300px] md:h-[450px] object-cover">
                    </div>
                </div>
            </div>
            <div class="absolute -right-4 -bottom-4 w-full h-full bg-blue-50 rounded-3xl -z-10"></div>
        </div>
    </div>
</section>

{{-- SECTION STATISTIK (Tidak Absolute lagi agar tidak menimpa) --}}
<section class="bg-white -mt-16 relative z-30">
    <div class="container mx-auto px-4">
        <div class="bg-[#002147] rounded-2xl py-8 px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-white shadow-2xl">
            <div class="flex items-center gap-4 md:border-r border-gray-700">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <p class="text-xl md:text-2xl font-bold">1200+</p>
                    <p class="text-[10px] uppercase opacity-60">Siswa Aktif</p>
                </div>
            </div>
            <div class="flex items-center gap-4 md:border-r border-gray-700">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div>
                    <p class="text-xl md:text-2xl font-bold">12</p>
                    <p class="text-[10px] uppercase opacity-60">Guru & Staf</p>
                </div>
            </div>
            <div class="flex items-center gap-4 md:border-r border-gray-700">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-trophy"></i>
                </div>
                <div>
                    <p class="text-xl md:text-2xl font-bold">50+</p>
                    <p class="text-[10px] uppercase opacity-60">Prestasi Diraih</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-book"></i>
                </div>
                <div>
                    <p class="text-xl md:text-2xl font-bold">8+</p>
                    <p class="text-[10px] uppercase opacity-60">Ekstrakurikuler</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Konten Bawah --}}
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

            {{-- Tentang Kami --}}
            <div>
                <h2 class="text-2xl font-bold text-[#002147] mb-4">Tentang Kami</h2>
                <div class="h-1 w-12 bg-blue-600 mb-6"></div>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    SDN Cibinong 2 adalah sekolah dasar yang berfokus pada pengembangan potensi siswa secara akademik maupun non-akademik dengan lingkungan belajar yang kondusif.
                </p>
                <a href="#" class="text-blue-600 font-bold text-sm">Baca Selengkapnya &rarr;</a>
            </div>

            {{-- Prestasi Terbaru --}}
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-[#002147]">Prestasi Terbaru</h2>
                    <a href="#" class="text-blue-600 text-xs font-bold uppercase">Lihat Semua</a>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <img src="{{ asset('img/1.jpg') }}" class="h-32 w-full object-cover rounded-xl mb-2">
                        <p class="text-[10px] font-bold text-[#002147] uppercase leading-tight">Juara 1 Lomba Debat Nasional</p>
                    </div>
                    <div>
                        <img src="{{ asset('img/2.jpg') }}" class="h-32 w-full object-cover rounded-xl mb-2">
                        <p class="text-[10px] font-bold text-[#002147] uppercase leading-tight">Medali Emas OSN</p>
                    </div>
                </div>
            </div>

            {{-- Berita Terbaru --}}
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-[#002147]">Berita Terbaru</h2>
                    <a href="#" class="text-blue-600 text-xs font-bold uppercase">Lihat Semua</a>
                </div>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <img src="{{ asset('img/3.jpg') }}" class="w-16 h-16 rounded-lg object-cover">
                        <div>
                            <h4 class="text-xs font-bold text-[#002147] leading-tight">Workshop Literasi Digital Siswa</h4>
                            <p class="text-[10px] text-gray-400 mt-1">20 Mei 2026</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <img src="{{ asset('img/1.jpg') }}" class="w-16 h-16 rounded-lg object-cover">
                        <div>
                            <h4 class="text-xs font-bold text-[#002147] leading-tight">Kunjungan Industri Kreatif</h4>
                            <p class="text-[10px] text-gray-400 mt-1">15 Mei 2026</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
