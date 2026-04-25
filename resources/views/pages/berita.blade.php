@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Berita & Pengumuman</h1>
        <p class="text-gray-500 max-w-2xl mx-auto">Dapatkan informasi terbaru mengenai kegiatan, prestasi, dan pengumuman resmi dari SDN Cibinong 2.</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12">

            <div class="lg:w-2/3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse($berita as $item)
                    <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                        <div class="relative overflow-hidden h-48">
                            {{--
                                PERBAIKAN:
                                1. Menggunakan $item->gambar (sesuai database).
                                2. Folder diarahkan ke uploads/berita/ (sesuai VS Code kamu).
                            --}}
                            <img src="{{ asset($item->gambar) }}"
                                 alt="{{ $item->judul }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                 onerror="this.src='https://via.placeholder.com/800x600?text=Berita+Tanpa+Gambar'">

                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">
                                    {{ $item->kategori ?? 'Berita' }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-gray-400 text-xs mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                {{ $item->created_at->format('d M Y') }}
                            </div>
                            <h3 class="text-xl font-bold text-[#002147] mb-3 group-hover:text-blue-600 transition-colors leading-tight">
                                <a href="#">{{ $item->judul }}</a>
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-3">
                                {{ Str::limit(strip_tags($item->isi), 120) }}
                            </p>
                            <a href="#" class="text-blue-600 font-bold text-xs uppercase tracking-wider flex items-center hover:gap-2 transition-all">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </article>
                    @empty
                    <div class="col-span-2 text-center py-10">
                        <p class="text-gray-400">Belum ada berita yang dipublikasikan.</p>
                    </div>
                    @endforelse
                </div>

                <div class="mt-12 flex justify-center">
                    {{-- Aktifkan jika menggunakan pagination di controller --}}
                    {{-- {{ $berita->links() }} --}}
                </div>
            </div>

            <aside class="lg:w-1/3 space-y-8">
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <h4 class="font-bold text-[#002147] mb-4">Cari Berita</h4>
                    <div class="relative">
                        <input type="text" placeholder="Masukkan kata kunci..." class="w-full px-4 py-3 rounded-xl border-none focus:ring-2 focus:ring-blue-600 text-sm shadow-sm">
                        <button class="absolute right-3 top-3 text-gray-400"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm">
                    <h4 class="font-bold text-[#002147] mb-6">Kategori</h4>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center text-sm text-gray-600 hover:text-blue-600 cursor-pointer transition">
                            <span>Kegiatan Sekolah</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">New</span>
                        </li>
                        <li class="flex justify-between items-center text-sm text-gray-600 hover:text-blue-600 cursor-pointer transition">
                            <span>Akademik</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">Hot</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm">
                    <h4 class="font-bold text-[#002147] mb-6">Paling Banyak Dibaca</h4>
                    <div class="space-y-6">
                        @foreach($berita->take(2) as $populer)
                        <div class="flex gap-4 group cursor-pointer">
                            {{-- PERBAIKAN: Samakan penggunaan kolom $populer->gambar --}}
                            <img src="{{ asset($populer->gambar) }}"
                                 class="w-16 h-16 rounded-lg object-cover"
                                 onerror="this.src='https://via.placeholder.com/150?text=News'">
                            <div>
                                <h5 class="text-sm font-bold text-[#002147] group-hover:text-blue-600 transition-colors leading-snug">
                                    {{ $populer->judul }}
                                </h5>
                                <p class="text-[10px] text-gray-400 mt-1">{{ $populer->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
