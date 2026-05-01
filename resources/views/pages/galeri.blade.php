@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<div class="bg-[#020617] min-h-screen text-white overflow-hidden">

    {{-- HEADER --}}
    <section class="relative py-24 md:py-28 border-b border-white/5 overflow-hidden">
        {{-- Ambient Background --}}
        <div class="absolute top-0 right-0 w-[550px] h-[550px] bg-cyan-500/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-cyan-500/10 border border-cyan-400/20 mb-6 backdrop-blur-xl">
                <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></div>
                <span class="text-cyan-300 text-[10px] font-black uppercase tracking-[0.35em]">
                    Visual Archive
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight mb-6">
                Galeri
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-400">
                    Kegiatan
                </span>
            </h1>

            <p class="max-w-3xl mx-auto text-slate-400 text-lg leading-relaxed">
                Dokumentasi aktivitas pembelajaran, kegiatan sekolah, dan momen berharga
                siswa-siswi SDN Cibinong 2 dalam ekosistem pendidikan modern.
            </p>
        </div>
    </section>


    {{-- GRID GALLERY --}}
    <section class="py-20 md:py-24 relative">
        <div class="container mx-auto px-4">

            {{-- Filter --}}
            <div class="flex justify-center mb-16">
                <button class="px-8 py-3 rounded-2xl bg-cyan-500 text-slate-950 font-black text-[10px] uppercase tracking-[0.3em] shadow-xl shadow-cyan-500/20 hover:scale-105 active:scale-95 transition-all">
                    Semua Dokumentasi
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($galeries as $item)
                <div class="group">
                    <a href="{{ asset('uploads/galeri/' . $item->gambar) }}"
                       data-fancybox="gallery-kegiatan"
                       data-caption="{{ $item->judul }}"
                       class="relative block overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/50 backdrop-blur-xl shadow-2xl h-[400px]">

                        {{-- Image --}}
                        <img src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                             alt="{{ $item->judul }}"
                             class="w-full h-full object-cover transition duration-1000 group-hover:scale-110"
                             onerror="this.src='https://via.placeholder.com/800x600?text=Foto+Tidak+Ditemukan'">

                        {{-- Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-[#020617] via-[#020617]/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        {{-- Content --}}
                        <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-8 group-hover:translate-y-0 transition duration-500">
                            <span class="text-cyan-300 text-[10px] font-black uppercase tracking-[0.3em] block mb-3">
                                School Activity
                            </span>

                            <div class="flex justify-between items-end gap-4">
                                <h3 class="text-xl font-bold text-white leading-tight max-w-[80%]">
                                    {{ $item->judul }}
                                </h3>

                                <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 border border-cyan-400/20 flex items-center justify-center text-cyan-300 backdrop-blur-xl">
                                    <i class="fas fa-expand-alt text-sm"></i>
                                </div>
                            </div>
                        </div>

                        {{-- Shine Effect --}}
                        <div class="absolute top-0 -left-[120%] w-1/2 h-full bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12 group-hover:animate-shine"></div>

                    </a>
                </div>
                @empty
                <div class="col-span-full text-center py-28 rounded-[2.5rem] border border-dashed border-white/10 bg-white/5">
                    <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-white/5 flex items-center justify-center">
                        <i class="fas fa-images text-4xl text-slate-600"></i>
                    </div>
                    <p class="text-slate-500 italic font-medium">
                        Belum ada dokumentasi galeri yang tersedia.
                    </p>
                </div>
                @endforelse

            </div>
        </div>
    </section>


    {{-- SOCIAL CTA --}}
    <section class="py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto rounded-[2.5rem] border border-white/10 bg-white/5 backdrop-blur-xl p-12 text-center shadow-2xl">

                <h2 class="text-3xl md:text-4xl font-black mb-4">
                    Ikuti Aktivitas Kami
                </h2>

                <p class="text-slate-400 max-w-2xl mx-auto mb-10">
                    Dapatkan update kegiatan terbaru, dokumentasi acara sekolah,
                    dan aktivitas siswa melalui media sosial resmi SDN Cibinong 2.
                </p>

                <div class="flex justify-center gap-5">
                    <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center hover:border-pink-500/50 hover:text-pink-400 transition-all">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>

                    <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center hover:border-blue-500/50 hover:text-blue-400 transition-all">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>

                    <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center hover:border-red-500/50 hover:text-red-400 transition-all">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>


<style>
@keyframes shine {
    100% {
        left: 125%;
    }
}
.animate-shine {
    animation: shine 0.9s ease;
}
</style>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery-kegiatan']", {
        infinite: true,
        dragToClose: true,
        animated: true,
        showClass: "fancybox-fadeIn",
        hideClass: "fancybox-fadeOut",
        Image: {
            zoom: true,
        },
        Toolbar: {
            display: {
                left: ["infobar"],
                middle: [],
                right: ["iterateZoom", "slideshow", "fullScreen", "thumbs", "close"],
            },
        },
    });
</script>
@endsection
