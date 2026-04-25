<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurasi Eksibit | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #050505; /* Black Obsidian */
            min-height: 100vh;
            color: #d1d5db;
        }
        .form-museum {
            background: #0a0a0a;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 50px 100px rgba(0,0,0,0.9);
        }
        .input-museum {
            background: #111;
            border: 1px solid #222;
            color: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-museum:focus {
            border-color: #d4af37;
            background: #161616;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.05);
            outline: none;
        }
        .gold-accent { color: #d4af37; }
        .btn-archive {
            background: linear-gradient(to bottom right, #d4af37, #b8860b);
            color: #000;
        }
        /* Tombol Kembali yang lebih tegas */
        .btn-back {
            background: #111;
            border: 1px solid #333;
            color: #fff;
            padding: 12px 20px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 10px;
            letter-spacing: 0.2em;
            transition: all 0.3s;
        }
        .btn-back:hover {
            border-color: #d4af37;
            color: #d4af37;
        }
    </style>
</head>
<body class="p-6 md:p-12 flex flex-col items-center justify-center">

    <div class="max-w-4xl w-full">
        <div class="mb-10">
            <a href="{{ route('admin.galeri.index') }}" class="btn-back inline-flex items-center gap-3 uppercase group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Album
            </a>
        </div>

        <div class="form-museum rounded-[40px] overflow-hidden">
            <div class="p-10 md:p-14 border-b border-white/5 relative">
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-[1px] bg-amber-700"></span>
                        <span class="gold-accent text-[9px] font-black uppercase tracking-[0.4em]">Curator Workspace</span>
                    </div>
                    <h2 class="text-4xl font-light text-white tracking-tighter uppercase">Tambah <b class="font-extrabold gold-accent">Foto Baru</b></h2>
                    <p class="text-slate-500 font-medium mt-3 text-sm italic">Siapkan visual terbaik untuk dipamerkan di Galeri sekolah.</p>
                </div>
            </div>

            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-14 space-y-10">
                @csrf

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-600 ml-1">Nama Judul Karya / Kegiatan</label>
                    <input type="text" name="judul" placeholder="Contoh: Gebyar Seni Budaya 2026"
                        class="w-full px-8 py-5 rounded-2xl input-museum font-bold text-lg placeholder:text-zinc-800" required>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-600 ml-1">Frame Visual (Foto)</label>
                    <div class="relative group h-72 w-full border border-dashed border-zinc-800 rounded-[30px] hover:border-amber-600/50 transition-all duration-500 flex flex-col items-center justify-center cursor-pointer overflow-hidden bg-black/40">
                        <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer z-30" onchange="previewImage(this)" required>

                        <div id="preview-placeholder" class="text-center transition duration-500">
                            <div class="w-16 h-16 bg-zinc-900 text-zinc-700 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-white/5 shadow-inner">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-black text-zinc-500 uppercase tracking-[0.3em]">Drop Image into Frame</p>
                            <p class="text-[8px] text-zinc-700 mt-2 font-bold uppercase">JPG, PNG, WEBP (Max 2MB)</p>
                        </div>
                        <img id="img-preview" class="absolute inset-0 w-full h-full object-cover hidden z-20 pointer-events-none transition-all duration-700 brightness-75">
                    </div>
                </div>

                <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-amber-800"></div>
                        <p class="text-[9px] text-zinc-600 font-bold uppercase tracking-widest leading-relaxed">
                            Pastikan resolusi gambar <br> jernih dan profesional.
                        </p>
                    </div>

                    <button type="submit" class="w-full md:w-auto px-12 py-5 btn-archive rounded-2xl font-black text-[11px] uppercase tracking-[0.4em] shadow-2xl transition-all active:scale-95 group flex items-center justify-center gap-4">
                        Arsipkan Karya
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-10 text-center text-[8px] font-black tracking-[1em] text-zinc-800 uppercase italic">SDN Cibinong 2 • Internal Curator System</p>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('img-preview');
            const placeholder = document.getElementById('preview-placeholder');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('opacity-0');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
