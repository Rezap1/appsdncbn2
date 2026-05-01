<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Galeri | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:
                radial-gradient(circle at top right, rgba(59,130,246,.15), transparent 35%),
                radial-gradient(circle at bottom left, rgba(30,64,175,.18), transparent 30%),
                #0f172a;
            color:#e2e8f0;
            min-height:100vh;
        }

        .glass-card{
            background:rgba(15,23,42,.72);
            backdrop-filter:blur(14px);
            border:1px solid rgba(148,163,184,.10);
            border-radius:24px;
        }

        .gallery-card{
            background:rgba(15,23,42,.85);
            border:1px solid rgba(148,163,184,.08);
            border-radius:22px;
            overflow:hidden;
            transition:.35s ease;
        }

        .gallery-card:hover{
            transform:translateY(-8px);
            border-color:rgba(59,130,246,.45);
            box-shadow:0 20px 40px rgba(0,0,0,.35);
        }

        .btn-outline{
            background:rgba(30,41,59,.7);
            border:1px solid rgba(148,163,184,.15);
            transition:.25s;
        }

        .btn-outline:hover{
            border-color:#3b82f6;
            color:#93c5fd;
        }

        .btn-primary{
            background:linear-gradient(135deg,#2563eb,#1d4ed8);
            transition:.25s;
        }

        .btn-primary:hover{
            filter:brightness(1.08);
            transform:translateY(-2px);
        }

        ::-webkit-scrollbar{
            width:6px;
        }

        ::-webkit-scrollbar-thumb{
            background:#334155;
            border-radius:20px;
        }
    </style>
</head>
<body class="p-6 md:p-10">

<div class="max-w-7xl mx-auto">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
        <div>
            <p class="text-blue-400 text-sm font-semibold mb-2">Galeri Sekolah</p>
            <h1 class="text-4xl md:text-5xl font-black text-white">
                Kelola Galeri
            </h1>
            <p class="text-slate-400 mt-3">
                Dokumentasi kegiatan & aset visual SDN Cibinong 2
            </p>
        </div>

        <div class="flex gap-3 flex-wrap">
            <a href="{{ route('admin.dashboard') }}"
               class="btn-outline px-6 py-3 rounded-xl font-semibold text-sm text-slate-300 flex items-center gap-2">
                ← Kembali
            </a>

            <a href="{{ route('admin.galeri.create') }}"
               class="btn-primary px-6 py-3 rounded-xl font-semibold text-white flex items-center gap-2 shadow-lg shadow-blue-900/30">
                + Tambah Galeri
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-8 glass-card px-5 py-4 border border-green-500/20 text-green-400 font-medium">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

        @forelse($galeris as $g)
        <div class="gallery-card group">

            <div class="relative h-64 overflow-hidden">
                <img src="{{ asset('uploads/galeri/'.$g->gambar) }}"
                     class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-500">

                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>

                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1 rounded-lg bg-slate-900/80 text-xs font-semibold text-blue-300">
                        #{{ $loop->iteration }}
                    </span>
                </div>

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <form action="{{ route('admin.galeri.destroy', $g->id) }}"
                          method="POST"
                          onsubmit="return confirm('Hapus gambar ini?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="px-5 py-2 rounded-xl bg-red-500 text-white font-semibold hover:bg-red-600 transition">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-bold text-white text-sm truncate mb-2">
                    {{ $g->judul }}
                </h3>

                <div class="flex justify-between items-center text-xs text-slate-400">
                    <span>{{ $g->created_at->format('d M Y') }}</span>
                    <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                </div>
            </div>

        </div>
        @empty
        <div class="col-span-full">
            <div class="glass-card py-24 text-center">
                <h3 class="text-xl font-bold text-slate-300 mb-3">
                    Belum Ada Data Galeri
                </h3>
                <p class="text-slate-500 mb-8">
                    Upload gambar pertama untuk mulai mengisi galeri sekolah.
                </p>

                <a href="{{ route('admin.galeri.create') }}"
                   class="btn-primary px-8 py-3 rounded-xl text-white font-semibold inline-block">
                    Upload Gambar
                </a>
            </div>
        </div>
        @endforelse

    </div>

    <footer class="mt-20 text-center text-sm text-slate-500">
        © 2026 SDN Cibinong 2 — Gallery Management
    </footer>

</div>

</body>
</html>
