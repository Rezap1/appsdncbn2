@extends('layouts.app')

@section('content')
<div class="bg-[#020617] min-h-screen overflow-hidden">

    {{-- HEADER --}}
    <section class="relative py-28 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[900px] h-[320px] bg-blue-600/10 rounded-full blur-[140px]"></div>
        </div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tight">
                Profil
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">
                    Tenaga Pendidik
                </span>
            </h1>
        </div>
    </section>

    {{-- KEPALA SEKOLAH --}}
<section class="py-24 relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            {{-- FOTO --}}
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600/20 to-cyan-500/10 rounded-[3rem] blur-2xl opacity-50 group-hover:opacity-80 transition"></div>

                <div class="relative z-10 rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl">
                    <img src="{{ asset('img/ks.jpg') }}"
                         class="w-full h-[600px] object-cover group-hover:scale-105 transition duration-700">

                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#020617] via-[#020617]/80 to-transparent p-8">
                        <p class="text-blue-400 font-bold text-[10px] uppercase tracking-[0.4em] mb-2">
                            Kepala Sekolah
                        </p>
                        <h3 class="text-2xl md:text-3xl font-black text-white tracking-tight">
                            Juanda, S.Pd.
                        </h3>
                    </div>
                </div>
            </div>

            {{-- TEXT --}}
            <div>

                <div class="mb-8">
                    <p class="text-blue-400 font-bold uppercase tracking-[0.3em] text-[10px] mb-3">
                        Pesan Kepala Sekolah
                    </p>
                    <h2 class="text-4xl font-black text-white mb-4">
                        Sambutan Kepala Sekolah
                    </h2>
                    <div class="h-1.5 w-24 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-full"></div>
                </div>

                <div class="space-y-5 text-slate-400 leading-relaxed text-lg">
                    <p class="text-white font-semibold">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh,
                    </p>

                    <p>
                        Selamat datang di website resmi SDN Cibinong 2.
                        Website ini menjadi sarana informasi dan komunikasi
                        antara sekolah dengan masyarakat.
                    </p>

                    <p>
                        Kami berkomitmen menghadirkan pendidikan yang inovatif,
                        berbasis teknologi, serta membentuk karakter siswa
                        yang unggul dan berakhlak mulia.
                    </p>

                    {{-- QUOTE --}}
                    <div class="p-6 bg-white/5 border border-blue-500/20 rounded-2xl">
                        <p class="italic text-white text-lg leading-relaxed">
                            “Pendidikan adalah kunci masa depan bangsa.”
                        </p>
                    </div>
                </div>

                {{-- ACTION BUTTON --}}
                <div class="mt-8 flex gap-4">

                    {{-- WHATSAPP --}}
                    <a href="https://wa.me/6285846854231"
                       target="_blank"
                       class="px-6 py-3 bg-green-500 hover:bg-green-400 text-white font-bold rounded-xl shadow-lg flex items-center gap-2 transition">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi Kepala Sekolah
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>

    {{-- DAFTAR GURU --}}
    <section class="py-24 bg-[#000d1a]/70 border-t border-white/5">
        <div class="container mx-auto px-4">

            <div class="text-center mb-20">
                <h2 class="text-4xl font-black text-white mb-4">
                    Tenaga Pendidik
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                @forelse($gurus as $g)
                <div class="group">
                    <div class="bg-white/5 border border-white/10 rounded-[2rem] overflow-hidden hover:border-blue-500/30 hover:bg-white/10 transition-all duration-500 shadow-xl">

                        {{-- FOTO --}}
                        <div class="relative overflow-hidden aspect-[3/4]">
                            <img src="{{ $g->foto ? asset($g->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($g->nama) }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-700">

                            {{-- BADGE JABATAN --}}
                            <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-blue-600/90 text-white text-[9px] font-bold uppercase tracking-widest shadow">
                                {{ $g->jabatan }}
                            </div>

                            {{-- OVERLAY --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-[#020617] via-transparent to-transparent"></div>
                        </div>

                        {{-- INFO --}}
                        <div class="p-6 text-center">
                            <h4 class="font-bold text-white text-sm uppercase tracking-wider leading-tight group-hover:text-blue-400 transition">
                                {{ $g->nama }}
                            </h4>

                            {{-- SOSIAL --}}
                            <div class="mt-4 flex justify-center gap-3">

                                {{-- WhatsApp --}}
                                @if($g->whatsapp)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $g->whatsapp) }}"
                                   target="_blank"
                                   class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-green-400 hover:bg-green-500 hover:text-white transition">
                                    <i class="fab fa-whatsapp text-xs"></i>
                                </a>
                                @endif

                                {{-- Email --}}
                                @if($g->email)
                                <a href="mailto:{{ $g->email }}"
                                   class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white transition">
                                    <i class="fas fa-envelope text-xs"></i>
                                </a>
                                @endif

                                {{-- Facebook --}}
                                @if($g->facebook)
                                <a href="{{ $g->facebook }}"
                                   target="_blank"
                                   class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-indigo-400 hover:bg-indigo-600 hover:text-white transition">
                                    <i class="fab fa-facebook text-xs"></i>
                                </a>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
                @empty
                <p class="text-center text-slate-500 col-span-full">
                    Belum ada data guru
                </p>
                @endforelse

            </div>

        </div>
    </section>

</div>
@endsection
