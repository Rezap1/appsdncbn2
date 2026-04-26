<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News_Archive | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cyber-cyan: #00f2ff;
            --cyber-dark: #050a10;
            --cyber-panel: #0d1520;
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

        .cyber-card {
            background: rgba(13, 21, 32, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 242, 255, 0.1);
            border-radius: 24px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .cyber-card:hover {
            border-color: var(--cyber-cyan);
            box-shadow: 0 0 30px rgba(0, 242, 255, 0.1);
            transform: translateY(-5px);
        }

        .mono { font-family: 'JetBrains Mono', monospace; }

        .btn-cyber {
            background: rgba(0, 242, 255, 0.05);
            border: 1px solid rgba(0, 242, 255, 0.2);
            color: var(--cyber-cyan);
            transition: all 0.3s;
        }

        .btn-cyber:hover {
            background: var(--cyber-cyan);
            color: #000;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.4);
        }

        .category-tag {
            background: rgba(0, 242, 255, 0.1);
            color: var(--cyber-cyan);
            border: 1px solid rgba(0, 242, 255, 0.2);
            font-size: 9px;
            padding: 4px 12px;
            border-radius: 6px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="p-6 md:p-16">

    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-8">
            <div class="space-y-2">
                <div class="flex items-center gap-3">
                    <span class="h-[1px] w-12 bg-cyan-500"></span>
                    <span class="text-cyan-400 text-[10px] font-bold uppercase tracking-[0.4em] mono">Data Berita</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold tracking-tighter mt-4 text-white uppercase italic">
                    Arsip<span class="text-cyan-500">Baru</span>
                </h2>
                <p class="text-slate-500 font-medium text-sm max-w-md mt-4 mono">
                    Hak_Akses: <span class="text-slate-300">ADMINISTRATOR</span> <br>
                    Node: SDN Cibinong 2
                </p>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.dashboard') }}" class="btn-cyber px-6 py-3 rounded-xl flex items-center gap-3 text-[11px] font-bold uppercase tracking-widest mono">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Kembali
                </a>

                <a href="{{ route('admin.berita.create') }}" class="bg-cyan-500 text-black px-6 py-3 rounded-xl flex items-center gap-3 text-[11px] font-bold uppercase tracking-widest mono hover:bg-white transition-all shadow-[0_0_20px_rgba(0,242,255,0.3)]">
                    <span class="text-lg">+</span>
                    Tambah Berita
                </a>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-12 p-5 bg-cyan-500/10 border border-cyan-500/30 rounded-2xl text-cyan-400 text-[10px] font-bold tracking-[0.2em] flex items-center uppercase mono shadow-[0_0_15px_rgba(0,242,255,0.05)]">
            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-4 animate-pulse"></span>
            STATUS: SUCCESS // {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($beritas as $item)
            <div class="cyber-card group overflow-hidden">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset($item->gambar) }}"
                         class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-all duration-700 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x300?text=System_Error'">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#050a10] via-transparent to-transparent"></div>

                    <div class="absolute inset-0 bg-cyan-900/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center backdrop-blur-sm">
                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Sistem: Konfirmasi penghapusan data?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg text-[9px] font-bold uppercase tracking-widest hover:bg-white hover:text-red-600 transition-all shadow-xl mono">
                                Hapus
                            </button>
                        </form>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-black/80 backdrop-blur-md border border-cyan-500/30 text-[8px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-md text-cyan-400 mono">
                            Log_#{{ $loop->iteration }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <div class="mb-4">
                        <span class="category-tag mono uppercase font-bold">{{ $item->kategori ?? 'General' }}</span>
                    </div>
                    <h3 class="font-bold text-sm text-white mb-6 line-clamp-2 leading-relaxed tracking-wide h-10 group-hover:text-cyan-400 transition-colors uppercase">
                        {{ $item->judul }}
                    </h3>

                    <div class="flex items-center justify-between border-t border-white/5 pt-4">
                        <p class="text-[9px] font-bold text-slate-500 uppercase tracking-widest mono">
                            [{{ $item->created_at->format('d.m.Y') }}]
                        </p>
                        <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_8px_#00f2ff]"></span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-32 text-center rounded-[40px] border border-dashed border-cyan-500/20 bg-cyan-500/5">
                <div class="inline-block p-10 bg-cyan-500/10 rounded-full mb-6 border border-cyan-500/20 shadow-[0_0_30px_rgba(0,242,255,0.1)]">
                    <svg class="w-12 h-12 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white tracking-[0.2em] uppercase mono">Tidak Ada berita tersedia</h3>
                <p class="text-slate-500 mt-4 text-[10px] font-bold uppercase tracking-widest mono">Database berita kosong. Inisialisasi input diperlukan.</p>
                <a href="{{ route('admin.berita.create') }}" class="mt-10 inline-block px-10 py-4 border border-cyan-500 text-cyan-400 font-bold text-[10px] uppercase tracking-widest rounded-xl hover:bg-cyan-500 hover:text-black transition-all mono">
                    Buat Berita Baru Untuk Di Publish
                </a>
            </div>
            @endforelse
        </div>

        <footer class="mt-32 mb-10 text-center opacity-30">
            <p class="text-[8px] font-bold tracking-[0.8em] text-slate-500 uppercase mono">Terminal.v2 // Data_Registry • SDN_CIBINONG_02 • 2026</p>
        </footer>
    </div>
</body>
</html>
