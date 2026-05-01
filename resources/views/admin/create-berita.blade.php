<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita | SDN Cibinong 2</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:#071224;
            color:#e2e8f0;
        }

        .glass{
            background:rgba(15,23,42,0.72);
            backdrop-filter:blur(18px);
            border:1px solid rgba(148,163,184,0.08);
        }

        .input{
            background:#0f172a;
            border:1px solid rgba(148,163,184,0.10);
            color:white;
            transition:.3s ease;
        }

        .input:focus{
            outline:none;
            border-color:#3b82f6;
            box-shadow:0 0 0 4px rgba(59,130,246,.12);
        }

        .upload-zone{
            border:2px dashed rgba(148,163,184,.15);
            background:#0f172a;
            transition:.3s ease;
        }

        .upload-zone:hover{
            border-color:#3b82f6;
            background:#111c33;
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
<body class="p-4 md:p-10">

<div class="max-w-6xl mx-auto">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8">
        <div>
            <p class="text-sm text-blue-400 font-semibold mb-2">
                Admin / Berita Management
            </p>

            <h1 class="text-4xl md:text-5xl font-black text-white">
                Tambah Berita Baru
            </h1>

            <p class="text-slate-400 mt-3">
                Publikasikan berita atau pengumuman terbaru untuk website sekolah.
            </p>
        </div>

        <a href="{{ route('admin.dashboard') }}"
           class="px-6 py-3 rounded-2xl glass text-slate-300 hover:text-white transition">
            ← Kembali Dashboard
        </a>
    </div>

    {{-- Form Container --}}
    <div class="glass rounded-[2rem] overflow-hidden">

        <form action="{{ route('admin.berita.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="p-6 md:p-10 space-y-10">
            @csrf

            {{-- Judul --}}
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-3">
                    Judul Berita
                </label>

                <input type="text"
                       name="judul"
                       placeholder="Masukkan judul berita..."
                       class="w-full input rounded-2xl px-6 py-5 text-lg"
                       required>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                {{-- Upload Gambar --}}
                <div class="lg:col-span-5">
                    <label class="block text-sm font-semibold text-slate-300 mb-3">
                        Gambar Berita
                    </label>

                    <div class="relative upload-zone rounded-[2rem] h-80 overflow-hidden flex items-center justify-center">

                        <input type="file"
                               name="gambar"
                               class="absolute inset-0 opacity-0 cursor-pointer z-20"
                               onchange="previewFile(this)"
                               required>

                        <div id="dropzone-text" class="text-center z-10">
                            <div class="text-5xl mb-4">🖼️</div>
                            <p class="text-slate-400 font-medium">
                                Klik / Drag gambar ke sini
                            </p>
                            <p class="text-slate-500 text-sm mt-1">
                                PNG, JPG, JPEG
                            </p>
                        </div>

                        <img id="preview"
                             class="absolute inset-0 w-full h-full object-cover hidden z-10">
                    </div>
                </div>

                {{-- Isi --}}
                <div class="lg:col-span-7">
                    <label class="block text-sm font-semibold text-slate-300 mb-3">
                        Isi Berita
                    </label>

                    <textarea name="isi"
                              rows="14"
                              placeholder="Tulis isi berita di sini..."
                              class="w-full input rounded-[2rem] px-6 py-5 resize-none"
                              required></textarea>
                </div>

            </div>

            {{-- Footer Action --}}
            <div class="pt-6 border-t border-slate-700/50 flex flex-col md:flex-row gap-4 justify-between items-center">

                <p class="text-slate-500 text-sm">
                    Sistem akan otomatis memproses data setelah dipublikasikan.
                </p>

                <button type="submit"
                        class="px-10 py-4 bg-blue-600 hover:bg-blue-500 rounded-2xl text-white font-semibold shadow-lg shadow-blue-600/20 transition">
                    Publish Berita
                </button>

            </div>
        </form>
    </div>

    {{-- Footer --}}
    <footer class="mt-10 text-center">
        <p class="text-slate-600 text-sm">
            © 2026 SDN Cibinong 2 — News Publisher
        </p>
    </footer>

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
                dropzoneText.classList.add('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
