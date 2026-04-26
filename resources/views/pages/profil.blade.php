@extends('layouts.app')

@section('content')
<div class="bg-[#001529] min-h-screen">
    {{-- Header Profil --}}
    <section class="relative py-24 overflow-hidden">
        {{-- Efek Cahaya Latar --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-block px-4 py-1.5 mb-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-full">
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">Professional Staff</p>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter">
                Profil <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Tenaga Pendidik</span>
            </h1>
            <p class="text-slate-400 max-w-2xl mx-auto italic leading-relaxed text-lg">
                "Membangun masa depan generasi bangsa dengan kasih sayang, disiplin, dan profesionalisme di SDN Cibinong 2."
            </p>
        </div>
    </section>

    {{-- Section Sambutan Kepala Sekolah --}}
    <section class="py-24 relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative group">
                    {{-- Frame Foto Premium - Warna Asli --}}
                    <div class="relative z-10 rounded-[2.5rem] overflow-hidden border-2 border-white/10 shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]">
                        {{-- Grayscale dihapus agar foto langsung berwarna --}}
                        <img src="{{ asset('img/ks.jpg') }}" alt="Kepala Sekolah" class="w-full h-[600px] object-cover transition-all duration-700">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#001529] via-[#001529]/80 to-transparent p-10">
                            <p class="text-blue-400 font-black text-[10px] uppercase tracking-[0.4em] mb-2">Kepala Sekolah</p>
                            <h3 class="text-3xl font-bold text-white tracking-tight">Juanda, S.Pd.</h3>
                        </div>
                    </div>
                    {{-- Dekorasi Belakang --}}
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-blue-600/20 rounded-full blur-[80px] -z-10"></div>
                </div>

                <div class="space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-4xl font-black text-white tracking-tight">Sambutan Hangat</h2>
                        <div class="h-1.5 w-24 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-full"></div>
                    </div>

                    <div class="space-y-6 text-slate-400 leading-relaxed text-lg font-medium">
                        <p class="text-white font-bold">Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                        <p>
                            Puji syukur kita panjatkan ke hadirat Allah SWT atas karunia-Nya sehingga website SDN Cibinong 2 ini dapat hadir sebagai sarana informasi dan komunikasi.
                        </p>
                        <p>
                            Sebagai lembaga pendidikan, kami terus berupaya meningkatkan kualitas layanan pendidikan demi mencetak siswa yang berilmu, berkarakter, dan berprestasi melalui integrasi teknologi dan nilai-nilai moral.
                        </p>
                        <div class="p-6 bg-white/5 border-l-4 border-blue-600 rounded-r-2xl">
                            <p class="text-white italic font-serif text-xl">
                                "Pendidikan adalah senjata paling ampuh untuk mengubah dunia."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Daftar Guru --}}
    <section class="py-24 bg-[#000d1a]/50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-black text-white mb-4 tracking-tight">SDM Unggul Kami</h2>
                <p class="text-blue-400 font-bold text-[10px] uppercase tracking-[0.5em]">Tenaga Pendidik & Kependidikan</p>
                <div class="mt-6 h-1 w-20 bg-white/10 mx-auto rounded-full"></div>
            </div>

            @php
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($teachers as $index => $teacher)
                <div class="group">
                    <div class="relative bg-white/5 rounded-[2.5rem] p-4 border border-white/10 hover:bg-white/10 transition-all duration-500 shadow-2xl overflow-hidden">
                        {{-- Efek Hover Glossy --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>

                        <div class="relative overflow-hidden rounded-[2rem] aspect-[3/4] mb-6">
                            {{-- Grayscale juga dihapus pada daftar guru --}}
                            <img src="{{ asset('img/g' . ($index + 1) . '.jpg') }}"
                                 alt="{{ $teacher['name'] }}"
                                 class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110"
                                 onerror="this.src='https://via.placeholder.com/300x400?text=Foto+Guru'">

                            {{-- Badge Jabatan --}}
                            <div class="absolute top-4 right-4 px-3 py-1 bg-black/50 backdrop-blur-md rounded-full border border-white/10">
                                <p class="text-[8px] font-black text-blue-400 uppercase tracking-widest">{{ $teacher['role'] }}</p>
                            </div>
                        </div>

                        <div class="px-2 pb-4 text-center">
                            <h4 class="font-bold text-white text-sm uppercase tracking-wider leading-tight group-hover:text-blue-400 transition-colors">
                                {{ $teacher['name'] }}
                            </h4>
                            <div class="mt-3 flex justify-center gap-3 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">
                                <a href="#" class="text-slate-400 hover:text-white"><i class="fab fa-instagram text-xs"></i></a>
                                <a href="#" class="text-slate-400 hover:text-white"><i class="fab fa-facebook-f text-xs"></i></a>
                                <a href="#" class="text-slate-400 hover:text-white"><i class="fas fa-envelope text-xs"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
