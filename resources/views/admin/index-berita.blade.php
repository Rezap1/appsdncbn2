<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Berita | SDN Cibinong 2</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:#071224;
            color:#e2e8f0;
        }

        .glass{
            background:rgba(15,23,42,0.65);
            backdrop-filter:blur(16px);
            border:1px solid rgba(148,163,184,0.08);
        }

        .card{
            background:linear-gradient(180deg,#0f172a,#111827);
            border:1px solid rgba(148,163,184,0.08);
            transition:.3s ease;
        }

        .card:hover{
            transform:translateY(-6px);
            border-color:rgba(59,130,246,.35);
            box-shadow:0 20px 40px rgba(0,0,0,.25);
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

    {{-- Header --}}
    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-6 mb-10">
        <div>
            <p class="text-sm text-blue-400 font-semibold mb-2">
                Admin / Berita Management
            </p>

            <h1 class="text-4xl md:text-5xl font-black text-white">
                Kelola Berita
            </h1>

            <p class="text-slate-400 mt-3 max-w-xl">
                Atur seluruh berita, pengumuman, dan artikel website sekolah secara profesional.
            </p>
        </div>

        <div class="flex gap-3 flex-wrap">
            <a href="{{ route('admin.dashboard') }}"
               class="px-6 py-3 rounded-2xl glass text-slate-300 hover:text-white transition">
                ← Dashboard
            </a>

            <a href="{{ route('admin.berita.create') }}"
               class="px-6 py-3 rounded-2xl bg-blue-600 hover:bg-blue-500 text-white font-semibold shadow-lg shadow-blue-600/20 transition">
                + Tambah Berita
            </a>
        </div>
    </div>

    {{-- Alert --}}
    @if(session('success'))
    <div class="mb-8 p-5 rounded-2xl bg-green-500/10 border border-green-500/20 text-green-400">
        {{ session('success') }}
    </div>
    @endif

    {{-- Grid Berita --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

        @forelse($beritas as $item)
        <div class="card rounded-3xl overflow-hidden group">

            {{-- Image --}}
            <div class="relative h-56 overflow-hidden">
                <img src="{{ asset($item->gambar) }}"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                     onerror="this.src='https://via.placeholder.com/400x300?text=No+Image'">

                <div class="absolute inset-0 bg-gradient-to-t from-[#071224] via-[#071224]/30 to-transparent"></div>

                {{-- Category --}}
                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1 rounded-xl text-xs font-semibold bg-blue-600/90 text-white">
                        {{ $item->kategori ?? 'Berita' }}
                    </span>
                </div>
            </div>

            {{-- Content --}}
            <div class="p-6">

                <p class="text-xs text-slate-500 mb-3">
                    {{ $item->created_at->format('d M Y') }}
                </p>

                <h3 class="text-lg font-bold text-white mb-4 line-clamp-2 min-h-[56px]">
                    {{ $item->judul }}
                </h3>

                <div class="flex gap-3 pt-4 border-t border-slate-700/50">

                    <a href="{{ route('admin.berita.create', $item->id) }}"
                       class="flex-1 text-center py-3 rounded-2xl bg-blue-600/10 text-blue-400 hover:bg-blue-600 hover:text-white transition font-semibold">
                        Edit
                    </a>

                    <form action="{{ route('admin.berita.destroy', $item->id) }}"
                          method="POST"
                          class="flex-1"
                          onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="w-full py-3 rounded-2xl bg-red-500/10 text-red-400 hover:bg-red-500 hover:text-white transition font-semibold">
                            Hapus
                        </button>
                    </form>

                </div>
            </div>
        </div>
        @empty

        {{-- Empty State --}}
        <div class="col-span-full">
            <div class="glass rounded-3xl p-16 text-center">
                <div class="text-6xl mb-5">📰</div>

                <h3 class="text-2xl font-bold text-white mb-3">
                    Belum Ada Berita
                </h3>

                <p class="text-slate-400 mb-8">
                    Mulai publikasikan berita atau pengumuman pertama untuk website sekolah.
                </p>

                <a href="{{ route('admin.berita.create') }}"
                   class="inline-block px-8 py-4 bg-blue-600 hover:bg-blue-500 rounded-2xl text-white font-semibold transition">
                    + Tambah Berita Baru
                </a>
            </div>
        </div>

        @endforelse

    </div>

    {{-- Footer --}}
    <footer class="mt-14 pt-8 border-t border-slate-800 text-center">
        <p class="text-slate-500 text-sm">
            © 2026 SDN Cibinong 2 — News Management Panel
        </p>
    </footer>

</div>

</body>
</html>
