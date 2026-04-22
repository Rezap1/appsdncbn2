@extends('layouts.app')

@section('content')
{{-- Header Profil --}}
<section class="bg-gray-50 py-16 border-b">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-extrabold text-[#002147] mb-4 uppercase tracking-wider">Profil Tenaga Pendidik</h1>
        <p class="text-gray-500 max-w-2xl mx-auto italic">"Membangun masa depan generasi bangsa dengan kasih sayang, disiplin, dan profesionalisme di SDN Cibinong 2."</p>
    </div>
</section>

{{-- Section Sambutan Kepala Sekolah --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl border-8 border-white">
                    <img src="{{ asset('img/ks.jpg') }}" alt="Kepala Sekolah" class="w-full h-[500px] object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-[#002147]/90 text-white p-6 backdrop-blur-sm">
                        <p class="text-xs uppercase tracking-[0.2em] opacity-70 mb-1">Kepala Sekolah</p>
                        <h3 class="text-xl font-bold">Juanda, S.Pd.</h3>
                    </div>
                </div>
                <div class="absolute -z-10 -bottom-6 -right-6 w-full h-full bg-blue-50 rounded-3xl"></div>
            </div>

            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-[#002147]">Sambutan Kepala Sekolah</h2>
                <div class="h-1.5 w-20 bg-blue-600"></div>
                <p class="text-gray-600 leading-relaxed">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                <p class="text-gray-600 leading-relaxed">
                    Puji syukur kita panjatkan ke hadirat Allah SWT atas karunia-Nya sehingga website SDN Cibinong 2 ini dapat hadir sebagai sarana informasi dan komunikasi. Sebagai lembaga pendidikan, kami terus berupaya meningkatkan kualitas layanan pendidikan demi mencetak siswa yang berilmu, berkarakter, dan berprestasi.
                </p>
                <p class="text-gray-600 leading-relaxed italic">"Pendidikan adalah senjata paling ampuh untuk mengubah dunia."</p>
            </div>
        </div>
    </div>
</section>

{{-- Section Daftar Guru --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#002147] mb-4">Tenaga Pendidik & Kependidikan</h2>
            <div class="h-1.5 w-24 bg-blue-600 mx-auto"></div>
        </div>

        @php
            // Data Guru beserta Mata Pelajaran/Jabatan
            $teachers = [
                ["name" => "REDI JULIANDA PUTRA", "role" => "Guru PJOK"],
                ["name" => "HJ SADIAH", "role" => "Guru Kelas 2"],
                ["name" => "RESMAN", "role" => "Guru Kelas 3"],
                ["name" => "MELLA INDA RAHMAWATI", "role" => "Guru Kelas 4"],
                ["name" => "RIRI FITRIANI NURJANAH", "role" => "Guru Kelas 5"],
                ["name" => "RIAN RIZKI PUJABAKTI", "role" => "Guru Kelas 6"],
                ["name" => "RIYANA RAHMAT GUSTAPIANDI", "role" => "Guru PJOK"],
                ["name" => "YUYUN ENDANG WAHYUNI", "role" => "Guru PAI"],
                ["name" => "YASTI SULIYANTI", "role" => "Guru Bahasa Inggris"],
                ["name" => "ALI MUSLIH", "role" => "Operator Sekolah"],
                ["name" => "RISMA", "role" => "Staf Administrasi"],
            ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($teachers as $index => $teacher)
            <div class="group">
                <div class="bg-[#002147]/90 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 transform group-hover:-translate-y-2">
                    <div class="relative overflow-hidden h-64">
                        {{-- Logika Foto: g1.jpg, g2.jpg, dst --}}
                        <img src="{{ asset('img/g' . ($index + 1) . '.jpg') }}"
                             alt="{{ $teacher['name'] }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                             onerror="this.src='https://via.placeholder.com/300x400?text=Foto+Guru'">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#002147] via-transparent to-transparent opacity-60"></div>
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="font-bold text-white text-sm md:text-base leading-tight mb-1 uppercase">
                            {{ $teacher['name'] }}
                        </h4>
                        {{-- Teks role/pelajaran sekarang dinamis --}}
                        <p class="text-white text-[10px] font-bold tracking-widest uppercase">
                            {{ $teacher['role'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
