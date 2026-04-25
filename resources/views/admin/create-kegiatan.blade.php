<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Kegiatan | SDN Cibinong 2</title>
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
<body class="p-4 md:p-12 flex flex-col justify-center">
    <div class="max-w-6xl mx-auto w-full">
        <div class="flex items-center justify-between mb-10 px-2">
            <a href="{{ route('admin.dashboard') }}" class="btn-back-museum inline-flex items-center gap-3 uppercase group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Dashboard
            </a>
            <div class="text-right hidden md:block">
                <p class="text-[9px] font-black uppercase tracking-[0.4em] text-zinc-600">Event Documentation</p>
                <p class="text-[11px] font-bold text-zinc-400 mt-1 italic">Setup New Exhibit Entry</p>
            </div>
        </div>

        <div class="form-museum rounded-[40px] overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12">

                <div class="lg:col-span-4 bg-zinc-950 p-10 md:p-14 relative overflow-hidden flex flex-col justify-between border-r border-white/5">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-zinc-900 border border-white/10 rounded-2xl flex items-center justify-center mb-10 shadow-2xl">
                            <svg class="w-7 h-7 gold-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-light text-white leading-tight uppercase tracking-tighter">
                            Catat <br><b class="font-black gold-accent">Agenda Baru</b>
                        </h2>
                        <p class="text-zinc-500 mt-8 font-medium text-sm leading-relaxed italic">
                            Pastikan setiap informasi kegiatan terdokumentasi dengan rapi untuk transparansi publik.
                        </p>
                    </div>

                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-amber-900/10 rounded-full blur-[80px]"></div>

                    <div class="relative z-10 pt-12 lg:pt-0">
                        <div class="flex items-center gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-amber-700 animate-pulse"></div>
                            <span class="text-[8px] font-black tracking-[0.3em] uppercase text-zinc-600">System Ready for Entry</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 p-10 md:p-14 bg-black/20">
                    <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-3">
                                <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-500 ml-1">Nama Kegiatan</label>
                                <input type="text" name="judul" placeholder="Misal: Outbound Kelas 6..."
                                    class="w-full px-6 py-4 rounded-2xl input-museum font-bold text-base placeholder:text-zinc-800" required>
                            </div>

                            <div class="space-y-3">
                                <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-500 ml-1">Tanggal Pelaksanaan</label>
                                <input type="date" name="tanggal_kegiatan"
                                    class="w-full px-6 py-4 rounded-2xl input-museum font-bold text-base" required>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-500 ml-1 text-center block">Foto Sampul Kegiatan</label>
                            <div class="relative group h-56 w-full border border-dashed border-zinc-800 rounded-[30px] hover:border-amber-900 transition-all duration-500 cursor-pointer overflow-hidden bg-black/40 flex flex-col items-center justify-center">
                                <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer z-30" id="imageInput" onchange="previewImage(this)" required>

                                <div id="placeholder-content" class="text-center group-hover:scale-105 transition duration-500">
                                    <div class="w-12 h-12 bg-zinc-900 text-zinc-700 rounded-xl flex items-center justify-center mx-auto mb-4 border border-white/5">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" /></svg>
                                    </div>
                                    <p class="text-[9px] font-black text-zinc-600 uppercase tracking-[0.2em]">Pilih Berkas Foto</p>
                                </div>
                                <img id="imagePreview" class="absolute inset-0 w-full h-full object-cover hidden z-10 brightness-75">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-zinc-500 ml-1 text-center block">Detail Keterangan</label>
                            <textarea name="deskripsi" rows="5" placeholder="Tulis deskripsi jalannya kegiatan secara mendetail..."
                                class="w-full px-8 py-6 rounded-[30px] input-museum font-medium text-zinc-400 text-sm leading-relaxed resize-none placeholder:text-zinc-800" required></textarea>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="w-full group btn-gold py-5 rounded-2xl font-black text-[11px] uppercase tracking-[0.5em] shadow-2xl transition-all active:scale-[0.98] flex items-center justify-center gap-4">
                                Publikasikan Arsip
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const placeholder = document.getElementById('placeholder-content');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
