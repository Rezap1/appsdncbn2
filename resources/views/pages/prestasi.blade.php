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

            @php
                $achievements = [
                    // 4 Data Awal
                    ['title' => 'JUARA 1 LOMBA TARI', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Tim SDN Cibinong 2 berhasil meraih peringkat pertama dalam kompetisi tari tradisional.'],
                    ['title' => 'JUARA 1 DACIL PUTRI', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian luar biasa siswa dalam Perlombaan Dakwah Cilik Putri.'],
                    ['title' => 'JUARA 1 ATLETIK KIDS PUTRI', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian Luar Biasa Siswa Dalam Perlombaan Atletik Kids Putri.'],
                    ['title' => 'JUARA 3 LOMBA MTQ PUTRI', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian Luar Biasa Siswa Dalam Perlombaan MTQ Putri.'],

                    // Tambahan 10 Data Baru (Total Jadi 14)
                    ['title' => 'JUARA 2 LOMBA KALIGRAFI PUTRA', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian Luar Biasa Siswa Dalam Perlombaan Kaligrafi Putra.'],
                    ['title' => 'JUARA 3 PANTONIM', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian Luar Biasa Siswa Dalam Lomba Pantonim.'],
                    ['title' => 'JUARA 3 MENYANYI TUNGGAL', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Penampilan Memukau Siswa Dalam perlombaan Menyanyi Tunggal.'],
                    ['title' => 'JUARA 2 BADMINTON PUTRI', 'level' => 'Antar Sekolah Dasar', 'date' => 'O2SN 2026', 'desc' => 'Pencapaian Luar Biasa Siswa Dalam Perlombaan Badminton Putri.'],
                    ['title' => 'FOTBAR SELURUH SISWA DAN GURU', 'level' => 'SDN CIBINONG 2', 'date' => 'o2SN 2026', 'desc' => 'Foto Bersama Seluruh Siswa Dan Guru SDN CIBINONG 2.'],
                    ['title' => 'JUARA 2 TENNIS MEJA PUTRA', 'level' => 'Antar Sekolah', 'date' => 'O2SN 2026', 'desc' => 'Ketangkasan dalam bidang olahraga tenis meja putra.'],
                    ['title' => 'JUARA 1 LOMBA PUISI', 'level' => 'Antar Sekolah Dasar', 'date' => 'Agustus 2026', 'desc' => 'Penghayatan mendalam dalam pembacaan karya sastra puisi.'],
                    ['title' => 'JUARA 3 LOMBA KALIGRAFI', 'level' => 'Tingkat Kecamatan', 'date' => 'September 2026', 'desc' => 'Keindahan seni menulis huruf Arab dalam ajang kreativitas.'],
                    ['title' => 'JUARA UMUM PRAMUKA', 'level' => 'Kwartir Ranting', 'date' => 'Oktober 2026', 'desc' => 'Kedisiplinan dan kekompakan tim penggalang SDN Cibinong 2.'],
                    ['title' => 'JUARA 2 LOMBA ANYAMAN', 'level' => 'Antar Sekolah Dasar', 'date' => 'November 2026', 'desc' => 'Melestarikan budaya melalui kerajinan tangan tradisional.'],
                ];
            @endphp

            @foreach($achievements as $index => $item)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full">

                <a href="{{ asset('img/p' . ($index + 1) . '.jpg') }}"
                   data-fancybox="gallery"
                   data-caption="{{ $item['title'] }} - {{ $item['level'] }}"
                   class="relative group overflow-hidden block cursor-zoom-in">

                    <img src="{{ asset('img/p' . ($index + 1) . '.jpg') }}"
                         alt="{{ $item['title'] }}"
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700"
                         onerror="this.src='https://via.placeholder.com/600x400?text=Foto+p{{ $index + 1 }}.jpg'">

                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-3xl"></i>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">
                            {{ $item['level'] }}
                        </span>
                    </div>
                </a>

                <div class="p-6 flex flex-col flex-grow">
                    <p class="text-blue-500 text-xs font-bold mb-2 uppercase">{{ $item['date'] }}</p>
                    <h3 class="text-xl font-bold text-[#002147] mb-3 leading-tight">{{ $item['title'] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        {{ $item['desc'] }}
                    </p>

                    <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                        <span class="text-[#002147] font-bold text-xs uppercase tracking-tighter">SDN Cibinong 2</span>
                        <i class="fas fa-trophy text-yellow-500"></i>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Script Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        infinite: true
    });
</script>

<section class="py-20 bg-[#002147] text-white">
    <div class="container mx-auto px-4 text-center">
        <i class="fas fa-award text-5xl text-blue-400 mb-6"></i>
        <h2 class="text-3xl font-bold mb-4">"Prestasi adalah hasil dari persiapan, kerja keras, dan belajar dari kegagalan."</h2>
        <p class="text-blue-200 opacity-80">— Semangat Juara SDN Cibinong 2</p>
    </div>
</section>
@endsection
