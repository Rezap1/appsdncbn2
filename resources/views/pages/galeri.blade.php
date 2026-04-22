@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Galeri Kegiatan</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Dokumentasi momen-momen berharga dan keceriaan siswa-siswi SDN Cibinong 2 dalam berbagai aktivitas."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm shadow-md">Semua</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                // Array foto menggunakan file yang sudah kamu miliki di folder public/img/
                $gallery = [
                    ['img' => '1.jpg', 'title' => 'Kegiatan Belajar Mengajar', 'category' => 'KBM'],
                    ['img' => '2.jpg', 'title' => 'Persiapan Lomba Siswa', 'category' => 'Lomba'],
                    ['img' => 'ks.jpg', 'title' => 'Rapat Dewan Guru', 'category' => 'Kegiatan'],
                    ['img' => '1.jpg', 'title' => 'Suasana Kelas Kreatif', 'category' => 'KBM'],
                    ['img' => '2.jpg', 'title' => 'Latihan Olahraga Pagi', 'category' => 'Ekstrakurikuler'],
                    ['img' => 'ks.jpg', 'title' => 'Penyambutan Tamu Sekolah', 'category' => 'Kegiatan'],
                ];
            @endphp

            @foreach($gallery as $item)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg h-80 cursor-pointer">
                <img src="{{ asset('img/' . $item['img']) }}"
                     alt="{{ $item['title'] }}"
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                <div class="absolute inset-0 bg-gradient-to-t from-[#002147]/90 via-[#002147]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                    <span class="text-blue-400 text-xs font-bold uppercase tracking-widest mb-2">{{ $item['category'] }}</span>
                    <h3 class="text-white font-bold text-lg leading-tight">{{ $item['title'] }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 border-t">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-[#002147] mb-4">Lihat Lebih Banyak di Sosial Media</h2>
        <p class="text-gray-500 mb-8">Ikuti akun resmi kami untuk update kegiatan harian siswa.</p>
        <div class="flex justify-center gap-6">
            <a href="#" class="text-3xl text-pink-600 hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-3xl text-blue-700 hover:scale-110 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-3xl text-red-600 hover:scale-110 transition"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</section>
@endsection
