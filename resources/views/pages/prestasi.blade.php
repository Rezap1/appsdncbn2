@extends('layouts.app')

@section('content')
{{-- Load Fancybox CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Prestasi Sekolah</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Apresiasi atas dedikasi, kerja keras, dan bakat luar biasa siswa-siswi SDN Cibinong 2 di berbagai bidang."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm shadow-md">Semua Prestasi</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @forelse($prestasi as $item)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full">

                {{-- SINKRONISASI: Menambahkan path folder secara manual karena database hanya berisi nama file --}}
                <a href="{{ asset('uploads/prestasi/' . $item->gambar) }}"
                   data-fancybox="gallery"
                   data-caption="{{ $item->judul }} - {{ $item->kategori }}"
                   class="relative group overflow-hidden block cursor-zoom-in">

                    {{-- PERBAIKAN DI SINI: img src juga harus ditambahkan path foldernya --}}
                    <img src="{{ asset('uploads/prestasi/' . $item->gambar) }}"
                         alt="{{ $item->judul }}"
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Foto+Tidak+Ditemukan'">

                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">
                            {{ $item->kategori ?? 'Umum' }}
                        </span>
                    </div>
                </a>

                <div class="p-6 flex flex-col flex-grow">
                    <p class="text-blue-500 text-xs font-bold mb-2 uppercase">
                        {{ \Carbon\Carbon::parse($item->tanggal_prestasi)->format('d M Y') }}
                    </p>

                    <h3 class="text-xl font-bold text-[#002147] mb-3 leading-tight">{{ $item->judul }}</h3>

                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                    </p>

                    <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                        <span class="text-[#002147] font-bold text-xs uppercase tracking-tighter">SDN Cibinong 2</span>
                        <i class="fas fa-trophy text-yellow-500"></i>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20">
                <div class="mb-4">
                    <i class="fas fa-folder-open text-gray-200 text-6xl"></i>
                </div>
                <p class="text-gray-400 italic">Belum ada data prestasi yang tercatat.</p>
            </div>
            @endforelse

        </div>
    </div>
</section>

<section class="py-20 bg-[#002147] text-white">
    <div class="container mx-auto px-4 text-center">
        <i class="fas fa award text-5xl text-blue-400 mb-6"></i>
        <h2 class="text-3xl font-bold mb-4">"Prestasi adalah hasil dari persiapan, kerja keras, dan belajar dari kegagalan."</h2>
        <p class="text-blue-200 opacity-80">— Semangat Juara SDN Cibinong 2</p>
    </div>
</section>

{{-- Script Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        infinite: true
    });
</script>
@endsection
