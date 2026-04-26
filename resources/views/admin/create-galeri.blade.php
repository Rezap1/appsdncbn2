<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input_Visual | SDN Cibinong 2</title>
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
            min-height: 100vh;
        }

        .mono { font-family: 'JetBrains Mono', monospace; }

        .cyber-panel {
            background: rgba(13, 21, 32, 0.7);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 242, 255, 0.1);
            box-shadow: 0 50px 100px rgba(0,0,0,0.8);
            border-radius: 32px;
        }

        .input-cyber {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 242, 255, 0.1);
            color: #fff;
            border-radius: 16px;
            transition: all 0.4s ease;
        }

        .input-cyber:focus {
            border-color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.03);
            outline: none;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.1);
        }

        .btn-cyber-primary {
            background: var(--cyber-cyan);
            color: #000;
            font-weight: 800;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.3);
            transition: all 0.3s;
        }

        .btn-cyber-primary:hover {
            background: #fff;
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
        }

        .btn-back-cyber {
            border: 1px solid rgba(255, 255, 255, 0.05);
            background: rgba(255, 255, 255, 0.02);
            transition: all 0.3s;
        }

        .btn-back-cyber:hover {
            border-color: var(--cyber-cyan);
            color: var(--cyber-cyan);
        }

        .upload-zone {
            border: 1px dashed rgba(0, 242, 255, 0.2);
            background: rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
        }

        .upload-zone:hover {
            border-color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.02);
        }
    </style>
</head>
<body class="p-6 md:p-12 flex flex-col items-center justify-center">

    <div class="max-w-4xl w-full">
        <div class="mb-10">
            <a href="{{ route('admin.galeri.index') }}" class="btn-back-cyber px-6 py-3 rounded-xl text-[10px] font-bold tracking-[0.2em] flex items-center gap-3 mono uppercase group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali_Ke_Album
            </a>
        </div>

        <div class="cyber-panel overflow-hidden">
            <div class="p-10 md:p-14 border-b border-white/5 bg-black/20">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-10 h-[1px] bg-cyan-500"></span>
                    <span class="text-cyan-400 text-[9px] font-bold uppercase tracking-[0.5em] mono">Workspace_Curator</span>
                </div>
                <h2 class="text-4xl font-bold text-white tracking-tight uppercase italic">Input.<span class="text-cyan-500">Visual</span></h2>
                <p class="text-slate-500 font-medium mt-3 text-sm mono uppercase">Registrasi aset digital baru ke dalam arsip sekolah.</p>
            </div>

            <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-14 space-y-10">
                @csrf

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-500 ml-1 mono">Judul_Karya / Nama_Kegiatan</label>
                    <input type="text" name="judul" placeholder="Masukkan judul arsip..."
                        class="w-full px-8 py-5 input-cyber font-bold text-lg mono placeholder:text-slate-800" required>
                </div>

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-500 ml-1 mono">Frame_Visual (Aset)</label>
                    <div class="relative group h-72 w-full upload-zone rounded-[30px] flex flex-col items-center justify-center cursor-pointer overflow-hidden">
                        <input type="file" name="gambar" class="absolute inset-0 opacity-0 cursor-pointer z-30" onchange="previewImage(this)" required>

                        <div id="preview-placeholder" class="text-center transition duration-500">
                            <div class="w-16 h-16 bg-black/40 text-cyan-500/30 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-white/5">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.3em] mono">Drop_Image_Into_Frame</p>
                            <p class="text-[8px] text-slate-700 mt-2 font-bold uppercase mono">Format: JPG, PNG, WEBP (Max 2MB)</p>
                        </div>

                        <img id="img-preview" class="absolute inset-0 w-full h-full object-cover hidden z-20 pointer-events-none transition-all duration-700 brightness-75">
                    </div>
                </div>

                <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-cyan-900 animate-pulse"></div>
                        <p class="text-[9px] text-slate-600 font-bold uppercase tracking-widest leading-relaxed mono">
                            Sistem akan melakukan <br> auto-indexing pada aset.
                        </p>
                    </div>

                    <button type="submit" class="w-full md:w-auto px-12 py-5 btn-cyber-primary rounded-2xl text-[11px] uppercase tracking-[0.4em] transition-all active:scale-95 group flex items-center justify-center gap-4 mono italic">
                        Eksekusi_Arsip
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-10 text-center text-[8px] font-bold tracking-[1em] text-slate-800 uppercase italic mono">Registri.v2 // SDN_CIBINONG_02 // 2026</p>
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
