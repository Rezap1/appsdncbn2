<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Berita | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #050505; /* Deep Museum Black */
            min-height: 100vh;
            color: #d1d5db;
        }
        .museum-card {
            background: #0a0a0a;
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 30px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .museum-card:hover {
            border-color: rgba(212, 175, 55, 0.3);
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.8);
        }
        .gold-text { color: #d4af37; }
        .gold-gradient {
            background: linear-gradient(to right, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .btn-dashboard {
            background: #111;
            border: 1px solid #333;
            color: #fff;
            padding: 12px 24px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 0.1em;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-dashboard:hover {
            border-color: #d4af37;
            color: #d4af37;
            background: #161616;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.1);
        }
        .btn-add {
            background: linear-gradient(to bottom right, #d4af37, #b8860b);
            color: #000;
            padding: 12px 24px;
            border-radius: 14px;
            font-weight: 800;
            font-size: 12px;
            letter-spacing: 0.05em;
            transition: all 0.3s;
        }
        .btn-add:hover {
            filter: brightness(1.2);
            transform: scale(1.05);
        }
        .empty-state {
            border: 1px dashed rgba(212, 175, 55, 0.2);
            background: rgba(255, 255, 255, 0.01);
        }
        .category-badge {
            background: rgba(212, 175, 55, 0.1);
            color: #d4af37;
            border: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 8px;
            font-weight: 900;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 6px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body class="p-6 md:p-12">

    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-8">
            <div class="space-y-2">
                <div class="flex items-center gap-3">
                    <span class="h-[1px] w-10 bg-amber-700"></span>
                    <span class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">Berita & Dokumentasi</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black tracking-tighter mt-4 gold-gradient italic uppercase">
                    Arsip Berita
                </h2>
                <p class="text-slate-500 font-medium text-sm max-w-md leading-relaxed mt-4">
                    Pusat narasi dan pengumuman digital <span class="text-slate-300 font-bold border-b border-amber-900">SDN Cibinong 2</span>.
                </p>
            </div>

            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.dashboard') }}" class="btn-dashboard uppercase">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.berita.create') }}" class="btn-add flex items-center gap-2 uppercase">
                    <span class="text-lg">+</span>
                    Tulis Berita
                </a>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-12 p-5 bg-amber-950/20 border border-amber-500/20 rounded-2xl text-amber-500 text-xs font-bold tracking-widest flex items-center uppercase">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @forelse($beritas as $item)
            <div class="museum-card overflow-hidden group">
                <div class="relative h-60 overflow-hidden bg-zinc-900">
                    <img src="{{ asset($item->gambar) }}"
                         class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-all duration-700 group-hover:scale-110"
                         onerror="this.src='https://via.placeholder.com/400x300?text=No+Image'">

                    <div class="absolute inset-0 bg-black/80 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col items-center justify-center gap-3">
                        {{-- Tombol Hapus --}}
                        <form action="{{ route('admin.berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus berita ini selamanya?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-red-950/50 text-red-500 border border-red-500/50 px-5 py-2 rounded-lg text-[9px] font-black uppercase tracking-[0.2em] hover:bg-red-500 hover:text-white transition-all">
                                Hapus Berita
                            </button>
                        </form>
                    </div>

                    <div class="absolute top-4 left-4">
                        <span class="bg-black/60 backdrop-blur-md border border-white/10 text-[8px] font-black uppercase tracking-widest px-3 py-1.5 rounded-md text-amber-500">
                            News #{{ $loop->iteration }}
                        </span>
                    </div>
                </div>

                <div class="p-6 border-t border-white/5">
                    <div class="mb-3">
                        <span class="category-badge">{{ $item->kategori ?? 'Informasi' }}</span>
                    </div>
                    <h3 class="font-bold text-sm text-zinc-100 mb-4 line-clamp-2 leading-relaxed tracking-wide h-10">{{ $item->judul }}</h3>

                    <div class="flex items-center justify-between">
                        <p class="text-[9px] font-bold text-zinc-600 uppercase tracking-widest">
                            {{ $item->created_at->translatedFormat('d M Y') }}
                        </p>
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-700/50"></span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-32 text-center empty-state rounded-[40px]">
                <div class="inline-block p-10 bg-white/5 rounded-full mb-6 border border-white/5">
                    <svg class="w-10 h-10 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 2v4a2 2 0 002 2h4" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-zinc-500 tracking-widest uppercase">Arsip Berita Kosong</h3>
                <p class="text-zinc-600 mt-3 text-xs font-medium uppercase tracking-tighter">Narasi sekolah belum ditulis. Mulai buat berita pertama.</p>
                <a href="{{ route('admin.berita.create') }}" class="mt-10 inline-block px-10 py-3 border border-zinc-800 text-zinc-400 font-bold text-[10px] uppercase tracking-widest rounded-xl hover:border-amber-600 hover:text-amber-500 transition-all">
                    Buat Pengunguman & Berita Baru
                </a>
            </div>
            @endforelse
        </div>

        <footer class="mt-32 mb-10 text-center opacity-20">
            <p class="text-[8px] font-black tracking-[1em] text-zinc-400 uppercase italic">Digital Archives • SDN Cibinong 2 • 2026</p>
        </footer>
    </div>
</body>
</html>
