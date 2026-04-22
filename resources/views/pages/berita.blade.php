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
                    @php
                        $news = [
                            [
                                'title' => 'SDN Cibinong 2 Gelar Workshop Literasi Digital',
                                'date' => '20 Mei 2026',
                                'category' => 'Kegiatan',
                                'img' => '1.jpg',
                                'excerpt' => 'Meningkatkan kemampuan siswa dalam memilah informasi di era digital melalui pelatihan interaktif.'
                            ],
                            [
                                'title' => 'Kunjungan Edukasi ke Museum Nasional',
                                'date' => '15 Mei 2026',
                                'category' => 'Akademik',
                                'img' => '2.jpg',
                                'excerpt' => 'Siswa kelas 4 dan 5 mempelajari sejarah kebudayaan Indonesia secara langsung di lapangan.'
                            ],
                            [
                                'title' => 'Pendaftaran Siswa Baru (PPDB) 2026 Dibuka',
                                'date' => '10 Mei 2026',
                                'category' => 'Pengumuman',
                                'img' => 'ks.jpg',
                                'excerpt' => 'Informasi lengkap mengenai jadwal, persyaratan, dan alur pendaftaran siswa baru tahun ajaran 2026/2027.'
                            ],
                            [
                                'title' => 'Seminar Pendidikan Karakter bagi Orang Tua',
                                'date' => '05 Mei 2026',
                                'category' => 'Kegiatan',
                                'img' => '1.jpg',
                                'excerpt' => 'Membangun sinergi antara sekolah dan rumah dalam membentuk kepribadian unggul anak.'
                            ]
                        ];
                    @endphp

                    @foreach($news as $item)
                    <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                        <div class="relative overflow-hidden h-48">
                            <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase">
                                    {{ $item['category'] }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-gray-400 text-xs mb-3">
                                <i class="far fa-calendar-alt mr-2"></i>
                                {{ $item['date'] }}
                            </div>
                            <h3 class="text-xl font-bold text-[#002147] mb-3 group-hover:text-blue-600 transition-colors leading-tight">
                                <a href="#">{{ $item['title'] }}</a>
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-4">
                                {{ $item['excerpt'] }}
                            </p>
                            <a href="#" class="text-blue-600 font-bold text-xs uppercase tracking-wider flex items-center hover:gap-2 transition-all">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>

                <div class="mt-12 flex justify-center gap-2">
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition shadow-sm">1</button>
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition shadow-sm">2</button>
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition shadow-sm"><i class="fas fa-chevron-right"></i></button>
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
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">12</span>
                        </li>
                        <li class="flex justify-between items-center text-sm text-gray-600 hover:text-blue-600 cursor-pointer transition">
                            <span>Informasi PPDB</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">5</span>
                        </li>
                        <li class="flex justify-between items-center text-sm text-gray-600 hover:text-blue-600 cursor-pointer transition">
                            <span>Akademik</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">8</span>
                        </li>
                        <li class="flex justify-between items-center text-sm text-gray-600 hover:text-blue-600 cursor-pointer transition">
                            <span>Prestasi Siswa</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-[10px] font-bold">15</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white border border-gray-100 p-6 rounded-2xl shadow-sm">
                    <h4 class="font-bold text-[#002147] mb-6">Paling Banyak Dibaca</h4>
                    <div class="space-y-6">
                        <div class="flex gap-4 group cursor-pointer">
                            <img src="{{ asset('img/.jpg') }}" class="w-16 h-16 rounded-lg object-cover">
                            <div>
                                <h5 class="text-sm font-bold text-[#002147] group-hover:text-blue-600 transition-colors leading-snug">Jadwal Ujian Semester Genap 2026</h5>
                                <p class="text-[10px] text-gray-400 mt-1">12 April 2026</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group cursor-pointer">
                            <img src="{{ asset('img/.jpg') }}" class="w-16 h-16 rounded-lg object-cover">
                            <div>
                                <h5 class="text-sm font-bold text-[#002147] group-hover:text-blue-600 transition-colors leading-snug">Rapat Persiapan Acara Perpisahan Kelas 6</h5>
                                <p class="text-[10px] text-gray-400 mt-1">08 April 2026</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>
@endsection
