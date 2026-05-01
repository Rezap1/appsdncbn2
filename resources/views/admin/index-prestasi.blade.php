<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Prestasi | SDN Cibinong 2</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:
                radial-gradient(circle at top right, rgba(37,99,235,.08), transparent 35%),
                radial-gradient(circle at bottom left, rgba(59,130,246,.06), transparent 30%),
                #0B1120;
            color:#e2e8f0;
        }

        .glass{
            background:rgba(15,23,42,.72);
            backdrop-filter:blur(18px);
            border:1px solid rgba(148,163,184,.10);
        }

        .input-dark{
            background:#0F172A;
            border:1px solid rgba(148,163,184,.12);
            color:white;
            transition:.3s;
        }

        .input-dark:focus{
            outline:none;
            border-color:#3B82F6;
            box-shadow:0 0 0 4px rgba(59,130,246,.10);
        }

        .achievement-card{
            background:rgba(15,23,42,.55);
            border:1px solid rgba(148,163,184,.08);
            transition:.3s;
        }

        .achievement-card:hover{
            border-color:rgba(59,130,246,.35);
            transform:translateY(-2px);
        }

        ::-webkit-calendar-picker-indicator{
            filter:invert(1);
        }
    </style>
</head>

<body class="p-4 md:p-8 min-h-screen">

<div class="max-w-7xl mx-auto">

    <div class="glass rounded-[32px] overflow-hidden grid lg:grid-cols-5">

        <!-- FORM INPUT -->
        <div class="lg:col-span-2 p-8 md:p-10 border-r border-slate-700/40">

            <div class="mb-10">
                <p class="text-blue-400 text-xs font-bold uppercase tracking-[0.3em] mb-3">
                    Input Prestasi
                </p>

                <h2 class="text-3xl font-black text-white leading-tight">
                    Tambah Prestasi Baru
                </h2>

                <p class="text-slate-400 mt-3 text-sm">
                    Input data prestasi siswa atau sekolah untuk ditampilkan pada website.
                </p>
            </div>

            <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">Judul Prestasi</label>
                    <input type="text" name="judul" required
                        class="w-full px-5 py-4 rounded-2xl input-dark"
                        placeholder="Masukkan nama prestasi...">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-2">Kategori</label>
                        <select name="kategori" class="w-full px-5 py-4 rounded-2xl input-dark">
                            <option value="Akademik">Akademik</option>
                            <option value="Olahraga">Olahraga</option>
                            <option value="Seni">Seni</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-2">Tanggal</label>
                        <input type="date" name="tanggal_prestasi" required
                            class="w-full px-5 py-4 rounded-2xl input-dark">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">Upload Gambar</label>

                    <div class="relative border-2 border-dashed border-slate-700 rounded-2xl p-8 text-center hover:border-blue-500 transition">
                        <input type="file" name="gambar"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10">

                        <div>
                            <div class="text-3xl mb-3">🖼️</div>
                            <p class="text-sm text-slate-400 font-medium">
                                Klik untuk upload gambar
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-300 mb-2">Deskripsi</label>
                    <textarea name="deskripsi" rows="4" required
                        class="w-full px-5 py-4 rounded-2xl input-dark resize-none"
                        placeholder="Ringkasan singkat..."></textarea>
                </div>

                <button type="submit"
                    class="w-full py-4 rounded-2xl bg-blue-600 hover:bg-blue-500 text-white font-bold transition shadow-lg shadow-blue-600/20">
                    Simpan Prestasi
                </button>
            </form>
        </div>

        <!-- LIST PRESTASI -->
        <div class="lg:col-span-3 p-8 md:p-10">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                <div>
                    <h3 class="text-2xl font-black text-white">
                        Daftar Prestasi
                    </h3>
                    <p class="text-slate-400 text-sm mt-1">
                        Data prestasi yang telah dipublikasikan
                    </p>
                </div>

                <a href="{{ route('admin.dashboard') }}"
                   class="px-5 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-sm font-semibold transition">
                    ← Kembali Dashboard
                </a>
            </div>

            <div class="space-y-4 max-h-[700px] overflow-y-auto pr-2">

                @forelse($prestasis as $p)
                <div class="achievement-card rounded-2xl p-5 flex items-center gap-5">

                    <div class="w-20 h-20 rounded-2xl overflow-hidden bg-slate-900 border border-slate-700 shrink-0">
                        @if($p->gambar)
                            <img src="{{ asset('uploads/prestasi/'.$p->gambar) }}"
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-600 text-xs">
                                No Image
                            </div>
                        @endif
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <span class="px-3 py-1 rounded-lg bg-blue-500/10 text-blue-400 text-xs font-bold">
                                {{ $p->kategori }}
                            </span>

                            <span class="text-xs text-slate-500">
                                {{ \Carbon\Carbon::parse($p->tanggal_prestasi)->format('d M Y') }}
                            </span>
                        </div>

                        <h4 class="font-bold text-white text-lg">
                            {{ $p->judul }}
                        </h4>

                        <p class="text-sm text-slate-400 mt-1 line-clamp-2">
                            {{ $p->deskripsi }}
                        </p>
                    </div>

                    <form action="{{ route('admin.prestasi.destroy', $p->id) }}" method="POST"
                          onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')

                        <button class="p-3 rounded-xl hover:bg-red-500/10 text-slate-500 hover:text-red-400 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </form>
                </div>
                @empty
                <div class="h-64 rounded-3xl border border-dashed border-slate-700 flex flex-col items-center justify-center">
                    <div class="text-5xl mb-4">🏆</div>
                    <p class="font-bold text-slate-400">Belum ada data prestasi</p>
                    <p class="text-sm text-slate-500 mt-1">Tambahkan prestasi pertama sekarang.</p>
                </div>
                @endforelse

            </div>

        </div>

    </div>

</div>

</body>
</html>
