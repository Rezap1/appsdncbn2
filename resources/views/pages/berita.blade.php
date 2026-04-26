@extends('layouts.app')

@section('content')
<div class="bg-[#001529] min-h-screen">
    {{-- Header Berita --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        {{-- Efek Cahaya Latar --}}
        <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-block px-4 py-1.5 mb-6 bg-blue-500/10 backdrop-blur-md border border-blue-500/20 rounded-full">
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">Latest Updates</p>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter">
                Berita & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Pengumuman</span>
            </h1>
            <p class="text-slate-400 max-w-2xl mx-auto leading-relaxed text-lg">
                Dapatkan informasi terbaru mengenai kegiatan, prestasi, dan pengumuman resmi dari ekosistem digital SDN Cibinong 2.
            </p>
        </div>
    </section>

    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">

                {{-- Main Content: List Berita --}}
                <div class="lg:w-2/3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        @forelse($berita as $item)
                        <article class="group relative bg-white/5 rounded-[2.5rem] overflow-hidden border border-white/10 hover:border-blue-500/30 transition-all duration-500 shadow-2xl flex flex-col h-full">

                            {{-- Image Wrapper --}}
                            <div class="relative overflow-hidden h-56">
                                <img src="{{ asset($item->gambar) }}"
                                     alt="{{ $item->judul }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     onerror="this.src='https://via.placeholder.com/800x600?text=Berita+Tanpa+Gambar'">

                                <div class="absolute top-6 left-6">
                                    <span class="bg-blue-600 text-white text-[9px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest shadow-xl backdrop-blur-md border border-white/20">
                                        {{ $item->kategori ?? 'Berita' }}
                                    </span>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-8 flex flex-col flex-grow">
                                <div class="flex items-center text-blue-400 text-[10px] font-black uppercase tracking-widest mb-4">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    {{ $item->created_at->format('d M Y') }}
                                </div>

                                <h3 class="text-xl font-bold text-white mb-4 leading-tight group-hover:text-blue-400 transition-colors">
                                    <a href="#">{{ $item->judul }}</a>
                                </h3>

                                <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3 font-medium">
                                    {{ Str::limit(strip_tags($item->isi), 120) }}
                                </p>

                                <div class="mt-auto pt-6 border-t border-white/5">
                                    <a href="#" class="text-white font-black text-[10px] uppercase tracking-[0.2em] flex items-center group/btn hover:text-blue-400 transition-all">
                                        Selengkapnya
                                        <i class="fas fa-chevron-right ml-3 text-[8px] transform group-hover/btn:translate-x-2 transition-transform"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @empty
                        <div class="col-span-full text-center py-20 bg-white/5 rounded-[3rem] border border-dashed border-white/10">
                            <i class="fas fa-newspaper text-slate-700 text-5xl mb-4 block"></i>
                            <p class="text-slate-500 italic">Belum ada berita yang dipublikasikan dalam arsip.</p>
                        </div>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-16 flex justify-center">
                        {{-- {{ $berita->links() }} --}}
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside class="lg:w-1/3 space-y-10">

                    {{-- Search Box --}}
                    <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10 relative overflow-hidden group">
                        <div class="absolute -right-4 -top-4 w-20 h-20 bg-blue-600/10 rounded-full blur-2xl group-hover:bg-blue-600/20 transition-all"></div>
                        <h4 class="font-black text-white text-xs uppercase tracking-[0.3em] mb-6">Cari Berita</h4>
                        <div class="relative">
                            <input type="text" placeholder="Kata kunci..."
                                class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 focus:ring-0 text-white text-sm placeholder:text-slate-600 transition-all">
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 hover:text-blue-400 transition-colors">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Categories --}}
                    <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10">
                        <h4 class="font-black text-white text-xs uppercase tracking-[0.3em] mb-8">Kategori</h4>
                        <ul class="space-y-4">
                            <li class="group cursor-pointer">
                                <div class="flex justify-between items-center p-4 bg-[#001529]/50 rounded-2xl border border-white/5 group-hover:border-blue-500/30 transition-all">
                                    <span class="text-sm text-slate-400 group-hover:text-white font-bold transition-colors">Kegiatan Sekolah</span>
                                    <span class="bg-blue-500/10 text-blue-400 px-3 py-1 rounded-lg text-[8px] font-black uppercase">New</span>
                                </div>
                            </li>
                            <li class="group cursor-pointer">
                                <div class="flex justify-between items-center p-4 bg-[#001529]/50 rounded-2xl border border-white/5 group-hover:border-blue-500/30 transition-all">
                                    <span class="text-sm text-slate-400 group-hover:text-white font-bold transition-colors">Akademik</span>
                                    <span class="bg-cyan-500/10 text-cyan-400 px-3 py-1 rounded-lg text-[8px] font-black uppercase">Hot</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Popular Posts --}}
                    <div class="bg-white/5 p-8 rounded-[2.5rem] border border-white/10">
                        <h4 class="font-black text-white text-xs uppercase tracking-[0.3em] mb-8">Paling Populer</h4>
                        <div class="space-y-8">
                            @foreach($berita->take(2) as $populer)
                            <div class="flex gap-5 group cursor-pointer">
                                <div class="relative shrink-0 w-20 h-20 rounded-2xl overflow-hidden border border-white/10">
                                    <img src="{{ asset($populer->gambar) }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                         onerror="this.src='https://via.placeholder.com/150?text=News'">
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h5 class="text-sm font-bold text-slate-200 group-hover:text-blue-400 transition-colors leading-snug mb-2">
                                        {{ Str::limit($populer->judul, 45) }}
                                    </h5>
                                    <p class="text-[9px] text-slate-500 font-black uppercase tracking-widest italic">{{ $populer->created_at->format('d M Y') }}</p>
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
