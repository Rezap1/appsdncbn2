<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-Command | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cyber-cyan: #00f2ff;
            --cyber-blue: #0062ff;
            --cyber-dark: #050a10;
            --cyber-panel: #0d1520;
        }

        [x-cloak] { display: none !important; }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--cyber-dark);
            background-image:
                radial-gradient(circle at 50% 50%, rgba(0, 98, 255, 0.1) 0%, transparent 80%),
                linear-gradient(rgba(0, 242, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 242, 255, 0.03) 1px, transparent 1px);
            background-size: 100% 100%, 30px 30px, 30px 30px;
            color: #e2e8f0;
        }

        .cyber-sidebar {
            background: var(--cyber-panel);
            border-right: 1px solid rgba(0, 242, 255, 0.1);
        }

        .main-viewport {
            background: rgba(13, 21, 32, 0.8);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(0, 242, 255, 0.1);
        }

        @media (min-width: 768px) {
            .main-viewport {
                border-left: 1px solid rgba(0, 242, 255, 0.1);
                border-top: none;
                border-radius: 40px 0 0 40px;
            }
        }

        .cyber-card {
            background: linear-gradient(145deg, #111a27, #090f16);
            border: 1px solid rgba(0, 242, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cyber-card:hover {
            border-color: var(--cyber-cyan);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.15);
            transform: translateY(-5px);
        }

        .mono { font-family: 'JetBrains Mono', monospace; }
        .glitch-text { text-shadow: 2px 0 #ff00c1, -2px 0 #00fff9; letter-spacing: 2px; }

        .status-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.5); opacity: 0.5; }
            100% { transform: scale(1); opacity: 1; }
        }

        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-thumb { background: var(--cyber-cyan); border-radius: 10px; }
    </style>
</head>
<body class="overflow-x-hidden md:overflow-hidden" x-data="{ sidebarOpen: false }">

    <div class="flex flex-col md:flex-row h-screen">

        <div class="md:hidden flex items-center justify-between p-4 bg-[#0d1520] border-b border-cyan-500/20 z-50">
            <div class="flex items-center gap-3">
                <span class="text-xl">🛰️</span>
                <h1 class="text-[10px] font-bold tracking-[0.2em] text-cyan-400 uppercase">Admin Panel</h1>
            </div>
            <button @click="sidebarOpen = !sidebarOpen" class="text-cyan-400 p-2">
                <svg x-show="!sidebarOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <svg x-show="sidebarOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'"
               class="fixed inset-y-0 left-0 w-72 md:relative md:flex flex-col cyber-sidebar shrink-0 z-40 transition-transform duration-300 ease-in-out overflow-y-auto">

            <div class="p-8 md:p-10 border-b border-white/5 flex flex-col items-center justify-center text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="w-16 h-16 bg-cyan-500/10 rounded-xl flex items-center justify-center border border-cyan-500/30 shadow-[0_0_15px_rgba(0,242,255,0.1)]">
                        <span class="text-2xl filter drop-shadow-[0_0_8px_#00f2ff]">🛰️</span>
                    </div>
                    <div class="mt-2">
                        <h1 class="text-sm font-bold tracking-[0.4em] text-cyan-400 uppercase glitch-text">CIBINONG 2</h1>
                        <p class="text-[8px] text-slate-500 font-bold uppercase tracking-[0.4em] mt-1 mono">System.Core</p>
                    </div>
                </div>
            </div>

            <nav class="flex-1 p-6 space-y-2">
                <p class="px-4 text-[9px] font-bold text-slate-600 uppercase tracking-[0.3em] mb-4">Navigasi Utama</p>

                @php
                    $menus = [
                        ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                        ['route' => 'admin.berita.index', 'label' => 'Kelola Berita', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z'],
                        ['route' => 'admin.prestasi.index', 'label' => 'Kelola Prestasi', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
                        ['route' => 'admin.galeri.index', 'label' => 'Kelola Galeri', 'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'],
                    ];
                @endphp

                @foreach($menus as $menu)
                <a href="{{ route($menu['route']) }}"
                   class="flex items-center p-4 rounded-xl transition-all duration-300 group {{ request()->routeIs($menu['route']) ? 'bg-cyan-500/10 text-cyan-400 border border-cyan-500/20' : 'text-slate-500 hover:text-cyan-400 hover:bg-white/5' }}">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $menu['icon'] }}" />
                    </svg>
                    <span class="ml-4 text-[11px] font-medium uppercase tracking-widest mono">{{ $menu['label'] }}</span>
                </a>
                @endforeach
            </nav>

            <div class="p-6">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-red-500/5 text-red-500 hover:bg-red-500/20 rounded-xl transition-all border border-red-500/20 font-bold text-[9px] uppercase tracking-[0.3em] mono">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-30 md:hidden" x-cloak></div>

        <main class="flex-1 overflow-y-auto p-6 md:p-12 main-viewport">

            <header class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="w-12 h-[1px] bg-cyan-500"></span>
                        <span class="text-[9px] font-bold uppercase tracking-[0.4em] text-cyan-400 mono">Administrator</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tighter uppercase">SYSTEM<span class="text-cyan-500">CONTROL</span></h2>
                </div>

                <div class="flex items-center gap-4 bg-slate-900/50 p-3 pr-8 rounded-2xl border border-white/5 shadow-2xl backdrop-blur-xl">
                    <div class="w-10 h-10 bg-cyan-500/20 rounded-xl flex items-center justify-center border border-cyan-500/40 text-cyan-400 font-bold text-xs">
                        A
                    </div>
                    <div>
                        <p class="text-[9px] font-bold text-white uppercase tracking-widest mono">Administrator</p>
                        <p class="text-[8px] text-cyan-400/70 font-bold tracking-[0.2em] uppercase mt-1 flex items-center">
                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-2 status-pulse shadow-[0_0_8px_#22c55e]"></span> Online
                        </p>
                    </div>
                </div>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @php
                    $stats = [
                        ['label' => 'Total Berita', 'value' => $total_berita, 'route' => 'admin.berita.index', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z'],
                        ['label' => 'Total Prestasi', 'value' => $total_prestasi, 'route' => 'admin.prestasi.index', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
                        ['label' => 'Total Galeri', 'value' => $total_galeri, 'route' => 'admin.galeri.index', 'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z'],
                    ];
                @endphp

                @foreach($stats as $stat)
                <div class="cyber-card p-8 rounded-3xl group cursor-pointer relative overflow-hidden" onclick="window.location='{{ route($stat['route']) }}'">
                    <p class="text-slate-500 text-[9px] font-bold uppercase tracking-[0.3em] mono relative z-10">{{ $stat['label'] }}</p>
                    <h3 class="text-4xl font-bold text-white mt-3 tracking-tighter group-hover:text-cyan-400 transition relative z-10">{{ $stat['value'] }}</h3>
                    <div class="absolute right-4 bottom-4 opacity-5 group-hover:opacity-20 transition-all transform group-hover:scale-110">
                        <svg class="h-16 w-16 text-cyan-400" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $stat['icon'] }}" /></svg>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bg-gradient-to-br from-slate-900 to-black p-8 md:p-12 rounded-[30px] border border-cyan-500/10 relative overflow-hidden">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>

                <div class="relative z-10 flex flex-col lg:flex-row justify-between items-center gap-8 text-center lg:text-left">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white tracking-tight uppercase">Status: <span class="text-cyan-400">Operational</span></h3>
                        <p class="text-slate-500 mt-2 mono text-xs md:text-sm italic">"Selamat bekerja di kendali sistem SDN Cibinong 2"</p>
                    </div>
                    <a href="{{ route('admin.berita.create') }}" class="px-8 py-4 bg-cyan-500/10 hover:bg-cyan-500 hover:text-black border border-cyan-500 text-cyan-400 rounded-xl transition-all duration-300 mono text-[10px] font-bold uppercase tracking-widest shadow-[0_0_15px_rgba(0,242,255,0.2)]">
                        + Publikasi Baru
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-12 relative z-10">
                    <a href="{{ route('admin.berita.create') }}" class="p-6 bg-black/40 rounded-2xl border border-white/5 hover:border-cyan-500/30 transition group">
                        <div class="text-cyan-400 mb-4 group-hover:scale-110 transition text-xl">✍️</div>
                        <h4 class="text-white font-bold text-xs mb-1 uppercase tracking-wider">Berita & Artikel</h4>
                        <p class="text-slate-500 text-[10px] mono">Tulis pengumuman terbaru</p>
                    </a>
                    <a href="{{ route('admin.prestasi.index') }}" class="p-6 bg-black/40 rounded-2xl border border-white/5 hover:border-cyan-500/30 transition group">
                        <div class="text-cyan-400 mb-4 group-hover:scale-110 transition text-xl">🏆</div>
                        <h4 class="text-white font-bold text-xs mb-1 uppercase tracking-wider">Prestasi Siswa</h4>
                        <p class="text-slate-500 text-[10px] mono">Update daftar juara</p>
                    </a>
                </div>
            </div>

            <footer class="mt-16 text-center pb-8 border-t border-white/5 pt-8">
                <p class="text-[8px] font-bold text-slate-700 uppercase tracking-[1em] mono">Admin.Interface.v2.0 // SDN-CIBINONG-02</p>
            </footer>
        </main>
    </div>
</body>
</html>
