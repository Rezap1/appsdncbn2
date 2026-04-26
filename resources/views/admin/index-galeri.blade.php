<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri_Sistem | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cyber-cyan: #00f2ff;
            --cyber-dark: #050a10;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--cyber-dark);
            background-image:
                radial-gradient(circle at 50% 50%, rgba(0, 98, 255, 0.05) 0%, transparent 80%),
                linear-gradient(rgba(0, 242, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 242, 255, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
            color: #e2e8f0;
            min-height: 100vh;
        }

        .mono { font-family: 'JetBrains Mono', monospace; }

        .cyber-card {
            background: rgba(13, 21, 32, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 242, 255, 0.05);
            border-radius: 24px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cyber-card:hover {
            border-color: var(--cyber-cyan);
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 242, 255, 0.1);
        }

        .btn-cyber-outline {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: all 0.3s;
        }

        .btn-cyber-outline:hover {
            border-color: var(--cyber-cyan);
            color: var(--cyber-cyan);
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.2);
        }

        .btn-cyber-solid {
            background: var(--cyber-cyan);
            color: #000;
            font-weight: 800;
            transition: all 0.3s;
        }

        .btn-cyber-solid:hover {
            background: #fff;
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
        }

        .glitch-text {
            background: linear-gradient(to right, #fff, var(--cyber-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-thumb { background: var(--cyber-cyan); border-radius: 10px; }
    </style>
</head>
<body class="p-6 md:p-12">

    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-20 gap-8">
            <div class="space-y-2">
                <div class="flex items-center gap-3">
                    <span class="h-[1px] w-12 bg-cyan-500"></span>
                    <span class="text-cyan-400 text-[10px] font-bold uppercase tracking-[0.5em] mono">Visual_Module</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black tracking-tighter mt-4 glitch-text uppercase italic">
                    Kelola.<span class="text-white">Galeri</span>
                </h2>
                <p class="text-slate-500 font-medium text-xs max-w-md leading-relaxed mt-4 mono uppercase">
                    Manajemen aset visual & dokumentasi digital <br> Node: <span class="text-cyan-600">SDN_CIBINONG_02</span>
                </p>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.dashboard') }}" class="btn-cyber-outline px-6 py-3 rounded-xl text-[10px] font-bold tracking-widest flex items-center gap-3 mono uppercase">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Kembali
                </a>

                <a href="{{ route('admin.galeri.create') }}" class="btn-cyber-solid px-6 py-3 rounded-xl text-[10px] font-bold tracking-widest flex items-center gap-2 mono uppercase">
                    <span class="text-lg">+</span>
                    Tambah_Galeri
                </a>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-12 p-5 bg-cyan-500/10 border border-cyan-500/20 rounded-2xl text-cyan-400 text-[10px] font-bold tracking-widest flex items-center uppercase mono">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
            Status: {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($galeris as $g)
            <div class="cyber-card overflow-hidden group">
                <div class="relative h-64 overflow-hidden bg-black">
                    <img src="{{ asset('uploads/galeri/'.$g->gambar) }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-all duration-700 group-hover:scale-110">

                    <div class="absolute inset-0 bg-cyan-900/40 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                        <form action="{{ route('admin.galeri.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Sistem: Hapus aset visual ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-600/20 text-red-500 border border-red-500/50 px-6 py-2 rounded-lg text-[9px] font-bold uppercase tracking-[0.2em] hover:bg-red-600 hover:text-white transition-all mono">
                                Hapus_Arsip
                            </button>
                        </form>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-black/60 backdrop-blur-md border border-cyan-500/30 text-[8px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-md text-cyan-400 mono">
                            Ref: 0x{{ $loop->iteration }}
                        </span>
                    </div>
                </div>

                <div class="p-6 border-t border-white/5">
                    <h3 class="font-bold text-xs text-white mb-2 truncate tracking-widest uppercase mono">{{ $g->judul }}</h3>
                    <div class="flex items-center justify-between">
                        <p class="text-[9px] font-bold text-slate-600 uppercase tracking-widest mono">
                            Tgl: {{ $g->created_at->format('d/m/Y') }}
                        </p>
                        <div class="flex gap-1">
                            <span class="w-1 h-1 rounded-full bg-cyan-500/50"></span>
                            <span class="w-1 h-1 rounded-full bg-cyan-500/30"></span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-32 text-center border border-dashed border-white/5 rounded-[40px] bg-white/[0.01]">
                <div class="inline-block p-10 bg-cyan-500/5 rounded-full mb-6 border border-cyan-500/10">
                    <svg class="w-10 h-10 text-cyan-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-600 tracking-[0.3em] uppercase mono italic">Database_Empty</h3>
                <p class="text-slate-700 mt-2 text-[10px] uppercase mono">Tidak ada data visual yang ditemukan.</p>
                <a href="{{ route('admin.galeri.create') }}" class="mt-10 inline-block px-8 py-3 border border-cyan-500/20 text-cyan-600 font-bold text-[9px] uppercase tracking-widest rounded-xl hover:bg-cyan-500/5 hover:text-cyan-400 transition-all mono">
                    Upload_Gambar
                </a>
            </div>
            @endforelse
        </div>

        <footer class="mt-32 mb-10 text-center opacity-20">
            <p class="text-[8px] font-bold tracking-[1em] text-slate-500 uppercase mono italic">System.Registry // 2026 // SDN_CIBINONG_02</p>
        </footer>
    </div>
</body>
</html>
