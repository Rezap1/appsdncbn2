<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registri_Prestasi | SDN Cibinong 2</title>
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
        }

        .cyber-container {
            background: rgba(13, 21, 32, 0.7);
            backdrop-filter: blur(15px);
            border-radius: 32px;
            border: 1px solid rgba(0, 242, 255, 0.1);
            box-shadow: 0 50px 100px rgba(0,0,0,0.8);
        }

        .input-cyber {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 242, 255, 0.1);
            color: #fff;
            border-radius: 14px;
            transition: all 0.4s ease;
        }

        .input-cyber:focus {
            border-color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.03);
            outline: none;
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.1);
        }

        .mono { font-family: 'JetBrains Mono', monospace; }

        .btn-cyber-primary {
            background: var(--cyber-cyan);
            color: #000;
            font-weight: 800;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.3);
            transition: all 0.3s;
        }

        .btn-cyber-primary:hover {
            background: #fff;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .achievement-row {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s ease;
        }

        .achievement-row:hover {
            background: rgba(0, 242, 255, 0.03);
            border-color: var(--cyber-cyan);
            transform: translateX(5px);
        }

        ::-webkit-calendar-picker-indicator { filter: invert(1) hue-rotate(180deg); }
    </style>
</head>
<body class="p-4 md:p-10 flex items-center justify-center min-h-screen">

    <div class="max-w-7xl w-full cyber-container overflow-hidden flex flex-col md:flex-row min-h-[85vh]">

        <div class="w-full md:w-[40%] p-10 md:p-12 bg-black/40 border-r border-white/5 flex flex-col">
            <div class="mb-10">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1px] bg-cyan-500"></span>
                    <span class="text-[9px] font-bold tracking-[0.6em] text-cyan-400 uppercase mono">Input_Data</span>
                </div>
                <h2 class="text-3xl font-bold text-white leading-tight uppercase italic">Prestasi.<span class="text-cyan-500">Baru</span></h2>
            </div>

            <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 block mono">Judul</label>
                    <input type="text" name="judul" required class="w-full p-4 input-cyber text-sm mono" placeholder="Masukkan nama prestasi...">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 block mono">Kategori</label>
                        <select name="kategori" class="w-full p-4 input-cyber text-sm appearance-none mono">
                            <option value="Akademik">Akademik</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 block mono">Stempel_Waktu</label>
                        <input type="date" name="tanggal_prestasi" required class="w-full p-4 input-cyber text-sm mono">
                    </div>
                </div>

                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 block mono">Bingkai_Visual</label>
                    <div class="relative group border border-dashed border-cyan-500/20 rounded-xl p-8 text-center hover:bg-cyan-500/5 transition-all">
                        <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer z-10">
                        <svg class="w-6 h-6 text-cyan-500/40 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <p class="text-[9px] font-bold text-slate-500 uppercase mono">Lampirkan_Foto.jpg</p>
                    </div>
                </div>

                <div>
                    <label class="text-[10px] font-bold uppercase tracking-widest text-slate-500 mb-2 block mono">Deskripsi_Metadata</label>
                    <textarea name="deskripsi" rows="3" required class="w-full p-4 input-cyber text-sm mono" placeholder="Ringkasan singkat..."></textarea>
                </div>

                <button type="submit" class="w-full py-5 btn-cyber-primary rounded-xl uppercase tracking-[0.3em] text-[11px] mono italic">
                    Eksekusi_Arsip
                </button>
            </form>
        </div>

        <div class="flex-1 p-10 md:p-12 bg-transparent overflow-y-auto relative">

            <div class="flex justify-between items-center mb-16">
                <div>
                    <h3 class="text-white font-bold text-xl tracking-tight uppercase italic">Lihat.<span class="text-cyan-500">Registri</span></h3>
                    <p class="text-[9px] text-slate-500 font-bold tracking-widest uppercase mono">Node: BASIS_DATA_SDNC2</p>
                </div>

                <a href="{{ route('admin.dashboard') }}" class="btn-back-cyber border border-white/10 px-5 py-2.5 rounded-xl text-[10px] font-bold mono text-slate-400 hover:text-cyan-400 hover:border-cyan-500 transition-all flex items-center gap-3">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali
                </a>
            </div>

            <div class="grid grid-cols-1 gap-4">
                @forelse($prestasis as $p)
                <div class="achievement-row p-5 rounded-2xl flex items-center gap-6">
                    <div class="w-20 h-20 bg-black rounded-xl overflow-hidden border border-cyan-500/10 shrink-0 shadow-[0_0_15px_rgba(0,242,255,0.05)]">
                        @if($p->gambar)
                            <img src="{{ asset('uploads/prestasi/'.$p->gambar) }}" class="w-full h-full object-cover opacity-70 hover:opacity-100 transition-all duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-[8px] text-slate-800 font-bold mono">TANPA_GMBR</div>
                        @endif
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-[8px] font-bold text-cyan-400 uppercase border border-cyan-500/30 px-2 py-0.5 rounded-md mono">
                                {{ $p->kategori }}
                            </span>
                            <span class="text-[9px] text-slate-600 mono">{{ \Carbon\Carbon::parse($p->tanggal_prestasi)->format('d.m.Y') }}</span>
                        </div>
                        <h4 class="text-white font-bold text-sm tracking-wide uppercase">{{ $p->judul }}</h4>
                    </div>

                    <form action="{{ route('admin.prestasi.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Sistem: Hapus permanen data ini?')">
                        @csrf @method('DELETE')
                        <button class="p-3 text-slate-700 hover:text-red-500 hover:bg-red-500/10 rounded-xl transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </form>
                </div>
                @empty
                <div class="h-64 flex flex-col items-center justify-center border border-dashed border-white/5 rounded-3xl bg-white/[0.01]">
                    <div class="w-12 h-12 rounded-full border border-slate-800 flex items-center justify-center mb-4">
                        <span class="text-slate-800 text-xl font-bold mono">!</span>
                    </div>
                    <p class="text-[10px] font-bold tracking-[0.4em] text-slate-700 uppercase mono italic">Arsip_Kosong_Terdeteksi</p>
                </div>
                @endforelse
            </div>

            <footer class="mt-20 text-center opacity-30">
                <p class="text-[8px] font-bold tracking-[1em] text-slate-600 uppercase mono italic">Registri.v2 // 2026 // SDN_CIBINONG_02</p>
            </footer>
        </div>
    </div>

</body>
</html>
