@extends('layouts.app')

@section('content')
{{-- Memastikan seluruh container utama berwarna gelap agar tidak ada bocor putih --}}
<div class="bg-[#001529] min-h-screen">

    {{-- Section Hero --}}
    <section class="relative pt-16 pb-28 md:pb-36 overflow-hidden bg-[#001529]">
        {{-- Efek Cahaya Latar Belakang --}}
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <div class="absolute top-[-20%] right-[-10%] w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[150px]"></div>
            <div class="absolute bottom-[-20%] left-[-10%] w-[600px] h-[600px] bg-indigo-600/20 rounded-full blur-[150px]"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size: 30px 30px;"></div>
        </div>

        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-16 relative z-10">
            {{-- Kolom Kiri: Teks --}}
            <div class="md:w-1/2 text-center md:text-left">
                <div class="inline-block px-4 py-1.5 mb-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-full">
                    <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">
                        Berilmu • Berkarakter • Berprestasi
                    </p>
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-[1.1] mb-8 tracking-tight">
                    Mencetak Generasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Cerdas</span> & Berkarakter
                </h1>
                <p class="text-slate-400 text-lg mb-10 max-w-lg leading-relaxed italic">
                    "SDN Cibinong 2 berkomitmen memberikan pendidikan berkualitas untuk membentuk siswa yang siap menghadapi masa depan."
                </p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center md:justify-start">
                    <a href="{{ route('profil') }}" class="group relative px-8 py-4 bg-blue-600 text-white rounded-xl font-bold transition-all hover:shadow-[0_20px_40px_rgba(37,99,235,0.4)] overflow-hidden">
                        <span class="relative z-10 text-sm tracking-widest uppercase">Jelajahi Profil</span>
                        <div class="absolute inset-0 bg-blue-700 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    </a>
                </div>
            </div>

            {{-- Kolom Kanan: Slider --}}
            <div class="md:w-1/2 w-full relative">
                <div class="relative p-3 bg-white/5 backdrop-blur-md rounded-[2.5rem] border border-white/10 shadow-2xl">
                    <div class="swiper myHeroSwiper rounded-[2rem] overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('img/1.jpg') }}" class="w-full h-[350px] md:h-[500px] object-cover hover:scale-105 transition-transform duration-700 opacity-90">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute -right-4 -bottom-4 bg-gradient-to-br from-amber-400 to-orange-500 p-6 rounded-2xl shadow-xl z-20 animate-bounce">
                    <i class="fas fa-award text-white text-2xl"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION STATISTIK - Diperbaiki agar tidak ada gap putih --}}
    <section class="relative z-30 -mt-16 md:-mt-24 pb-12 bg-transparent">
        <div class="container mx-auto px-4">
            <div class="bg-[#001e36]/90 backdrop-blur-2xl border border-white/10 rounded-[3rem] p-8 md:p-12 grid grid-cols-2 md:grid-cols-4 gap-8 shadow-[0_40px_80px_-15px_rgba(0,0,0,0.6)]">
                <div class="flex flex-col items-center text-center space-y-3 border-r border-white/5 last:border-0">
                    <div class="w-14 h-14 bg-blue-500/10 text-blue-400 rounded-2xl flex items-center justify-center text-xl border border-blue-500/20"><i class="fas fa-user-graduate"></i></div>
                    <h3 class="text-3xl font-black text-white">300+</h3>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Siswa Aktif</p>
                </div>
                <div class="flex flex-col items-center text-center space-y-3 border-r border-white/5 last:border-0">
                    <div class="w-14 h-14 bg-indigo-500/10 text-indigo-400 rounded-2xl flex items-center justify-center text-xl border border-indigo-500/20"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3 class="text-3xl font-black text-white">12</h3>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Guru & Staf</p>
                </div>
                <div class="flex flex-col items-center text-center space-y-3 border-r border-white/5 last:border-0">
                    <div class="w-14 h-14 bg-amber-500/10 text-amber-400 rounded-2xl flex items-center justify-center text-xl border border-amber-500/20"><i class="fas fa-trophy"></i></div>
                    <h3 class="text-3xl font-black text-white">50+</h3>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Prestasi</p>
                </div>
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="w-14 h-14 bg-emerald-500/10 text-emerald-400 rounded-2xl flex items-center justify-center text-xl border border-emerald-500/20"><i class="fas fa-book"></i></div>
                    <h3 class="text-3xl font-black text-white">8+</h3>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Eskul</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION VISI & MISI --}}
    <section class="py-24 bg-[#001529] relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <div class="lg:w-1/3">
                    <h2 class="text-sm font-black text-blue-400 uppercase tracking-[0.3em] mb-4">Core Values</h2>
                    <h3 class="text-4xl font-extrabold text-white leading-tight">Visi & Misi Utama Kami</h3>
                    <p class="mt-6 text-slate-400 leading-relaxed">Menjadi pilar utama dalam mencerdaskan kehidupan bangsa melalui sistem pendidikan yang adaptif dan religius.</p>
                </div>
                <div class="lg:w-2/3 grid md:grid-cols-2 gap-8">
                    <div class="p-8 bg-white/5 rounded-[2.5rem] border border-white/10 hover:bg-white/10 transition-all group">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg shadow-blue-600/30">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-4">Visi</h4>
                        <p class="text-sm text-slate-400 leading-relaxed italic">"Terwujudnya sekolah yang unggul dalam prestasi, luhur dalam budi pekerti, dan berwawasan lingkungan."</p>
                    </div>
                    <div class="p-8 bg-white/5 rounded-[2.5rem] border border-white/10 hover:bg-white/10 transition-all group">
                        <div class="w-12 h-12 bg-indigo-600 text-white rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg shadow-indigo-600/30">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-4">Misi</h4>
                        <ul class="text-sm text-slate-400 space-y-3">
                            <li class="flex gap-3 items-start"><span class="text-blue-400">01.</span> Meningkatkan kualitas pembelajaran yang aktif dan inovatif berbasis teknologi.</li>
                            <li class="flex gap-3 items-start"><span class="text-blue-400">02.</span> Membangun karakter siswa yang religius, jujur, dan disiplin tinggi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Konten Bawah --}}
    <section class="py-24 bg-[#000d1a]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                {{-- Tentang Kami --}}
                <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10 shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-4 tracking-tight">Tentang Kami</h2>
                    <div class="h-1.5 w-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full mb-8"></div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        SDN Cibinong 2 adalah pusat keunggulan pendidikan yang berfokus pada keseimbangan kecerdasan emosional dan intelektual anak.
                    </p>
                    <a href="{{ route('profil') }}" class="inline-flex items-center text-blue-400 font-bold text-[11px] uppercase tracking-[0.2em] group">
                        Selengkapnya
                        <span class="ml-3 p-2 bg-white/5 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-all">&rarr;</span>
                    </a>
                </div>

                {{-- Prestasi --}}
                <div>
                    <div class="flex justify-between items-end mb-8 px-2">
                        <h2 class="text-2xl font-bold text-white tracking-tight">Prestasi</h2>
                        <a href="{{ route('prestasi') }}" class="text-blue-400 text-[9px] font-black uppercase tracking-[0.3em] border-b-2 border-blue-400/20 pb-1 hover:border-blue-400 transition-all">Lihat Semua</a>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        @forelse($prestasi_terbaru as $p)
                        <div class="group cursor-pointer">
                            <div class="overflow-hidden rounded-2xl mb-3 border border-white/10">
                                <img src="{{ asset('uploads/prestasi/' . $p->gambar) }}" class="h-36 w-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                            </div>
                            <p class="text-[10px] font-bold text-slate-300 uppercase leading-tight px-1 group-hover:text-blue-400 transition-colors">{{ $p->judul }}</p>
                        </div>
                        @empty
                        <p class="text-slate-500 text-xs italic col-span-2 text-center py-10">Belum ada data.</p>
                        @endforelse
                    </div>
                </div>

                {{-- Update/Berita --}}
                <div>
                    <div class="flex justify-between items-end mb-8 px-2">
                        <h2 class="text-2xl font-bold text-white tracking-tight">Galeri</h2>
                        <a href="{{ route('berita') }}" class="text-blue-400 text-[9px] font-black uppercase tracking-[0.3em] border-b-2 border-blue-400/20 pb-1 hover:border-blue-400 transition-all">Lihat Semua</a>
                    </div>
                    <div class="space-y-6">
                        @forelse($berita_terbaru as $b)
                        <div class="flex gap-5 p-3 rounded-2xl border border-transparent hover:border-white/10 hover:bg-white/5 transition-all group">
                            <img src="{{ asset($b->gambar) }}" class="w-20 h-20 rounded-xl object-cover shadow-lg grayscale group-hover:grayscale-0 transition-all">
                            <div class="flex flex-col justify-center">
                                <h4 class="text-xs font-bold text-slate-200 leading-tight group-hover:text-blue-400">{{ $b->judul }}</h4>
                                <p class="text-[9px] font-bold text-slate-500 mt-2 flex items-center gap-2 uppercase">
                                    <i class="far fa-calendar text-blue-500"></i> {{ $b->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                        @empty
                        <p class="text-slate-500 text-xs italic text-center py-10">Tidak ada update.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
