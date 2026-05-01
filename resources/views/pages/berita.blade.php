@extends('layouts.app')

@section('content')
<div class="bg-[#020617] min-h-screen text-white overflow-hidden">

    {{-- HEADER --}}
    <section class="relative py-24 md:py-28 border-b border-white/5 overflow-hidden">
        <div class="absolute top-0 right-0 w-[550px] h-[550px] bg-cyan-500/10 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-cyan-500/10 border border-cyan-400/20 mb-6 backdrop-blur-xl">
                <div class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></div>
                <span class="text-cyan-300 text-[10px] font-black uppercase tracking-[0.35em]">
                    Latest Updates
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight mb-6">
                Berita &
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-400">
                    Pengumuman
                </span>
            </h1>

            <p class="max-w-3xl mx-auto text-slate-400 text-lg leading-relaxed">
                Informasi terbaru mengenai kegiatan, prestasi, agenda sekolah,
                dan pengumuman resmi dari SDN Cibinong 2.
            </p>
        </div>
    </section>


    {{-- CONTENT --}}
    <section class="py-20 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-14">

                {{-- MAIN NEWS --}}
                <div class="lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        @forelse($berita as $item)
                        <article class="group bg-slate-900/50 backdrop-blur-xl border border-white/10 rounded-[2rem] overflow-hidden shadow-2xl hover:border-cyan-400/20 transition-all duration-500 flex flex-col">

                            {{-- Image --}}
                            <div class="relative overflow-hidden h-56">
                                <img src="{{ asset($item->gambar) }}"
                                     alt="{{ $item->judul }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                                     onerror="this.src='https://via.placeholder.com/800x600?text=No+Image'">

                                <div class="absolute top-5 left-5">
                                    <span class="px-4 py-1.5 rounded-full bg-cyan-500 text-slate-950 text-[9px] font-black uppercase tracking-[0.25em] shadow-lg">
                                        {{ $item->kategori ?? 'Berita' }}
                                    </span>
                                </div>
                            </div>

                            {{-- Body --}}
                            <div class="p-7 flex flex-col flex-grow">

                                <div class="flex items-center gap-2 text-cyan-400 text-[10px] font-black uppercase tracking-[0.25em] mb-4">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ $item->created_at->format('d M Y') }}
                                </div>

                                <h3 class="text-xl font-bold text-white leading-tight mb-4 group-hover:text-cyan-300 transition-colors">
                                    {{ $item->judul }}
                                </h3>

                                <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                                    {{ Str::limit(strip_tags($item->isi), 120) }}
                                </p>

                                <div class="mt-auto pt-5 border-t border-white/5">
                                    <a href="#"
                                       class="inline-flex items-center gap-3 text-cyan-300 font-black text-[10px] uppercase tracking-[0.25em] hover:gap-4 transition-all">
                                        Baca Selengkapnya
                                        <i class="fas fa-arrow-right text-[9px]"></i>
                                    </a>
                                </div>
                            </div>

                        </article>
                        @empty
                        <div class="col-span-full text-center py-28 rounded-[2.5rem] border border-dashed border-white/10 bg-white/5">
                            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white/5 flex items-center justify-center">
                                <i class="fas fa-newspaper text-4xl text-slate-600"></i>
                            </div>
                            <p class="text-slate-500 italic">
                                Belum ada berita yang dipublikasikan.
                            </p>
                        </div>
                        @endforelse

                    </div>

                    {{-- Pagination --}}
                    <div class="mt-16 flex justify-center">
                        {{-- {{ $berita->links() }} --}}
                    </div>
                </div>


                {{-- SIDEBAR --}}
                <aside class="lg:w-1/3 space-y-8">

                    {{-- SEARCH --}}
                    <div class="bg-slate-900/50 backdrop-blur-xl border border-white/10 rounded-[2rem] p-7 shadow-xl">
                        <h4 class="text-xs font-black uppercase tracking-[0.3em] text-white mb-6">
                            Cari Berita
                        </h4>

                        <div class="relative">
                            <input type="text"
                                   placeholder="Cari artikel..."
                                   class="w-full bg-[#020617] border border-white/10 rounded-2xl px-5 py-4 text-sm text-white placeholder:text-slate-600 focus:border-cyan-400 outline-none transition">

                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 hover:text-cyan-400 transition">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>


                    {{-- CATEGORY --}}
                    <div class="bg-slate-900/50 backdrop-blur-xl border border-white/10 rounded-[2rem] p-7 shadow-xl">
                        <h4 class="text-xs font-black uppercase tracking-[0.3em] text-white mb-6">
                            Kategori
                        </h4>

                        <div class="space-y-3">
                            <div class="flex justify-between items-center p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-cyan-400/20 transition cursor-pointer">
                                <span class="text-sm font-semibold text-slate-300">Kegiatan Sekolah</span>
                                <span class="text-[9px] px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-300 font-black uppercase">New</span>
                            </div>

                            <div class="flex justify-between items-center p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-cyan-400/20 transition cursor-pointer">
                                <span class="text-sm font-semibold text-slate-300">Akademik</span>
                                <span class="text-[9px] px-3 py-1 rounded-full bg-blue-500/10 text-blue-300 font-black uppercase">Hot</span>
                            </div>
                        </div>
                    </div>


                    {{-- POPULAR POSTS --}}
                    <div class="bg-slate-900/50 backdrop-blur-xl border border-white/10 rounded-[2rem] p-7 shadow-xl">
                        <h4 class="text-xs font-black uppercase tracking-[0.3em] text-white mb-6">
                            Populer
                        </h4>

                        <div class="space-y-6">
                            @foreach($berita->take(3) as $populer)
                            <div class="flex gap-4 group cursor-pointer">

                                <div class="w-20 h-20 rounded-2xl overflow-hidden border border-white/10 shrink-0">
                                    <img src="{{ asset($populer->gambar) }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                         onerror="this.src='https://via.placeholder.com/150?text=News'">
                                </div>

                                <div class="flex flex-col justify-center">
                                    <h5 class="text-sm font-bold text-slate-200 leading-snug group-hover:text-cyan-300 transition">
                                        {{ Str::limit($populer->judul, 50) }}
                                    </h5>

                                    <p class="text-[9px] mt-2 text-slate-500 font-black uppercase tracking-[0.2em]">
                                        {{ $populer->created_at->format('d M Y') }}
                                    </p>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

</div>
@endsection
