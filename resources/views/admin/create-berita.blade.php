<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input_Journal | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cyber-cyan: #00f2ff;
            --cyber-dark: #050a10;
            --cyber-panel: #0d1520;
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

        .cyber-form-container {
            background: rgba(13, 21, 32, 0.8);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(0, 242, 255, 0.1);
            border-radius: 40px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.6);
        }

        .input-cyber {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 242, 255, 0.1);
            color: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-cyber:focus {
            border-color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.03);
            box-shadow: 0 0 25px rgba(0, 242, 255, 0.1);
            outline: none;
        }

        .mono { font-family: 'JetBrains Mono', monospace; }

        .btn-back-cyber {
            background: rgba(0, 242, 255, 0.05);
            border: 1px solid rgba(0, 242, 255, 0.1);
            color: #64748b;
            padding: 12px 20px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 10px;
            letter-spacing: 0.2em;
            transition: all 0.3s;
        }

        .btn-back-cyber:hover {
            border-color: var(--cyber-cyan);
            color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.1);
        }

        .btn-submit-cyber {
            background: var(--cyber-cyan);
            color: #000;
            box-shadow: 0 0 30px rgba(0, 242, 255, 0.3);
        }

        .btn-submit-cyber:hover {
            background: #fff;
            box-shadow: 0 0 40px rgba(255, 255, 255, 0.2);
            transform: scale(1.02);
        }

        .upload-zone {
            background: rgba(0, 0, 0, 0.4);
            border: 2px dashed rgba(0, 242, 255, 0.1);
            transition: all 0.5s;
        }

        .upload-zone:hover {
            border-color: var(--cyber-cyan);
            background: rgba(0, 242, 255, 0.02);
        }
    </style>
</head>
<body class="p-4 md:p-12">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-12 gap-6">
            <a href="{{ route('admin.dashboard') }}" class="btn-back-cyber inline-flex items-center gap-3 uppercase group mono">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform group-hover:-translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>

            <div class="flex items-center gap-4 bg-cyan-950/20 px-6 py-3 rounded-2xl border border-cyan-500/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                </span>
                <span class="text-cyan-400 text-[9px] font-bold uppercase tracking-[0.3em] mono">Authorized_Editor</span>
            </div>
        </div>

        <div class="cyber-form-container overflow-hidden">
            <div class="p-10 md:p-16 border-b border-white/5 relative">
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-[1px] bg-cyan-500"></span>
                        <span class="text-cyan-400 text-[9px] font-bold uppercase tracking-[0.4em] mono">Buat Berita</span>
                    </div>
                    <h2 class="text-5xl font-bold text-white tracking-tighter uppercase italic">Tulis<span class="text-cyan-500 font-black">Berita Baru</span></h2>
                    <p class="text-slate-500 mt-5 font-medium text-base max-w-2xl mono">Inisialisasi naskah digital untuk portal informasi SDN Cibinong 2.</p>
                </div>
                <div class="absolute -top-20 -right-20 w-80 h-80 bg-cyan-500/5 rounded-full blur-[100px]"></div>
            </div>

            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="p-10 md:p-16 space-y-12">
                @csrf

                <div class="space-y-4">
                    <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-600 ml-2 mono">Judul</label>
                    <input type="text" name="judul" placeholder="Tulis Judul disini"
                        class="w-full bg-transparent border-b border-white/10 py-6 text-3xl md:text-4xl font-bold text-white placeholder:text-slate-800 focus:border-cyan-500 outline-none transition-all duration-700" required>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    <div class="lg:col-span-5 space-y-4">
                        <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-600 ml-1 block text-center mono">Gambar</label>
                        <div class="group relative h-80 w-full rounded-[35px] upload-zone overflow-hidden flex flex-col items-center justify-center cursor-pointer shadow-2xl">
                            <input type="file" name="gambar" class="absolute inset-0 opacity-0 z-30 cursor-pointer" onchange="previewFile(this)" required>

                            <div id="dropzone-text" class="text-center transition duration-500">
                                <div class="w-16 h-16 bg-cyan-500/10 text-cyan-400 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-cyan-500/20 group-hover:scale-110 transition">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                                <p class="text-[9px] font-bold text-cyan-400 uppercase tracking-widest px-4 mono">Tambah Gambar</p>
                            </div>
                            <img id="preview" class="absolute inset-0 w-full h-full object-cover hidden z-10 brightness-50">
                        </div>
                    </div>

                    <div class="lg:col-span-7 space-y-4">
                        <label class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-600 ml-1 mono">Deskripsi</label>
                        <div class="relative group">
                            <textarea name="isi" rows="12" placeholder="Tulis Disini"
                                class="w-full p-10 rounded-[40px] input-cyber outline-none transition-all font-medium leading-[1.8] text-slate-400 resize-none text-sm" required></textarea>
                            <div class="absolute bottom-8 right-10 text-[8px] font-bold text-slate-700 uppercase tracking-widest pointer-events-none group-focus-within:text-cyan-900 transition mono">Data.Stream</div>
                        </div>
                    </div>
                </div>

                <div class="pt-10 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-10">
                    <div class="flex items-center gap-4 text-slate-600 text-[10px] font-bold uppercase tracking-widest mono">
                        <svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V7h2v2z"/></svg>
                        Auto-Generating_Slug...
                    </div>

                    <button type="submit" class="w-full md:w-auto px-16 py-5 btn-submit-cyber rounded-2xl font-black text-[11px] uppercase tracking-[0.5em] transition-all active:scale-95 flex items-center justify-center gap-4 group mono">
                        Execute_Publish
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-12 text-center text-[8px] font-bold tracking-[1.5em] text-slate-800 uppercase italic mono">Terminal.Data.Center // SDN-CIBINONG-02</p>
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
