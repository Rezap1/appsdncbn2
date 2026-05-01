<footer class="bg-[#020617] text-white pt-24 pb-10 border-t border-white/5 relative overflow-hidden">

    {{-- Background Effects --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-blue-600/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-cyan-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute inset-0 opacity-[0.03]"
             style="background-image: radial-gradient(#ffffff 0.6px, transparent 0.6px); background-size: 24px 24px;">
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">

        {{-- TOP FOOTER --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-16">

            {{-- Branding --}}
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center shadow-lg shadow-blue-600/30">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-8 w-auto">
                    </div>
                    <div>
                        <h3 class="font-black text-lg tracking-tight">SDN CIBINONG 2</h3>
                        <p class="text-[10px] uppercase tracking-[0.3em] text-blue-400 font-bold">
                            Modern Education Platform
                        </p>
                    </div>
                </div>

                <p class="text-sm text-slate-400 leading-relaxed mb-6">
                    Mewujudkan pendidikan dasar berkualitas melalui inovasi digital,
                    pembelajaran aktif, dan pengembangan karakter siswa.
                </p>

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-emerald-500/10 border border-emerald-500/20">
                    <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>
                    <span class="text-[11px] font-bold text-emerald-400 uppercase tracking-widest">
                        Sekolah Aktif Digital
                    </span>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-black mb-6 uppercase text-[11px] tracking-[0.3em] text-blue-400">
                    Navigasi
                </h4>

                <div class="flex flex-col gap-4 text-sm">
                    <a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition">Beranda</a>
                    <a href="{{ route('profil') }}" class="text-slate-400 hover:text-white transition">Profil Sekolah</a>
                    <a href="{{ route('prestasi') }}" class="text-slate-400 hover:text-white transition">Prestasi</a>
                    <a href="{{ route('berita') }}" class="text-slate-400 hover:text-white transition">Berita</a>
                    <a href="{{ route('kontak') }}" class="text-slate-400 hover:text-white transition">Kontak</a>
                </div>
            </div>

            {{-- Newsletter --}}
            <div>
                <h4 class="font-black mb-6 uppercase text-[11px] tracking-[0.3em] text-blue-400">
                    Newsletter
                </h4>

                <p class="text-sm text-slate-500 mb-5 leading-relaxed">
                    Dapatkan informasi terbaru tentang kegiatan, prestasi, dan pengumuman sekolah.
                </p>

                <div class="space-y-3">
                    <div class="flex p-1 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-sm focus-within:border-blue-500/50 transition-all">
                        <input type="email"
                               placeholder="Masukkan Email"
                               class="bg-transparent text-white p-3 w-full outline-none text-sm placeholder:text-slate-600">
                        <button class="bg-blue-600 hover:bg-blue-500 px-5 rounded-xl text-xs font-black uppercase tracking-widest transition-all">
                            Join
                        </button>
                    </div>

                    <p class="text-[10px] text-slate-600 uppercase tracking-wider">
                        Tidak spam. Hanya info penting sekolah.
                    </p>
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-black mb-6 uppercase text-[11px] tracking-[0.3em] text-blue-400">
                    Hubungi Kami
                </h4>

                <ul class="space-y-5 text-sm text-slate-400">
                    <li class="flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
                            <i class="fas fa-map-marker-alt text-blue-400 text-sm"></i>
                        </div>
                        <span>
                            Jl. Raya Patrol-Agrabinta, Pananggapan, Kec. Cibinong, Kabupaten Cianjur
                        </span>
                    </li>

                    <li class="flex gap-4 items-center">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
                            <i class="fas fa-phone-alt text-blue-400 text-sm"></i>
                        </div>
                        <span>085846854231</span>
                    </li>

                    <li class="flex gap-4 items-center">
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center shrink-0">
                            <i class="fas fa-envelope text-blue-400 text-sm"></i>
                        </div>
                        <span class="text-blue-400">sdncbn2@gmail.com</span>
                    </li>
                </ul>
            </div>

        </div>

        {{-- BOTTOM FOOTER --}}
        <div class="border-t border-white/5 pt-8 flex flex-col lg:flex-row justify-between items-center gap-6">

            <p class="text-xs text-slate-500 font-medium text-center lg:text-left">
                © 2026 SDN CIBINONG 2. All Rights Reserved.
                <span class="text-slate-600">Designed for Modern Education Experience.</span>
            </p>

            {{-- Social Media --}}
            <div class="flex gap-3">
                @foreach([
                    'instagram' => 'fab fa-instagram',
                    'youtube' => 'fab fa-youtube',
                    'facebook' => 'fab fa-facebook-f',
                    'tiktok' => 'fab fa-tiktok'
                ] as $platform => $icon)
                    <a href="#"
                       class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-blue-600 hover:border-blue-500 transition-all">
                        <i class="{{ $icon }}"></i>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</footer>
