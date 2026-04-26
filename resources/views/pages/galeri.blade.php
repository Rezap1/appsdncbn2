@extends('layouts.app')

@section('content')
{{-- Load Fancybox CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<div class="bg-[#001529] min-h-screen">
    {{-- Header Galeri --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        {{-- Efek Cahaya Latar --}}
        <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-block px-4 py-1.5 mb-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-full">
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">Visual Archive</p>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter">
                Galeri <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Kegiatan</span>
            </h1>
            <p class="text-slate-400 max-w-2xl mx-auto italic leading-relaxed text-lg font-medium">
                "Dokumentasi momen-momen berharga dan keceriaan siswa-siswi SDN Cibinong 2 dalam berbagai aktivitas."
            </p>
        </div>
    </section>

    {{-- Grid Galeri --}}
    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            {{-- Filter Button --}}
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button class="px-8 py-3 bg-blue-600 text-white rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-xl shadow-blue-600/20 hover:scale-105 transition-all active:scale-95">
                    Semua Dokumentasi
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($galeries as $item)
                <div class="group">
                    <a href="{{ asset('uploads/galeri/' . $item->gambar) }}"
                       data-fancybox="gallery-kegiatan"
                       data-caption="{{ $item->judul }}"
                       class="relative overflow-hidden rounded-[2.5rem] border border-white/10 shadow-2xl h-[400px] cursor-zoom-in block bg-white/5">

                        {{-- Image: Warna asli --}}
                        <img src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                             alt="{{ $item->judul }}"
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                             onerror="this.src='https://via.placeholder.com/800x600?text=Foto+Tidak+Ditemukan'">

                        {{-- Tech Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-[#001529] via-[#001529]/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-8">
                            <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">
                                    Capture Moment
                                </span>
                                <div class="flex justify-between items-end">
                                    <h3 class="text-white font-bold text-2xl leading-tight tracking-tight max-w-[80%]">
                                        {{ $item->judul }}
                                    </h3>
                                    {{-- Scanner Icon Effect --}}
                                    <div class="w-12 h-12 bg-blue-600/20 backdrop-blur-xl border border-blue-500/30 rounded-2xl flex items-center justify-center text-blue-400 shadow-inner">
                                        <i class="fas fa-expand-alt text-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Glossy Line Effect --}}
                        <div class="absolute top-0 -inset-full h-full w-1/2 z-50 block transform -skew-x-12 bg-gradient-to-r from-transparent via-white/10 to-transparent opacity-40 group-hover:animate-shine"></div>
                    </a>
                </div>
                @empty
                <div class="col-span-full text-center py-32 bg-white/5 rounded-[3rem] border border-dashed border-white/10">
                    <div class="mb-6 inline-flex w-24 h-24 bg-white/5 rounded-full items-center justify-center">
                        <i class="fas fa-layer-group text-slate-700 text-5xl"></i>
                    </div>
                    <p class="text-slate-500 font-medium italic tracking-wide">Database visual saat ini belum berisi dokumentasi.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Social Media Footer Section --}}
    <section class="py-24 relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: url('https://www.transparenttextures.com/patterns/carbon-fibre.png');"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-3xl mx-auto p-12 rounded-[3rem] bg-white/5 border border-white/10 backdrop-blur-sm">
                <h2 class="text-3xl font-black text-white mb-4 tracking-tight uppercase">Update Harian</h2>
                <p class="text-slate-400 mb-10 font-medium">Ikuti ekosistem digital kami untuk melihat keceriaan harian siswa secara real-time.</p>

                <div class="flex justify-center gap-8">
                    <a href="#" class="group relative p-5 bg-white/5 rounded-2xl border border-white/10 hover:border-pink-500/50 transition-all">
                        <i class="fab fa-instagram text-3xl text-slate-400 group-hover:text-pink-500 transition-colors"></i>
                    </a>
                    <a href="#" class="group relative p-5 bg-white/5 rounded-2xl border border-white/10 hover:border-blue-500/50 transition-all">
                        <i class="fab fa-facebook text-3xl text-slate-400 group-hover:text-blue-500 transition-colors"></i>
                    </a>
                    <a href="#" class="group relative p-5 bg-white/5 rounded-2xl border border-white/10 hover:border-red-500/50 transition-all">
                        <i class="fab fa-youtube text-3xl text-slate-400 group-hover:text-red-500 transition-colors"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Tambahkan custom style untuk animasi shine --}}
<style>
    @keyframes shine {
        100% {
            left: 125%;
        }
    }
    .animate-shine {
        animation: shine 0.8s;
    }
</style>

{{-- Load Fancybox JS --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery-kegiatan']", {
        infinite: true,
        transitionEffect: "slide",
        Image: {
            zoom: true,
        },
        Toolbar: {
            display: {
                left: ["infobar"],
                middle: [],
                right: ["iterateZoom", "slideshow", "fullScreen", "download", "thumbs", "close"],
            },
        },
    });
</script>
@endsection
