<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Utama | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #050505; color: #a1a1aa; }
        .sidebar-museum {
            background: #0a0a0a;
            border-right: 1px solid rgba(255, 255, 255, 0.03);
        }
        .main-content {
            background: #0d0d0d;
            border-left: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: -20px 0 80px rgba(0,0,0,0.8);
        }
        /* Border radius hanya aktif di layar medium ke atas agar rapi di mobile */
        @media (min-width: 768px) {
            .main-content { border-radius: 60px 0 0 60px; }
        }
        .stat-card {
            background: #111111;
            border: 1px solid rgba(255, 255, 255, 0.03);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .stat-card:hover {
            border-color: rgba(212, 175, 55, 0.2);
            transform: translateY(-5px);
            background: #141414;
        }
        .action-card {
            background: #0f0f0f;
            border: 1px solid #1a1a1a;
        }
        .gold-glow { color: #d4af37; text-shadow: 0 0 15px rgba(212, 175, 55, 0.3); }
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background: #1a1a1a; border-radius: 10px; }
    </style>
</head>
<body class="overflow-x-hidden md:overflow-hidden">
    <div class="flex flex-col md:flex-row h-screen">

        <aside class="w-full md:w-72 sidebar-museum flex flex-col shrink-0 z-20 border-b md:border-b-0 border-white/5">
            <div class="p-8 md:p-10 text-center border-b border-white/5 flex md:block items-center justify-between">
                <div class="flex items-center md:block gap-4">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-white/[0.02] rounded-2xl md:rounded-3xl flex items-center justify-center border border-white/5 shadow-2xl group hover:border-amber-900/50 transition-all duration-700">
                        <span class="text-xl md:text-2xl grayscale group-hover:grayscale-0 transition duration-700">🏛️</span>
                    </div>
                    <div class="text-left md:text-center md:mt-5">
                        <h1 class="text-[10px] md:text-sm font-black tracking-[0.3em] text-white uppercase">Cibinong II</h1>
                        <p class="text-[8px] text-amber-700 font-black uppercase tracking-[0.4em] mt-1">Arsip</p>
                    </div>
                </div>
            </div>

            <nav class="flex-1 p-6 md:p-8 space-y-2 md:space-y-3 overflow-y-auto">
                <p class="px-4 text-[9px] font-black text-zinc-700 uppercase tracking-[0.3em] mb-4 md:mb-6">Menu Kelola</p>

                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-4 {{ request()->routeIs('admin.dashboard') ? 'bg-white/[0.03] text-white border border-white/5' : 'text-zinc-500 hover:text-white' }} rounded-2xl transition-all duration-500 group">
                    <svg class="h-4 w-4 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="ml-4 text-[11px] font-bold uppercase tracking-widest">Dashboard</span>
                </a>

                <a href="{{ route('admin.berita.index') }}" class="flex items-center p-4 {{ request()->routeIs('admin.berita.*') ? 'bg-white/[0.03] text-white border border-white/5' : 'text-zinc-500 hover:text-white' }} rounded-2xl transition-all duration-500 group">
                    <svg class="h-4 w-4 opacity-40 group-hover:opacity-100 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" />
                    </svg>
                    <span class="ml-4 text-[11px] font-bold uppercase tracking-widest">Kelola Berita</span>
                </a>

                <a href="{{ route('admin.prestasi.index') }}" class="flex items-center p-4 {{ request()->routeIs('admin.prestasi.*') ? 'bg-white/[0.03] text-white border border-white/5' : 'text-zinc-500 hover:text-white' }} rounded-2xl transition-all duration-500 group">
                    <svg class="h-4 w-4 opacity-40 group-hover:opacity-100 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="ml-4 text-[11px] font-bold uppercase tracking-widest">Kelola Prestasi</span>
                </a>

                <a href="{{ route('admin.galeri.index') }}" class="flex items-center p-4 {{ request()->routeIs('admin.galeri.*') ? 'bg-white/[0.03] text-white border border-white/5' : 'text-zinc-500 hover:text-white' }} rounded-2xl transition-all duration-500 group">
                    <svg class="h-4 w-4 opacity-40 group-hover:opacity-100 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="ml-4 text-[11px] font-bold uppercase tracking-widest">Kelola Galeri</span>
                </a>
            </nav>

            <div class="p-6 md:p-8">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-zinc-900 text-zinc-500 hover:bg-red-950/30 hover:text-red-500 rounded-xl transition-all duration-500 font-bold text-[9px] uppercase tracking-[0.3em] border border-white/5">
                        keluar
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-6 md:p-12 main-content shadow-inner">
            <header class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 md:mb-16 gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="w-8 h-[1px] bg-amber-900"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.4em] text-amber-700">Halaman Admin</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-white tracking-tighter uppercase"> SDN<b class="font-black gold-glow">CIBINONG 2</b></h2>
                </div>

                <div class="flex items-center gap-4 md:gap-6 bg-black/40 p-3 pr-6 md:pr-8 rounded-3xl border border-white/5 shadow-2xl">
                    <div class="w-10 h-10 md:w-12 md:h-12 bg-zinc-900 rounded-2xl flex items-center justify-center text-amber-600 font-black text-xs border border-amber-900/20 shadow-inner">
                        A
                    </div>
                    <div>
                        <p class="text-[9px] font-black text-white uppercase tracking-widest">Administrator</p>
                        <p class="text-[8px] text-zinc-600 font-bold tracking-[0.2em] uppercase mt-1 flex items-center">
                            <span class="w-1.5 h-1.5 bg-amber-600 rounded-full mr-2 shadow-[0_0_10px_#d4af37]"></span> Verified
                        </p>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-12 md:mb-16">
                <div class="stat-card p-8 md:p-10 rounded-[35px] md:rounded-[40px] relative overflow-hidden group cursor-pointer" onclick="window.location='{{ route('admin.berita.index') }}'">
                    <div class="relative z-10">
                        <p class="text-zinc-600 text-[9px] font-black uppercase tracking-[0.3em]">Total Berita</p>
                        <h3 class="text-4xl md:text-5xl font-light text-white mt-3 tracking-tighter group-hover:gold-glow transition duration-500">{{ $total_berita }}</h3>
                    </div>
                    <div class="absolute -right-4 -bottom-4 text-white/[0.02] group-hover:text-amber-600/[0.05] transition duration-700 transform group-hover:scale-110">
                        <svg class="h-24 w-24 md:h-32 md:w-32" fill="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" /></svg>
                    </div>
                </div>

                <div class="stat-card p-8 md:p-10 rounded-[35px] md:rounded-[40px] relative overflow-hidden group cursor-pointer" onclick="window.location='{{ route('admin.kegiatan.index') }}'">
                    <div class="relative z-10">
                        <p class="text-zinc-600 text-[9px] font-black uppercase tracking-[0.3em]">Agenda Aktif</p>
                        <h3 class="text-4xl md:text-5xl font-light text-white mt-3 tracking-tighter group-hover:gold-glow transition duration-500">{{ $total_kegiatan }}</h3>
                    </div>
                    <div class="absolute -right-4 -bottom-4 text-white/[0.02] group-hover:text-amber-600/[0.05] transition duration-700 transform group-hover:scale-110">
                        <svg class="h-24 w-24 md:h-32 md:w-32" fill="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2-2v12a2 2 0 002 2z" /></svg>
                    </div>
                </div>

                <div class="stat-card p-8 md:p-10 rounded-[35px] md:rounded-[40px] relative overflow-hidden group cursor-pointer" onclick="window.location='{{ route('admin.prestasi.index') }}'">
                    <div class="relative z-10">
                        <p class="text-zinc-600 text-[9px] font-black uppercase tracking-[0.3em]">Arsip Prestasi</p>
                        <h3 class="text-4xl md:text-5xl font-light text-white mt-3 tracking-tighter group-hover:gold-glow transition duration-500">{{ $total_prestasi }}</h3>
                    </div>
                    <div class="absolute -right-4 -bottom-4 text-white/[0.02] group-hover:text-amber-600/[0.05] transition duration-700 transform group-hover:scale-110">
                        <svg class="h-24 w-24 md:h-32 md:w-32" fill="currentColor" viewBox="0 0 24 24"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
                    </div>
                </div>

                <div class="stat-card p-8 md:p-10 rounded-[35px] md:rounded-[40px] relative overflow-hidden group cursor-pointer" onclick="window.location='{{ route('admin.galeri.index') }}'">
                    <div class="relative z-10">
                        <p class="text-zinc-600 text-[9px] font-black uppercase tracking-[0.3em]">Arsip Galeri</p>
                        <h3 class="text-4xl md:text-5xl font-light text-white mt-3 tracking-tighter group-hover:gold-glow transition duration-500">{{ $total_galeri }}</h3>
                    </div>
                    <div class="absolute -right-4 -bottom-4 text-white/[0.02] group-hover:text-amber-600/[0.05] transition duration-700 transform group-hover:scale-110">
                        <svg class="h-24 w-24 md:h-32 md:w-32" fill="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                </div>
            </div>

            <div class="action-card p-8 md:p-16 rounded-[40px] md:rounded-[60px] shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 md:w-96 h-64 md:h-96 bg-amber-600/5 rounded-full blur-[80px] md:blur-[120px]"></div>

                <div class="max-w-2xl relative z-10 text-center md:text-left">
                    <h3 class="font-light text-white text-3xl md:text-4xl tracking-tighter uppercase">Selamat Bekerja <br class="md:hidden"> <b class="font-black gold-glow tracking-normal">Orang Baik</b></h3>
                    <p class="text-zinc-500 mt-4 md:mt-6 leading-relaxed font-medium text-sm md:text-lg italic text-balance">"Setiap data yang Anda masukkan hari ini adalah sejarah bagi masa depan."</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 md:gap-8 mt-12 md:mt-16">
                    <a href="{{ route('admin.berita.create') }}" class="group p-8 md:p-10 bg-black/40 rounded-[35px] md:rounded-[40px] border border-white/[0.03] hover:border-amber-900/40 transition-all duration-700">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-zinc-900 text-amber-700 rounded-2xl flex items-center justify-center mb-6 md:mb-8 border border-white/5 group-hover:scale-110 transition duration-700 shadow-inner mx-auto md:mx-0">
                            <span class="text-lg md:text-xl">✍️</span>
                        </div>
                        <h4 class="text-[9px] font-black text-zinc-600 uppercase tracking-[0.4em] mb-2 text-center md:text-left">Publishing</h4>
                        <p class="text-white font-bold tracking-tight text-center md:text-left">Rilis Berita Baru</p>
                    </a>

                    <a href="{{ route('admin.kegiatan.create') }}" class="group p-8 md:p-10 bg-black/40 rounded-[35px] md:rounded-[40px] border border-white/[0.03] hover:border-amber-900/40 transition-all duration-700">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-zinc-900 text-amber-700 rounded-2xl flex items-center justify-center mb-6 md:mb-8 border border-white/5 group-hover:scale-110 transition duration-700 shadow-inner mx-auto md:mx-0">
                            <span class="text-lg md:text-xl">📅</span>
                        </div>
                        <h4 class="text-[9px] font-black text-zinc-600 uppercase tracking-[0.4em] mb-2 text-center md:text-left">Scheduling</h4>
                        <p class="text-white font-bold tracking-tight text-center md:text-left">Atur Agenda Sekolah</p>
                    </a>

                    <a href="{{ route('admin.prestasi.index') }}" class="group p-8 md:p-10 bg-black/40 rounded-[35px] md:rounded-[40px] border border-white/[0.03] hover:border-amber-900/40 transition-all duration-700">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-zinc-900 text-amber-700 rounded-2xl flex items-center justify-center mb-6 md:mb-8 border border-white/5 group-hover:scale-110 transition duration-700 shadow-inner mx-auto md:mx-0">
                            <span class="text-lg md:text-xl">🏆</span>
                        </div>
                        <h4 class="text-[9px] font-black text-zinc-600 uppercase tracking-[0.4em] mb-2 text-center md:text-left">Archiving</h4>
                        <p class="text-white font-bold tracking-tight text-center md:text-left">Input Capaian Siswa</p>
                    </a>
                </div>
            </div>

            <footer class="mt-16 md:mt-20 text-center pb-12">
                <div class="h-[1px] w-20 bg-zinc-900 mx-auto mb-8"></div>
                <p class="text-[8px] font-black text-zinc-800 uppercase tracking-[1em]">Internal Command Center • v.2026</p>
            </footer>
        </main>
    </div>
</body>
</html>
