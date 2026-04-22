@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Prestasi Sekolah</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Apresiasi atas dedikasi, kerja keras, dan bakat luar biasa siswa-siswi SDN Cibinong 2 di berbagai bidang."</p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold text-sm">Semua</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @php
                $achievements = [
                    [
                        'title' => 'Juara 1 Lomba Cerdas Cermat',
                        'level' => 'Tingkat Kabupaten',
                        'date' => 'Maret 2026',
                        'img' => '1.jpg',
                        'desc' => 'Tim SDN Cibinong 2 berhasil meraih peringkat pertama dalam kompetisi akademik tahunan.'
                    ],
                    [
                        'title' => 'Medali Emas Olimpiade Matematika',
                        'level' => 'Tingkat Provinsi',
                        'date' => 'Februari 2026',
                        'img' => '2.jpg',
                        'desc' => 'Pencapaian luar biasa siswa kelas 5 dalam ajang bergengsi sains dan matematika.'
                    ],
                    [
                        'title' => 'Juara Utama Lomba Mewarnai',
                        'level' => 'Tingkat Kecamatan',
                        'date' => 'Januari 2026',
                        'img' => '3.jpg',
                        'desc' => 'Mengembangkan kreativitas siswa melalui seni visual dan estetika warna.'
                    ],
                    [
                        'title' => 'Juara 2 Turnamen Futsal Pelajar',
                        'level' => 'Tingkat Kota',
                        'date' => 'Desember 2025',
                        'img' => 'ks.jpg',
                        'desc' => 'Semangat pantang menyerah tim futsal sekolah dalam ajang persahabatan antar SD.'
                    ]
                ];
            @endphp

            @foreach($achievements as $item)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full">
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest shadow-lg">
                            {{ $item['level'] }}
                        </span>
                    </div>
                </div>

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

<section class="py-20 bg-[#002147] text-white">
    <div class="container mx-auto px-4 text-center">
        <i class="fas fa-award text-5xl text-blue-400 mb-6"></i>
        <h2 class="text-3xl font-bold mb-4">"Prestasi adalah hasil dari persiapan, kerja keras, dan belajar dari kegagalan."</h2>
        <p class="text-blue-200 opacity-80">— Semangat Juara SDN Cibinong 2</p>
    </div>
</section>
@endsection
