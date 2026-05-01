@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<div class="bg-[#001529] min-h-screen overflow-hidden">

    {{-- Header Prestasi --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        <div class="absolute top-0 left-1/4 w-[600px] h-[400px] bg-blue-500/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-5 py-2 bg-blue-500/10 backdrop-blur-md border border-blue-500/20 rounded-full mb-6">
                <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                <p class="text-blue-300 font-bold text-[10px] tracking-[0.3em] uppercase">
                    Hall of Fame
                </p>
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter leading-tight">
                Jejak
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                    Prestasi
                </span>
            </h1>

            <p class="text-slate-300 max-w-3xl mx-auto italic leading-relaxed text-lg">
                Apresiasi atas dedikasi, kerja keras, dan pencapaian luar biasa siswa-siswi
                SDN Cibinong 2 dalam berbagai bidang akademik maupun non-akademik.
            </p>
        </div>
    </section>


    {{-- Prestasi Grid --}}
    <section class="py-20 relative">
        <div class="absolute inset-0 opacity-10"
             style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="container mx-auto px-4 relative z-10">

            {{-- Filter --}}
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button class="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 text-white rounded-2xl font-bold text-xs uppercase tracking-widest shadow-lg shadow-blue-500/20 hover:scale-105 transition-all">
                    Semua Prestasi
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                @forelse($prestasi as $item)
                <div class="group relative bg-white/5 rounded-[2.5rem] overflow-hidden border border-white/10 hover:border-blue-400/40 transition-all duration-500 shadow-2xl flex flex-col h-full hover:-translate-y-2">

                    {{-- Image --}}
                    <a href="{{ asset('uploads/prestasi/' . $item->gambar) }}"
                       data-fancybox="gallery"
                       data-caption="{{ $item->judul }} - {{ $item->kategori }}"
                       class="relative overflow-hidden block cursor-zoom-in aspect-video">

                        <img src="{{ asset('uploads/prestasi/' . $item->gambar) }}"
                             alt="{{ $item->judul }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Foto+Tidak+Ditemukan'">

                        <div class="absolute inset-0 bg-[#001529]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                            <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center border border-white/30">
                                <i class="fas fa-expand text-white text-lg"></i>
                            </div>
                        </div>

                        {{-- Badge --}}
                        <div class="absolute top-6 left-6">
                            <span class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-[0.2em] shadow-xl border border-white/20">
                                {{ $item->kategori ?? 'Umum' }}
                            </span>
                        </div>
                    </a>


                    {{-- Content --}}
                    <div class="p-8 flex flex-col flex-grow">

                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-blue-300 rounded-full animate-pulse"></div>
                            <p class="text-blue-300 text-[10px] font-bold uppercase tracking-widest">
                                {{ \Carbon\Carbon::parse($item->tanggal_prestasi)->format('d M Y') }}
                            </p>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4 leading-tight group-hover:text-blue-300 transition-colors">
                            {{ $item->judul }}
                        </h3>

                        <p class="text-slate-300 text-sm leading-relaxed mb-8 line-clamp-3">
                            {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                        </p>

                        <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                            <span class="text-slate-500 font-semibold text-[10px] uppercase tracking-widest">
                                SDN Cibinong 2
                            </span>

                            <div class="w-10 h-10 bg-blue-500/10 rounded-xl flex items-center justify-center border border-blue-500/20 group-hover:bg-blue-500/20 transition">
                                <i class="fas fa-trophy text-blue-300 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="col-span-full text-center py-32 bg-white/5 rounded-[3rem] border border-dashed border-white/10">
                    <div class="mb-6 inline-flex w-20 h-20 bg-blue-500/10 rounded-full items-center justify-center border border-blue-500/20">
                        <i class="fas fa-medal text-blue-400 text-4xl"></i>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-3">
                        Belum Ada Data Prestasi
                    </h3>

                    <p class="text-slate-400 font-medium italic tracking-wide max-w-md mx-auto">
                        Data prestasi sekolah akan ditampilkan di sini setelah admin menambahkan arsip terbaru.
                    </p>
                </div>
                @endforelse

            </div>
        </div>
    </section>


    {{-- Quote Section --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 via-transparent to-cyan-500/5"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <i class="fas fa-quote-left text-4xl text-blue-400/40 mb-8"></i>

                <h2 class="text-2xl md:text-4xl font-light text-slate-200 italic leading-snug mb-8">
                    "Prestasi adalah hasil dari
                    <span class="text-blue-300 font-bold">persiapan</span>,
                    kerja keras, dan belajar dari kegagalan."
                </h2>

                <div class="flex items-center justify-center gap-4">
                    <div class="h-px w-12 bg-white/10"></div>
                    <p class="text-blue-300 font-bold text-[10px] uppercase tracking-[0.4em]">
                        Semangat Juara SDN Cibinong 2
                    </p>
                    <div class="h-px w-12 bg-white/10"></div>
                </div>
            </div>
        </div>
    </section>

</div>


{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        infinite: true,
        transitionEffect: "fade",
        Image: {
            zoom: true,
        },
    });
</script>
@endsection
