@extends('layouts.app')

@section('content')
<div class="bg-[#001529] min-h-screen">

    {{-- Header --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        <div class="absolute top-0 left-1/3 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-5 py-2 mb-6 bg-blue-500/10 border border-blue-500/20 rounded-full">
                <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></span>
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">Support Center</p>
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter">
                Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Kami</span>
            </h1>

            <p class="text-slate-400 max-w-2xl mx-auto leading-relaxed text-lg">
                Kami siap membantu kebutuhan informasi akademik, pendaftaran siswa baru, serta pertanyaan umum mengenai SDN Cibinong 2.
            </p>
        </div>
    </section>


    {{-- Main Contact --}}
    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">

                {{-- LEFT --}}
                <div class="space-y-12">

                    {{-- Contact Detail --}}
                    <div class="space-y-8">
                        <div class="flex items-center gap-4">
                            <h2 class="text-2xl font-black text-white uppercase tracking-widest">
                                Informasi Kontak
                            </h2>
                            <div class="h-px flex-grow bg-white/5"></div>
                        </div>

                        <div class="space-y-6">

                            {{-- Address --}}
                            <div class="group flex gap-5 p-6 bg-white/5 rounded-[2rem] border border-white/10 hover:border-blue-500/30 transition-all">
                                <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center text-blue-400 border border-blue-500/20 shrink-0">
                                    <i class="fas fa-map-marker-alt text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">Alamat Sekolah</p>
                                    <p class="text-slate-400 text-sm leading-relaxed">
                                        Jl. Raya Patrol-Agribinta, Pananggapan,<br>
                                        Kec. Cibinong, Kabupaten Cianjur,<br>
                                        Jawa Barat 43271
                                    </p>
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="group flex gap-5 p-6 bg-white/5 rounded-[2rem] border border-white/10 hover:border-green-500/30 transition-all">
                                <div class="w-14 h-14 bg-green-500/10 rounded-2xl flex items-center justify-center text-green-400 border border-green-500/20 shrink-0">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">WhatsApp Administrasi</p>
                                    <p class="text-slate-400 text-sm">+62 812-XXXX-XXXX</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="group flex gap-5 p-6 bg-white/5 rounded-[2rem] border border-white/10 hover:border-cyan-500/30 transition-all">
                                <div class="w-14 h-14 bg-cyan-500/10 rounded-2xl flex items-center justify-center text-cyan-400 border border-cyan-500/20 shrink-0">
                                    <i class="fas fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">Email Resmi</p>
                                    <p class="text-slate-400 text-sm">sdncibinong2cianjur@gmail.com</p>
                                </div>
                            </div>

                        </div>
                    </div>


                    {{-- Support Badge --}}
                    <div class="bg-gradient-to-r from-blue-600/10 to-cyan-500/10 border border-blue-500/20 rounded-[2rem] p-6">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-600/30">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold">Jam Layanan Administrasi</h4>
                                <p class="text-slate-400 text-sm">Senin - Jumat • 07.00 - 15.00 WIB</p>
                            </div>
                        </div>
                    </div>


                    {{-- Map --}}
                    <div class="rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl bg-white/5 p-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4682390176374!2d107.01426431477435!3d-7.202353394800311!2m3!1f0!3f0!3m2!1i1024!2i768!4f13.1"
                            class="w-full h-80 rounded-[2rem] grayscale invert contrast-125 opacity-80 border-0"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>

                </div>


                {{-- RIGHT --}}
                <div class="bg-white/5 p-10 md:p-14 rounded-[3rem] border border-white/10 shadow-2xl backdrop-blur-sm relative overflow-hidden">

                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="mb-10">
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Online Inquiry Form
                        </span>
                        <h3 class="text-3xl font-black text-white mt-3 mb-4 uppercase">
                            Kirim Pesan
                        </h3>
                        <p class="text-slate-400 text-sm">
                            Form ini akan langsung diteruskan ke tim administrasi sekolah.
                        </p>
                    </div>

                    <form action="#" class="space-y-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Nama Lengkap"
                                class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 text-white placeholder:text-slate-600 outline-none transition-all">

                            <input type="text" placeholder="Nomor WhatsApp"
                                class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 text-white placeholder:text-slate-600 outline-none transition-all">
                        </div>

                        <input type="email" placeholder="Alamat Email"
                            class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 text-white placeholder:text-slate-600 outline-none transition-all">

                        <select
                            class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 text-white outline-none transition-all">
                            <option>Informasi Pendaftaran (PPDB)</option>
                            <option>Pertanyaan Akademik</option>
                            <option>Masalah Teknis Website</option>
                            <option>Lainnya</option>
                        </select>

                        <textarea rows="5" placeholder="Tulis pesan Anda..."
                            class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 text-white placeholder:text-slate-600 outline-none resize-none transition-all"></textarea>

                        <button type="submit"
                            class="group w-full bg-blue-600 hover:bg-blue-500 text-white font-black text-xs uppercase tracking-[0.3em] py-5 rounded-2xl shadow-xl shadow-blue-600/20 transition-all flex items-center justify-center gap-4 active:scale-95">
                            Kirim Pesan
                            <i class="fas fa-paper-plane text-[10px] transform group-hover:translate-x-2 group-hover:-translate-y-1 transition-transform"></i>
                        </button>

                        <a href="#"
                            class="block text-center w-full border border-green-500/30 text-green-400 hover:bg-green-500/10 font-black text-xs uppercase tracking-[0.3em] py-5 rounded-2xl transition-all">
                            Chat via WhatsApp
                        </a>

                    </form>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
