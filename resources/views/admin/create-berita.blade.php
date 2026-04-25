<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Berita | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #050505; /* Black Obsidian */
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
        .btn-gold {
            background: linear-gradient(to bottom right, #d4af37, #b8860b);
            color: #000;
        }
        .btn-back-museum {
            background: #111;
            border: 1px solid #333;
            color: #fff;
            padding: 12px 20px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 10px;
            letter-spacing: 0.2em;
            transition: all 0.3s;
        }
        .btn-back-museum:hover {
            border-color: #d4af37;
            color: #d4af37;
        }
    </style>
</head>
<body class="p-4 md:p-12 min-h-screen">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-12 gap-6">
            <a href="{{ route('admin.dashboard') }}" class="btn-back-museum inline-flex items-center gap-3 uppercase group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Dashboard
            </a>

            <div class="flex items-center gap-4 bg-zinc-900/50 px-6 py-3 rounded-2xl border border-white/5 shadow-inner">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-500 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-600"></span>
                </span>
                <span class="text-zinc-500 text-[9px] font-black uppercase tracking-[0.3em]">Institutional Editor</span>
            </div>
        </div>

        <div class="form-museum rounded-[40px] overflow-hidden">
            <div class="p-10 md:p-16 border-b border-white/5 relative bg-gradient-to-br from-zinc-950 to-transparent">
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-[1px] bg-amber-800"></span>
                        <span class="gold-accent text-[9px] font-black uppercase tracking-[0.4em]">Press Release</span>
                    </div>
                    <h2 class="text-5xl font-light text-white tracking-tighter uppercase">Tulis <b class="font-extrabold gold-accent">Berita</b></h2>
                    <p class="text-zinc-500 mt-5 font-medium text-base italic max-w-2xl text-balance">Sampaikan kabar perkembangan dan pencapaian SDN Cibinong 2 ke jendela dunia.</p>
                </div>
                <div class="absolute -top-20 -right-20 w-80 h-80 bg-amber-600/5 rounded-full blur-[100px]"></div>
            </div>

            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-16 space-y-12">
                @csrf

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-600 ml-2">Headlines / Judul Utama</label>
                    <input type="text" name="judul" placeholder="Ketikkan judul berita di sini..."
                        class="w-full bg-transparent border-b border-zinc-800 py-6 text-3xl md:text-4xl font-light text-white placeholder:text-zinc-900 focus:border-amber-700 outline-none transition-all duration-700" required>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    <div class="lg:col-span-5 space-y-4">
                        <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-600 ml-1 block text-center">Visual Utama</label>
                        <div class="group relative h-80 w-full rounded-[35px] border border-dashed border-zinc-800 hover:border-amber-900/50 hover:bg-white/[0.02] transition-all duration-700 overflow-hidden flex flex-col items-center justify-center cursor-pointer bg-black/40 shadow-inner">
                            <input type="file" name="gambar" class="absolute inset-0 opacity-0 z-30 cursor-pointer" onchange="previewFile(this)" required>

                            <div id="dropzone-text" class="text-center transition duration-500">
                                <div class="w-14 h-14 bg-zinc-900 text-zinc-700 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-white/5">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="text-[9px] font-black text-zinc-600 uppercase tracking-widest px-4 leading-relaxed">Ketuk untuk Mengunggah Visual</p>
                            </div>
                            <img id="preview" class="absolute inset-0 w-full h-full object-cover hidden z-10 brightness-75">
                        </div>
                    </div>

                    <div class="lg:col-span-7 space-y-4">
                        <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-600 ml-1">Naskah Berita</label>
                        <div class="relative group">
                            <textarea name="isi" rows="12" placeholder="Tuliskan narasi berita Anda secara mendalam..."
                                class="w-full p-10 rounded-[40px] input-museum outline-none transition-all font-medium leading-[1.8] text-zinc-400 resize-none text-sm shadow-inner" required></textarea>
                            <div class="absolute bottom-8 right-10 text-[8px] font-black text-zinc-800 uppercase tracking-widest pointer-events-none group-focus-within:text-amber-900 transition">Institutional Archive</div>
                        </div>
                    </div>
                </div>

                <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-10">
                    <div class="flex items-center gap-4 text-zinc-600 italic text-[10px] font-semibold uppercase tracking-widest">
                        <svg class="w-4 h-4 gold-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z"/></svg>
                        Meta-slug otomatis dari judul
                    </div>

                    <button type="submit" class="w-full md:w-auto px-16 py-5 btn-gold rounded-2xl font-black text-[11px] uppercase tracking-[0.5em] shadow-2xl transition-all active:scale-95 flex items-center justify-center gap-4 group">
                        Terbitkan Jurnal
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-12 text-center text-[8px] font-black tracking-[1.2em] text-zinc-800 uppercase italic">Media Center • SDN Cibinong 2</p>
    </div>

    <script>
        function previewFile(input) {
            const preview = document.getElementById('preview');
            const dropzoneText = document.getElementById('dropzone-text');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    dropzoneText.classList.add('opacity-0');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
