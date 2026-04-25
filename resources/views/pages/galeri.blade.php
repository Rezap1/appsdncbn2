@extends('layouts.app')

@section('content')
{{-- 1. Load Fancybox CSS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Galeri Kegiatan</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Dokumentasi momen-momen berharga dan keceriaan siswa-siswi SDN Cibinong 2 dalam berbagai aktivitas."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm shadow-md">Semua Foto</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($galeries as $item)
            {{--
                SINKRONISASI: Menggunakan $item->gambar sesuai kolom di database kamu.
                Folder diarahkan ke public/uploads/galeri/
            --}}
            <a href="{{ asset('uploads/galeri/' . $item->gambar) }}"
               data-fancybox="gallery-kegiatan"
               data-caption="{{ $item->judul }}"
               class="group relative overflow-hidden rounded-2xl shadow-lg h-80 cursor-zoom-in block">

                <img src="{{ asset('uploads/galeri/' . $item->gambar) }}"
                     alt="{{ $item->judul }}"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     onerror="this.src='https://via.placeholder.com/800x600?text=Foto+Tidak+Ditemukan'">

                {{-- Overlay dengan efek muncul saat hover --}}
                <div class="absolute inset-0 bg-gradient-to-t from-[#002147]/90 via-[#002147]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-blue-400 text-xs font-bold uppercase tracking-widest mb-2 block">
                                Foto Kegiatan
                            </span>
                            <h3 class="text-white font-bold text-lg leading-tight">{{ $item->judul }}</h3>
                        </div>
                        {{-- Icon Kaca Pembesar --}}
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                </div>
            </a>
            @empty
            {{-- Bagian ini muncul jika database kosong atau kolom salah panggil --}}
            <div class="col-span-full text-center py-20">
                <div class="mb-4">
                    <i class="fas fa-images text-gray-200 text-6xl"></i>
                </div>
                <p class="text-gray-400 italic">Belum ada dokumentasi foto yang diunggah.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 border-t">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-[#002147] mb-4">Lihat Lebih Banyak di Sosial Media</h2>
        <p class="text-gray-500 mb-8">Ikuti akun resmi kami untuk update kegiatan harian siswa.</p>
        <div class="flex justify-center gap-6">
            <a href="#" class="text-3xl text-pink-600 hover:scale-125 transition-transform duration-300"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-3xl text-blue-700 hover:scale-125 transition-transform duration-300"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-3xl text-red-600 hover:scale-125 transition-transform duration-300"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</section>

{{-- 3. Load Fancybox JS --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery-kegiatan']", {
        infinite: true,
        transitionEffect: "slide"
    });
</script>
@endsection
