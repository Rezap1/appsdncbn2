<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Guru</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body{
            background:#020617;
            color:#e2e8f0;
            font-family:Inter,sans-serif;
        }

        .glass{
            background:rgba(15,23,42,.7);
            backdrop-filter:blur(12px);
            border:1px solid rgba(148,163,184,.08);
        }

        .input{
            background:#020617;
            border:1px solid #334155;
            color:white;
        }

        .input:focus{
            border-color:#3b82f6;
            box-shadow:0 0 10px rgba(59,130,246,.2);
            outline:none;
        }

        .card-hover{
            transition:.3s;
        }

        .card-hover:hover{
            transform:translateY(-3px);
            border-color:#3b82f6;
        }

        ::-webkit-scrollbar{width:5px;}
        ::-webkit-scrollbar-thumb{background:#334155;border-radius:20px;}
    </style>
</head>

<body class="p-6 md:p-10">

<div class="max-w-7xl mx-auto space-y-10">

    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
        <div>
            <h1 class="text-4xl font-black text-white tracking-tight">
                Manajemen Guru
            </h1>
            <p class="text-slate-400 text-sm mt-1">
                Kelola data tenaga pengajar sekolah secara profesional
            </p>
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-sm font-bold">
            ← Dashboard
        </a>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
    <div class="p-4 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-sm font-semibold">
        {{ session('success') }}
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        {{-- FORM TAMBAH --}}
        <div class="glass p-6 rounded-3xl space-y-6">

            <h3 class="text-lg font-bold text-white">
                + Tambah Guru
            </h3>

            <form action="{{ route('admin.guru.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <input type="text" name="nama"
                    placeholder="Nama Guru"
                    class="input w-full p-3 rounded-xl">

                <input type="text" name="jabatan"
                    placeholder="Mata Pelajaran"
                    class="input w-full p-3 rounded-xl">

                <input type="text" name="whatsapp"
                    placeholder="No WhatsApp"
                    class="input w-full p-3 rounded-xl">

                <input type="email" name="email"
                    placeholder="Email"
                    class="input w-full p-3 rounded-xl">

                <input type="text" name="facebook"
                    placeholder="Link Facebook"
                    class="input w-full p-3 rounded-xl">

                <div>
                    <label class="text-xs text-slate-500">Foto Guru</label>
                    <input type="file" name="foto" class="mt-2 text-sm">
                </div>

                <button class="w-full py-3 bg-blue-600 hover:bg-blue-500 rounded-xl font-bold shadow-lg shadow-blue-600/20 transition">
                    Simpan Data
                </button>
            </form>
        </div>

        {{-- LIST GURU --}}
        <div class="lg:col-span-2 space-y-6">

            <div class="flex justify-between items-center">
                <h3 class="text-lg font-bold text-white">
                    Daftar Guru
                </h3>

                <span class="text-xs text-slate-500">
                    Total: {{ count($gurus) }}
                </span>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-h-[650px] overflow-y-auto pr-2">

                @forelse($gurus as $g)
                <div class="glass p-5 rounded-3xl card-hover">

                    <div class="flex items-start gap-4">

                        {{-- FOTO --}}
                        <div class="w-16 h-16 rounded-2xl overflow-hidden bg-slate-800 border border-slate-700">
                            @if($g->foto)
                            <img src="{{ asset($g->foto) }}" class="w-full h-full object-cover">
                            @else
                            <div class="flex items-center justify-center h-full text-slate-600 text-xs">
                                NO IMG
                            </div>
                            @endif
                        </div>

                        {{-- INFO --}}
                        <div class="flex-1">

                            <h4 class="font-bold text-white text-sm">
                                {{ $g->nama }}
                            </h4>

                            <p class="text-xs text-blue-400 font-semibold mt-1">
                                {{ $g->pelajaran }}
                            </p>

                            {{-- KONTAK --}}
                            <div class="mt-3 space-y-1 text-xs text-slate-400">

                                @if($g->whatsapp)
                                <p>📱 {{ $g->whatsapp }}</p>
                                @endif

                                @if($g->email)
                                <p>✉️ {{ $g->email }}</p>
                                @endif

                                @if($g->facebook)
                                <p class="truncate">🌐 {{ $g->facebook }}</p>
                                @endif

                            </div>
                        </div>

                        {{-- ACTION --}}
                        <form action="{{ route('admin.guru.destroy',$g->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="text-red-400 hover:text-red-300 text-xs font-bold">
                                Hapus
                            </button>
                        </form>

                    </div>

                </div>
                @empty
                <div class="col-span-2 text-center py-20 text-slate-500 text-sm">
                    Belum ada data guru
                </div>
                @endforelse

            </div>

        </div>

    </div>

    {{-- FOOTER --}}
    <div class="text-center pt-10 opacity-20">
        <p class="text-xs font-bold tracking-widest">
            SDN CIBINONG 2 • TEACHER MANAGEMENT SYSTEM
        </p>
    </div>

</div>

</body>
</html>
