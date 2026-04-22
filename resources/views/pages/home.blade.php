@extends('layouts.app')

@section('content')
{{-- Section Hero --}}
<section class="relative pt-12 pb-32 md:pb-48 bg-white overflow-visible">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">

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
        <div class="md:w-1/2 w-full">
            <div class="swiper myHeroSwiper rounded-3xl shadow-2xl border-4 md:border-8 border-white bg-gray-100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/1.jpg') }}" class="w-full h-[300px] md:h-[450px] object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/2.jpg') }}" class="w-full h-[300px] md:h-[450px] object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/3.jpg') }}" class="w-full h-[300px] md:h-[450px] object-cover">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next !text-white after:!text-lg"></div>
                <div class="swiper-button-prev !text-white after:!text-lg"></div>
            </div>
        </div>
    </div>

    {{-- Statistik Bar (Floating) --}}
    <div class="absolute left-0 right-0 -bottom-16 md:-bottom-20 z-30 px-4">
        <div class="container mx-auto">
            <div class="bg-[#002147] rounded-2xl py-8 md:py-10 px-6 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 text-white shadow-2xl">
                <div class="text-center md:border-r border-gray-700">
                    <i class="fas fa-user-graduate text-blue-400 text-2xl md:text-3xl mb-3"></i>
                    <p class="text-2xl md:text-3xl font-bold">1200+</p>
                    <p class="text-[10px] uppercase tracking-widest opacity-60">Siswa Aktif</p>
                </div>
                <div class="text-center md:border-r border-gray-700">
                    <i class="fas fa-chalkboard-teacher text-blue-400 text-2xl md:text-3xl mb-3"></i>
                    <p class="text-2xl md:text-3xl font-bold">80+</p>
                    <p class="text-[10px] uppercase tracking-widest opacity-60">Guru & Staf</p>
                </div>
                <div class="text-center md:border-r border-gray-700">
                    <i class="fas fa-trophy text-blue-400 text-2xl md:text-3xl mb-3"></i>
                    <p class="text-2xl md:text-3xl font-bold">150+</p>
                    <p class="text-[10px] uppercase tracking-widest opacity-60">Prestasi</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-running text-blue-400 text-2xl md:text-3xl mb-3"></i>
                    <p class="text-2xl md:text-3xl font-bold">15+</p>
                    <p class="text-[10px] uppercase tracking-widest opacity-60">Eskul</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Tambahan (Tentang Kami / Berita) --}}
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 mt-10">
        {{-- Kamu bisa isi konten tambahan di sini agar halaman tidak langsung habis --}}
    </div>
</section>
@endsection

@push('scripts')
<script>
    var swiper = new Swiper(".myHeroSwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush
