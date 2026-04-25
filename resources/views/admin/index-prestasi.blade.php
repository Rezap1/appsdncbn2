<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Prestasi | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #050505;
            color: #d1d5db;
        }
        .museum-container {
            background: #0a0a0a;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 40px 100px rgba(0,0,0,0.9);
        }
        .input-museum {
            background: #111111;
            border: 1px solid #222;
            color: #fff;
            border-radius: 12px;
            transition: all 0.4s ease;
        }
        .input-museum:focus {
            border-color: #d4af37;
            background: #161616;
            outline: none;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.1);
        }
        .spotlight-card {
            background: linear-gradient(145deg, #0f0f0f, #050505);
            border: 1px solid rgba(255, 255, 255, 0.02);
            transition: all 0.5s ease;
        }
        .spotlight-card:hover {
            border-color: rgba(212, 175, 55, 0.3);
            transform: translateY(-4px);
        }
        .gold-accent { color: #d4af37; }
        .btn-gold {
            background: linear-gradient(to bottom right, #d4af37, #b8860b);
            color: #000;
            font-weight: 800;
        }
        /* Tombol Dashboard Baru agar mudah dikenali */
        .btn-back-dashboard {
            background: #1a1a1a;
            border: 1px solid #333;
            padding: 10px 18px;
            border-radius: 12px;
            color: #fff;
            font-weight: 700;
            font-size: 11px;
            letter-spacing: 0.1em;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .btn-back-dashboard:hover {
            background: #222;
            border-color: #fbbf24;
            color: #fbbf24;
            box-shadow: 0 4px 15px rgba(251, 191, 36, 0.1);
        }
        ::-webkit-calendar-picker-indicator { filter: invert(0.8); }
    </style>
</head>
<body class="p-4 md:p-10 flex items-center justify-center min-h-screen">

    <div class="max-w-7xl w-full museum-container overflow-hidden flex flex-col md:flex-row min-h-[85vh]">

        <div class="w-full md:w-[40%] p-10 md:p-12 bg-[#070707] border-r border-white/5 flex flex-col">
            <div class="mb-10">
                <span class="text-[9px] font-bold tracking-[0.6em] gold-accent uppercase block mb-3">Kelola Prestasi</span>
                <h2 class="text-3xl font-light text-white leading-tight">Kurasi <br><b class="font-extrabold tracking-tighter uppercase">Penghargaan</b></h2>
                <div class="w-12 h-[2px] bg-amber-600 mt-6"></div>
            </div>

            <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-600 mb-2 block ml-1">Judul Koleksi</label>
                    <input type="text" name="judul" required class="w-full p-4 input-museum text-sm" placeholder="Nama prestasi...">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-slate-600 mb-2 block ml-1">Kategori</label>
                        <select name="kategori" class="w-full p-4 input-museum text-sm appearance-none">
                            <option value="Akademik">Akademik</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-slate-600 mb-2 block ml-1">Tahun Terbit</label>
                        <input type="date" name="tanggal_prestasi" required class="w-full p-4 input-museum text-sm">
                    </div>
                </div>

                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-600 mb-2 block ml-1">Visual (Gambar)</label>
                    <div class="relative group border border-dashed border-zinc-800 rounded-xl p-6 text-center hover:bg-zinc-900/50 transition-all">
                        <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer z-10">
                        <p class="text-[10px] font-bold text-zinc-500 uppercase">Klik untuk tambah Foto</p>
                    </div>
                </div>

                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-600 mb-2 block ml-1">Narasi</label>
                    <textarea name="deskripsi" rows="3" required class="w-full p-4 input-museum text-sm" placeholder="Detail singkat..."></textarea>
                </div>

                <button type="submit" class="w-full py-4 btn-gold rounded-xl transform active:scale-95 shadow-2xl uppercase tracking-widest">
                    ARSIPKAN PRESTASI
                </button>
            </form>
        </div>

        <div class="flex-1 p-10 md:p-12 bg-black overflow-y-auto relative">

            <div class="flex justify-between items-center mb-12">
                <div>
                    <h3 class="text-white font-bold text-lg tracking-tight">Koleksi Terdaftar</h3>
                    <p class="text-[10px] gold-accent font-bold tracking-widest uppercase">Digital Archives SDN Cibinong 2</p>
                </div>

                <a href="{{ route('admin.dashboard') }}" class="btn-back-dashboard">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    DASHBOARD
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6">
                @forelse($prestasis as $p)
                <div class="spotlight-card p-4 rounded-2xl flex items-center gap-6">
                    <div class="w-24 h-24 bg-[#050505] rounded-lg overflow-hidden border border-white/5 shrink-0">
                        @if($p->gambar)
                            <img src="{{ asset('uploads/prestasi/'.$p->gambar) }}" class="w-full h-full object-cover opacity-60 hover:opacity-100 transition-opacity duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-[10px] text-zinc-800 font-bold italic">NO FRAME</div>
                        @endif
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-[8px] font-black gold-accent uppercase border border-amber-900/50 px-2 py-0.5 rounded">
                                {{ $p->kategori }}
                            </span>
                        </div>
                        <h4 class="text-zinc-100 font-bold text-sm tracking-wide mb-1">{{ $p->judul }}</h4>
                        <p class="text-zinc-600 text-[10px] uppercase font-bold tracking-tighter">
                            Waktu: {{ \Carbon\Carbon::parse($p->tanggal_prestasi)->format('d M Y') }}
                        </p>
                    </div>

                    <form action="{{ route('admin.prestasi.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus dari arsip?')">
                        @csrf @method('DELETE')
                        <button class="p-3 text-zinc-700 hover:text-red-500 transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </form>
                </div>
                @empty
                <div class="h-64 flex flex-col items-center justify-center border border-dashed border-zinc-900 rounded-3xl">
                    <p class="text-xs font-bold tracking-[0.5em] text-zinc-800 uppercase italic">Belum ada koleksi</p>
                </div>
                @endforelse
            </div>

            <footer class="mt-20 text-center opacity-20">
                <p class="text-[8px] font-black tracking-[1em] text-zinc-400 uppercase italic">Established 2026 • SD Cibinong 2</p>
            </footer>
        </div>
    </div>

</body>
</html>
