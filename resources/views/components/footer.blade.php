<footer class="bg-[#000d1a] text-white pt-20 pb-8 border-t border-white/5 relative overflow-hidden">
    {{-- Aksen Dekoratif Latar Belakang --}}
    <div class="absolute top-0 left-1/4 w-64 h-64 bg-blue-600/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-12 relative z-10">
        {{-- Quote Section --}}
        <div class="col-span-1">
            <div class="flex gap-3 mb-6">
                <i class="fas fa-quote-left text-3xl text-blue-500/30"></i>
                <p class="italic text-sm leading-relaxed text-slate-400">
                    Pendidikan adalah senjata paling ampuh untuk mengubah dunia.
                </p>
            </div>
            <div class="pl-11">
                <p class="text-[10px] font-bold text-blue-400 uppercase tracking-widest">— Nelson Mandela</p>
            </div>
        </div>

        {{-- Sosial Media --}}
        <div>
            <h4 class="font-black mb-8 uppercase text-[11px] tracking-[0.3em] text-white">Ikuti Kami</h4>
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-500 hover:border-transparent transition-all duration-300 group">
                    <i class="fab fa-instagram group-hover:scale-110 transition-transform"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-red-600 hover:border-transparent transition-all duration-300 group">
                    <i class="fab fa-youtube group-hover:scale-110 transition-transform"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-blue-700 hover:border-transparent transition-all duration-300 group">
                    <i class="fab fa-facebook-f group-hover:scale-110 transition-transform"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-black hover:border-white/20 transition-all duration-300 group">
                    <i class="fab fa-tiktok group-hover:scale-110 transition-transform"></i>
                </a>
            </div>
        </div>

        {{-- Newsletter dengan Style Glass --}}
        <div>
            <h4 class="font-black mb-8 uppercase text-[11px] tracking-[0.3em] text-white">Newsletter</h4>
            <p class="text-[10px] font-bold text-slate-500 mb-6 uppercase tracking-wider">Dapatkan informasi terbaru dari SDN Cibinong 2</p>
            <div class="flex p-1 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-sm focus-within:border-blue-500/50 transition-all">
                <input type="email" placeholder="Email Anda" class="bg-transparent text-white p-3 w-full outline-none text-xs placeholder:text-slate-600 font-medium">
                <button class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2.5 rounded-xl text-[10px] font-black uppercase tracking-widest transition-all shadow-lg shadow-blue-600/20 active:scale-95">
                    Join
                </button>
            </div>
        </div>

        {{-- Kontak Informasi --}}
        <div>
            <h4 class="font-black mb-8 uppercase text-[11px] tracking-[0.3em] text-white">Hubungi Kami</h4>
            <ul class="text-[12px] space-y-5 text-slate-400 font-medium">
                <li class="flex gap-4 items-start group">
                    <div class="w-8 h-8 bg-blue-500/10 rounded-lg flex items-center justify-center shrink-0 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-white transition-all">
                        <i class="fas fa-map-marker-alt text-[10px]"></i>
                    </div>
                    <span class="leading-relaxed group-hover:text-slate-200 transition-colors">
                        Jl. Raya Patrol-Agrabinta, Pananggapan, Kec. Cibinong, Kabupaten Cianjur, Jawa Barat 43271
                    </span>
                </li>
                <li class="flex gap-4 items-center group">
                    <div class="w-8 h-8 bg-blue-500/10 rounded-lg flex items-center justify-center shrink-0 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-white transition-all">
                        <i class="fas fa-phone-alt text-[10px]"></i>
                    </div>
                    <span class="group-hover:text-slate-200 transition-colors">085846854231</span>
                </li>
                <li class="flex gap-4 items-center group">
                    <div class="w-8 h-8 bg-blue-500/10 rounded-lg flex items-center justify-center shrink-0 border border-blue-500/20 group-hover:bg-blue-500 group-hover:text-white transition-all">
                        <i class="fas fa-envelope text-[10px]"></i>
                    </div>
                    <span class="group-hover:text-slate-200 transition-colors text-blue-400/80">sdncbn2@gmail.com</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Copyright Section --}}
    <div class="container mx-auto px-4 mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-[10px] font-bold text-slate-600 uppercase tracking-[0.2em]">
            &copy; 2026 SDN CIBINONG 2. Crafted with Precision.
        </p>
        <div class="flex gap-6 text-[9px] font-black uppercase tracking-widest text-slate-500">
            <a href="#" class="hover:text-blue-400 transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-blue-400 transition-colors">Terms of Service</a>
        </div>
    </div>
</footer>
