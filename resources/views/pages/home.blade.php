@extends('layouts.app')

@section('content')
<div class="bg-[#07111f] min-h-screen overflow-x-hidden">

    {{-- HERO SECTION --}}
    <section class="relative pt-20 pb-32 md:pb-40 overflow-hidden bg-[#07111f]">

        {{-- Background Modern Tech --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-[-15%] right-[-10%] w-[700px] h-[700px] bg-cyan-500/15 rounded-full blur-[180px]"></div>
            <div class="absolute bottom-[-15%] left-[-10%] w-[700px] h-[700px] bg-blue-600/15 rounded-full blur-[180px]"></div>
            <div class="absolute inset-0 opacity-[0.04]"
                 style="background-image: linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-16 relative z-10">

            {{-- TEXT --}}
            <div class="md:w-1/2 text-center md:text-left">
                <div class="inline-flex items-center gap-2 px-5 py-2 mb-6 bg-cyan-500/10 border border-cyan-400/20 rounded-full">
                    <span class="w-2 h-2 bg-cyan-400 rounded-full animate-pulse"></span>
                    <p class="text-cyan-300 font-bold text-[10px] tracking-[0.35em] uppercase">
                        Modern Education Platform
                    </p>
                </div>

                <h1 class="text-5xl md:text-7xl font-black text-white leading-[1.05] mb-8 tracking-tight">
                    Membangun
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-blue-400 to-indigo-400">
                        Generasi Digital
                    </span>
                    Masa Depan
                </h1>

                <p class="text-slate-400 text-lg mb-10 max-w-xl leading-relaxed">
                    SDN Cibinong 2 menghadirkan pendidikan modern berbasis teknologi untuk membentuk siswa yang cerdas,
                    kreatif, disiplin, dan siap menghadapi era digital.
                </p>

                <div class="flex flex-col sm:flex-row gap-5 justify-center md:justify-start">
                    <a href="{{ route('profil') }}"
                       class="group relative px-8 py-4 bg-cyan-500 text-slate-900 rounded-2xl font-black shadow-[0_15px_35px_rgba(6,182,212,0.35)] hover:shadow-[0_20px_45px_rgba(6,182,212,0.45)] transition-all hover:-translate-y-1">
                        Jelajahi Profil Sekolah
                    </a>
                </div>

                {{-- Trust Badge --}}
                <div class="flex flex-wrap gap-4 mt-10 text-xs text-slate-500 font-bold uppercase tracking-widest">
                    <span>✔ Sekolah Digital</span>
                    <span>✔ Pembelajaran Interaktif</span>
                    <span>✔ Guru Profesional</span>
                </div>
            </div>

            {{-- IMAGE --}}
            <div class="md:w-1/2 w-full relative">
                <div class="relative p-4 bg-white/5 backdrop-blur-xl rounded-[2.5rem] border border-white/10 shadow-2xl">
                    <div class="swiper myHeroSwiper rounded-[2rem] overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('img/1.jpg') }}"
                                     class="w-full h-[350px] md:h-[500px] object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Floating Badge --}}
                <div class="absolute -right-6 -bottom-6 bg-gradient-to-br from-cyan-400 to-blue-500 p-6 rounded-3xl shadow-2xl animate-bounce">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
            </div>
        </div>
    </section>


    {{-- STATS SECTION --}}
    <section class="relative z-30 -mt-20 md:-mt-24 pb-16">
        <div class="container mx-auto px-4">
            <div class="bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[3rem] p-8 md:p-12 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-[0_40px_80px_-15px_rgba(0,0,0,0.6)]">

                @php
                    $stats = [
                        ['300+','Siswa Aktif','fa-user-graduate','cyan'],
                        ['12','Guru & Staf','fa-chalkboard-teacher','blue'],
                        ['50+','Prestasi','fa-trophy','amber'],
                        ['8+','Ekstrakurikuler','fa-book','emerald']
                    ];
                @endphp

                @foreach($stats as $stat)
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-14 h-14 bg-{{ $stat[3] }}-500/10 text-{{ $stat[3] }}-400 rounded-2xl flex items-center justify-center text-xl border border-{{ $stat[3] }}-500/20">
                        <i class="fas {{ $stat[2] }}"></i>
                    </div>
                    <h3 class="text-3xl font-black text-white">{{ $stat[0] }}</h3>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">{{ $stat[1] }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    {{-- VISI MISI --}}
    <section class="py-24 bg-[#07111f]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-start">

                <div class="lg:w-1/3">
                    <h2 class="text-sm font-black text-cyan-400 uppercase tracking-[0.3em] mb-4">Core Values</h2>
                    <h3 class="text-4xl font-black text-white leading-tight">
                        Visi & Misi Sekolah
                    </h3>
                    <p class="mt-6 text-slate-400 leading-relaxed">
                        Komitmen kami adalah membangun generasi yang unggul secara akademik,
                        kuat dalam karakter, dan adaptif terhadap teknologi.
                    </p>
                </div>

                <div class="lg:w-2/3 grid md:grid-cols-2 gap-8">

                    <div class="p-8 bg-white/5 rounded-[2.5rem] border border-white/10 hover:border-cyan-400/30 hover:bg-white/10 transition-all">
                        <div class="w-14 h-14 bg-cyan-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-4">Visi</h4>
                        <p class="text-sm text-slate-400 italic leading-relaxed">
                            "Terwujudnya sekolah yang unggul dalam prestasi, luhur dalam budi pekerti,
                            serta berwawasan lingkungan."
                        </p>
                    </div>

                    <div class="p-8 bg-white/5 rounded-[2.5rem] border border-white/10 hover:border-blue-400/30 hover:bg-white/10 transition-all">
                        <div class="w-14 h-14 bg-blue-500 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-4">Misi</h4>
                        <ul class="text-sm text-slate-400 space-y-3">
                            <li>• Pembelajaran aktif dan inovatif berbasis teknologi</li>
                            <li>• Membangun karakter religius, jujur, dan disiplin</li>
                            <li>• Mengembangkan kreativitas dan bakat siswa</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    {{-- BOTTOM CONTENT --}}
    <section class="py-24 bg-[#050d18]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

                {{-- TENTANG --}}
                <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10 shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-4">Tentang Kami</h2>
                    <div class="h-1.5 w-12 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full mb-8"></div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        SDN Cibinong 2 adalah sekolah dasar yang berkomitmen memberikan pendidikan terbaik
                        dengan pendekatan modern, interaktif, dan berorientasi masa depan.
                    </p>
                    <a href="{{ route('profil') }}"
                       class="inline-flex items-center text-cyan-400 font-bold text-[11px] uppercase tracking-[0.2em]">
                        Selengkapnya →
                    </a>
                </div>


                {{-- PRESTASI --}}
                <div>
                    <div class="flex justify-between items-end mb-8 px-2">
                        <h2 class="text-2xl font-bold text-white">Prestasi</h2>
                        <a href="{{ route('prestasi') }}" class="text-cyan-400 text-xs font-bold uppercase">Lihat Semua</a>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        @forelse($prestasi_terbaru as $p)
                        <div class="group">
                            <div class="overflow-hidden rounded-2xl mb-3 border border-white/10">
                                <img src="{{ asset('uploads/prestasi/' . $p->gambar) }}"
                                     class="h-36 w-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <p class="text-xs font-bold text-slate-300 group-hover:text-cyan-400 transition">
                                {{ $p->judul }}
                            </p>
                        </div>
                        @empty
                        <p class="text-slate-500 text-xs italic col-span-2 text-center py-10">
                            Belum ada data.
                        </p>
                        @endforelse
                    </div>
                </div>


                {{-- BERITA / GALERI --}}
                <div>
                    <div class="flex justify-between items-end mb-8 px-2">
                        <h2 class="text-2xl font-bold text-white">Galeri</h2>
                        <a href="{{ route('berita') }}" class="text-cyan-400 text-xs font-bold uppercase">Lihat Semua</a>
                    </div>

                    <div class="space-y-6">
                        @forelse($berita_terbaru as $b)
                        <div class="flex gap-5 p-3 rounded-2xl border border-transparent hover:border-white/10 hover:bg-white/5 transition-all">
                            <img src="{{ asset($b->gambar) }}"
                                 class="w-20 h-20 rounded-xl object-cover">
                            <div class="flex flex-col justify-center">
                                <h4 class="text-sm font-bold text-slate-200 hover:text-cyan-400 transition">
                                    {{ $b->judul }}
                                </h4>
                                <p class="text-[10px] font-bold text-slate-500 mt-2 uppercase">
                                    {{ $b->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                        @empty
                        <p class="text-slate-500 text-xs italic text-center py-10">
                            Tidak ada update.
                        </p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
