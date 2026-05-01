@extends('layouts.app')

@section('content')
<div class="bg-[#001529] min-h-screen overflow-hidden">

    {{-- Header Akademik --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-5 py-2 bg-blue-500/10 backdrop-blur-md border border-blue-500/20 rounded-full mb-6">
                <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">
                    Academic Excellence
                </p>
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter leading-tight">
                Sistem <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Akademik</span>
            </h1>

            <p class="text-slate-400 max-w-3xl mx-auto leading-relaxed text-lg">
                Informasi mengenai sistem pembelajaran modern, implementasi kurikulum terbaru,
                dan program pendidikan inovatif di SDN Cibinong 2.
            </p>
        </div>
    </section>


    {{-- Section Kurikulum --}}
    <section class="py-24 relative">
        <div class="absolute top-20 left-10 w-72 h-72 bg-cyan-500/5 rounded-full blur-[100px]"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

                <div class="relative order-2 lg:order-1">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-cyan-500/10 rounded-full blur-3xl"></div>

                    <div class="relative z-10 rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl group">
                        <img src="{{ asset('img/1.jpg') }}"
                             alt="Kegiatan Belajar"
                             class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">

                        <div class="absolute inset-0 bg-gradient-to-tr from-[#001529]/80 via-[#001529]/20 to-transparent"></div>

                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl p-4">
                                <p class="text-[10px] text-blue-400 font-black uppercase tracking-widest mb-1">
                                    Learning Environment
                                </p>
                                <p class="text-white font-bold text-sm">
                                    Pembelajaran Interaktif Berbasis Teknologi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-8 order-1 lg:order-2">
                    <div>
                        <p class="text-blue-400 font-bold text-[11px] uppercase tracking-[0.3em] mb-4">
                            Kurikulum Modern
                        </p>

                        <h2 class="text-4xl font-black text-white tracking-tight leading-tight">
                            Implementasi <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">
                                Kurikulum Merdeka
                            </span>
                        </h2>

                        <div class="h-1.5 w-24 bg-gradient-to-r from-blue-600 to-cyan-400 rounded-full mt-6"></div>
                    </div>

                    <p class="text-slate-400 leading-relaxed text-lg">
                        SDN Cibinong 2 telah menerapkan Kurikulum Merdeka yang berfokus pada pengembangan
                        karakter dan kompetensi siswa melalui sistem pembelajaran fleksibel, adaptif, dan inovatif.
                    </p>

                    <div class="grid gap-4">

                        <div class="flex items-center gap-4 p-5 bg-white/5 border border-white/10 rounded-2xl hover:bg-blue-600/10 hover:border-blue-500/30 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <span class="text-slate-200 font-bold tracking-wide">
                                Pembelajaran Berbasis Projek (P5)
                            </span>
                        </div>

                        <div class="flex items-center gap-4 p-5 bg-white/5 border border-white/10 rounded-2xl hover:bg-blue-600/10 hover:border-blue-500/30 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-slate-200 font-bold tracking-wide">
                                Fokus pada Materi Esensial
                            </span>
                        </div>

                        <div class="flex items-center gap-4 p-5 bg-white/5 border border-white/10 rounded-2xl hover:bg-blue-600/10 hover:border-blue-500/30 transition-all duration-300 group">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all">
                                <i class="fas fa-microchip"></i>
                            </div>
                            <span class="text-slate-200 font-bold tracking-wide">
                                Pemanfaatan Teknologi Digital
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Section Program Unggulan --}}
    <section class="py-24 bg-[#000d1a]/80 relative">
        <div class="absolute inset-0 opacity-10"
             style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <p class="text-blue-400 font-bold text-[11px] uppercase tracking-[0.4em] mb-4">
                    Featured Programs
                </p>

                <h2 class="text-4xl font-black text-white mb-4 tracking-tight">
                    Program Unggulan
                </h2>

                <p class="text-slate-400 max-w-2xl mx-auto">
                    Berbagai program pendidikan dan pengembangan karakter untuk memaksimalkan potensi siswa.
                </p>

                <div class="mt-6 h-1 w-20 bg-blue-600/30 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="group relative p-8 bg-white/5 border border-white/10 rounded-[2.5rem] hover:bg-blue-600/5 transition-all duration-500 overflow-hidden hover:-translate-y-2">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-blue-600/10 rounded-full blur-3xl"></div>

                    <div class="w-16 h-16 bg-blue-600 rounded-[1.5rem] flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-blue-600/30">
                        <i class="fas fa-language"></i>
                    </div>

                    <h3 class="text-xl font-black text-white mb-4 uppercase tracking-wider">
                        Literasi & Numerasi
                    </h3>

                    <p class="text-slate-400 text-sm leading-relaxed font-medium">
                        Program pembiasaan membaca dan berhitung cepat setiap pagi untuk mengasah logika dasar siswa.
                    </p>
                </div>

                <div class="group relative p-8 bg-white/5 border border-white/10 rounded-[2.5rem] hover:bg-green-600/5 transition-all duration-500 overflow-hidden hover:-translate-y-2">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-green-600/10 rounded-full blur-3xl"></div>

                    <div class="w-16 h-16 bg-green-500 rounded-[1.5rem] flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-green-500/30">
                        <i class="fas fa-mosque"></i>
                    </div>

                    <h3 class="text-xl font-black text-white mb-4 uppercase tracking-wider">
                        Pembiasaan Agama
                    </h3>

                    <p class="text-slate-400 text-sm leading-relaxed font-medium">
                        Pembentukan karakter religius melalui kegiatan ibadah, tadarus, dan pembiasaan akhlak mulia.
                    </p>
                </div>

                <div class="group relative p-8 bg-white/5 border border-white/10 rounded-[2.5rem] hover:bg-orange-600/5 transition-all duration-500 overflow-hidden hover:-translate-y-2">
                    <div class="absolute -right-8 -top-8 w-32 h-32 bg-orange-600/10 rounded-full blur-3xl"></div>

                    <div class="w-16 h-16 bg-orange-500 rounded-[1.5rem] flex items-center justify-center text-white text-2xl mb-8 shadow-lg shadow-orange-500/30">
                        <i class="fas fa-running"></i>
                    </div>

                    <h3 class="text-xl font-black text-white mb-4 uppercase tracking-wider">
                        Ekskul Olahraga
                    </h3>

                    <p class="text-slate-400 text-sm leading-relaxed font-medium">
                        Pengembangan bakat atletik dan sportivitas melalui berbagai kegiatan olahraga kompetitif.
                    </p>
                </div>

            </div>
        </div>
    </section>


    {{-- CTA Section --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
             style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 30px 30px;"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-5xl mx-auto bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-700 p-12 md:p-20 rounded-[3rem] shadow-2xl shadow-blue-600/20 relative overflow-hidden">

                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-[100px]"></div>

                <p class="text-blue-100 font-bold text-[10px] uppercase tracking-[0.4em] mb-4">
                    Enrollment Open
                </p>

                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">
                    Ingin Bergabung <br>Bersama Kami?
                </h2>

                <p class="text-blue-100 mb-10 text-lg opacity-90 max-w-2xl mx-auto">
                    Buka masa depan cerah putra-putri Anda dengan sistem pendidikan modern,
                    tenaga pendidik profesional, dan lingkungan belajar terbaik.
                </p>

                <a href="#"
                   class="bg-white text-blue-900 px-12 py-5 rounded-2xl font-black uppercase tracking-[0.2em] text-xs hover:bg-blue-50 transition-all duration-300 shadow-xl active:scale-95 inline-block">
                    Daftar PPDB 2026
                </a>

            </div>
        </div>
    </section>

</div>
@endsection
