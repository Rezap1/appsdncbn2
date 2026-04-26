@extends('layouts.app')

@section('content')
<div class="bg-[#001529] min-h-screen">
    {{-- Header Hubungi Kami --}}
    <section class="relative py-24 overflow-hidden border-b border-white/5">
        {{-- Efek Cahaya Latar --}}
        <div class="absolute top-0 left-1/3 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="inline-block px-4 py-1.5 mb-6 bg-blue-500/10 backdrop-blur-md border border-blue-500/20 rounded-full">
                <p class="text-blue-400 font-bold text-[10px] tracking-[0.3em] uppercase">Support Center</p>
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 uppercase tracking-tighter">
                Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Kami</span>
            </h1>
            <p class="text-slate-400 max-w-2xl mx-auto italic leading-relaxed text-lg">
                "Kami siap melayani informasi seputar akademik dan pendaftaran siswa baru di SDN Cibinong 2."
            </p>
        </div>
    </section>

    <section class="py-20 relative">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">

                {{-- Kolom Kiri: Detail Kontak --}}
                <div class="space-y-12">
                    <div>
                        <h2 class="text-2xl font-black text-white mb-10 uppercase tracking-widest flex items-center gap-4">
                            Detail Kontak
                            <div class="h-px flex-grow bg-white/5"></div>
                        </h2>

                        <div class="space-y-8">
                            {{-- Lokasi --}}
                            <div class="group flex gap-6">
                                <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-blue-400 border border-white/10 group-hover:border-blue-500/50 transition-all shadow-xl">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">Lokasi Sekolah</p>
                                    <p class="text-slate-400 text-sm leading-relaxed font-medium">
                                        Jl. Raya Patrol-Agribinta, Pananggapan, <br>
                                        Kec. Cibinong, Kabupaten Cianjur, <br>
                                        Jawa Barat 43271 (Kode Plus: M3PR+GW7)
                                    </p>
                                </div>
                            </div>

                            {{-- WhatsApp --}}
                            <div class="group flex gap-6">
                                <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-green-400 border border-white/10 group-hover:border-green-500/50 transition-all shadow-xl">
                                    <i class="fab fa-whatsapp text-2xl"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">WhatsApp Administrasi</p>
                                    <p class="text-slate-400 text-sm font-medium">+62 812-xxxx-xxxx</p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="group flex gap-6">
                                <div class="w-14 h-14 bg-white/5 rounded-2xl flex items-center justify-center text-red-400 border border-white/10 group-hover:border-red-500/50 transition-all shadow-xl">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-black text-white uppercase text-xs tracking-widest mb-2">Email Resmi</p>
                                    <p class="text-slate-400 text-sm font-medium">sdncibinong2cianjur@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Map --}}
                    <div class="w-full h-80 rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl relative bg-white/5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.4682390176374!2d107.01426431477435!3d-7.202353394800311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68494b8e8869c9%3A0x6b4b4b4b4b4b4b4b!2sSDN%20Cibinong%202!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid"
                            class="w-full h-full border-0 grayscale invert contrast-125 opacity-70"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                {{-- Kolom Kanan: Form --}}
                <div class="bg-white/5 p-10 md:p-14 rounded-[3rem] border border-white/10 shadow-2xl backdrop-blur-sm relative overflow-hidden">
                    {{-- Dekorasi Form --}}
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-blue-600/5 rounded-full blur-3xl pointer-events-none"></div>

                    <h3 class="text-3xl font-black text-white mb-4 tracking-tighter uppercase">Kirim Pesan <span class="text-blue-500">Online</span></h3>
                    <p class="text-slate-400 text-sm mb-10 font-medium">Punya pertanyaan? Tulis pesan di bawah ini dan sistem kami akan meneruskannya ke tim administrasi.</p>

                    <form action="#" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] ml-2">Nama Lengkap</label>
                                <input type="text" placeholder="Entry name..."
                                    class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 focus:ring-0 text-white text-sm placeholder:text-slate-700 transition-all outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] ml-2">Nomor HP</label>
                                <input type="text" placeholder="0812..."
                                    class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 focus:ring-0 text-white text-sm placeholder:text-slate-700 transition-all outline-none">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] ml-2">Tujuan Pertanyaan</label>
                            <div class="relative">
                                <select class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 focus:ring-0 text-white text-sm transition-all outline-none appearance-none cursor-pointer font-medium">
                                    <option class="bg-[#001529]">Informasi Pendaftaran (PPDB)</option>
                                    <option class="bg-[#001529]">Pertanyaan Akademik</option>
                                    <option class="bg-[#001529]">Masalah Teknis Website</option>
                                    <option class="bg-[#001529]">Lainnya</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-6 top-1/2 -translate-y-1/2 text-slate-600 text-[10px] pointer-events-none"></i>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] ml-2">Isi Pesan</label>
                            <textarea rows="4" placeholder="Type your message here..."
                                class="w-full bg-[#001529] px-6 py-4 rounded-2xl border border-white/10 focus:border-blue-500 focus:ring-0 text-white text-sm placeholder:text-slate-700 transition-all outline-none resize-none"></textarea>
                        </div>

                        <button type="submit" class="group w-full bg-blue-600 hover:bg-blue-500 text-white font-black text-xs uppercase tracking-[0.3em] py-5 rounded-2xl shadow-xl shadow-blue-600/20 transition-all flex items-center justify-center gap-4 active:scale-95">
                            Kirim Pesan
                            <i class="fas fa-paper-plane text-[10px] transform group-hover:translate-x-2 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
