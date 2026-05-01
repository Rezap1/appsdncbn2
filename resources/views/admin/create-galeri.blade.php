<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Visual | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:
                radial-gradient(circle at top right, rgba(59,130,246,.15), transparent 35%),
                radial-gradient(circle at bottom left, rgba(30,64,175,.15), transparent 30%),
                #0f172a;
            color:#e2e8f0;
            min-height:100vh;
        }

        .glass-panel{
            background:rgba(15,23,42,.78);
            backdrop-filter:blur(18px);
            border:1px solid rgba(148,163,184,.10);
            border-radius:28px;
            box-shadow:0 30px 80px rgba(0,0,0,.35);
        }

        .input-modern{
            background:rgba(30,41,59,.7);
            border:1px solid rgba(148,163,184,.12);
            color:white;
            border-radius:16px;
            transition:.25s ease;
        }

        .input-modern:focus{
            outline:none;
            border-color:#3b82f6;
            box-shadow:0 0 0 4px rgba(59,130,246,.15);
        }

        .btn-primary{
            background:linear-gradient(135deg,#2563eb,#1d4ed8);
            color:white;
            font-weight:700;
            transition:.25s;
        }

        .btn-primary:hover{
            transform:translateY(-2px);
            filter:brightness(1.08);
        }

        .btn-secondary{
            background:rgba(30,41,59,.7);
            border:1px solid rgba(148,163,184,.12);
            transition:.25s;
        }

        .btn-secondary:hover{
            border-color:#3b82f6;
            color:#93c5fd;
        }

        .upload-zone{
            border:2px dashed rgba(59,130,246,.25);
            background:rgba(30,41,59,.35);
            transition:.25s;
        }

        .upload-zone:hover{
            border-color:#60a5fa;
            background:rgba(59,130,246,.05);
        }
    </style>
</head>
<body class="p-6 md:p-12 flex items-center justify-center min-h-screen">

<div class="max-w-4xl w-full">

    <div class="mb-8">
        <a href="{{ route('admin.galeri.index') }}"
           class="btn-secondary inline-flex items-center gap-3 px-6 py-3 rounded-xl text-sm font-semibold text-slate-300">
            ← Kembali ke Galeri
        </a>
    </div>

    <div class="glass-panel overflow-hidden">

        <div class="p-10 md:p-14 border-b border-slate-700/40">
            <p class="text-blue-400 text-sm font-semibold mb-2">
                Upload Gambar Baru
            </p>

            <h1 class="text-4xl font-black text-white">
                Input Visual Galeri
            </h1>

            <p class="text-slate-400 mt-3">
                Tambahkan dokumentasi atau aset visual baru ke galeri sekolah.
            </p>
        </div>

        <form action="{{ route('admin.galeri.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="p-10 md:p-14 space-y-10">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-3">
                    Judul Galeri / Nama Kegiatan
                </label>

                <input type="text"
                       name="judul"
                       placeholder="Masukkan judul arsip..."
                       class="w-full px-6 py-4 input-modern"
                       required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-3">
                    Upload Gambar
                </label>

                <div class="relative h-72 rounded-3xl upload-zone overflow-hidden flex flex-col items-center justify-center cursor-pointer">
                    <input type="file"
                           name="gambar"
                           class="absolute inset-0 opacity-0 cursor-pointer z-30"
                           onchange="previewImage(this)"
                           required>

                    <div id="preview-placeholder" class="text-center px-6">
                        <div class="w-16 h-16 rounded-2xl bg-slate-800 flex items-center justify-center mx-auto mb-4">
                            📷
                        </div>

                        <p class="font-semibold text-slate-300">
                            Klik atau Drop Gambar di Sini
                        </p>

                        <p class="text-sm text-slate-500 mt-2">
                            JPG, PNG, WEBP • Maks 2MB
                        </p>
                    </div>

                    <img id="img-preview"
                         class="absolute inset-0 w-full h-full object-cover hidden z-20 pointer-events-none">
                </div>
            </div>

            <div class="pt-8 border-t border-slate-700/40 flex flex-col md:flex-row justify-between items-center gap-6">

                <p class="text-sm text-slate-500">
                    Sistem akan menyimpan gambar ke database galeri sekolah.
                </p>

                <button type="submit"
                        class="btn-primary px-10 py-4 rounded-xl">
                    Simpan Galeri
                </button>
            </div>

        </form>
    </div>

    <footer class="mt-10 text-center text-sm text-slate-500">
        © 2026 SDN Cibinong 2 — Gallery Upload
    </footer>

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
                placeholder.classList.add('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>
