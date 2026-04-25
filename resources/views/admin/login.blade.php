<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | SDN Cibinong 2 Museum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif { font-family: 'Playfair+Display', serif; }

        .glass-museum {
            background: rgba(18, 18, 18, 0.75);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(212, 175, 55, 0.2); /* Aksen Gold tipis */
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .bg-museum {
            background-color: #0a0a0a;
            background-image:
                radial-gradient(at 0% 0%, rgba(30, 58, 138, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(139, 94, 26, 0.1) 0px, transparent 50%);
        }

        .input-museum {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: white !important;
            transition: all 0.4s ease;
        }

        .input-museum:focus {
            border-color: #d4af37 !important; /* Gold focus */
            background: rgba(255, 255, 255, 0.07) !important;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.1);
        }

        /* Animasi sorot lampu museum */
        .spotlight {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% -20%, rgba(212, 175, 55, 0.08), transparent 50%);
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-museum h-screen flex items-center justify-center p-4 overflow-hidden">

    <div class="spotlight"></div>

    <div class="glass-museum w-full max-w-[420px] p-12 rounded-[40px] relative z-10">
        {{-- Bingkai Aksen Gold --}}
        <div class="absolute inset-4 border border-white/5 rounded-[32px] pointer-events-none"></div>

        <div class="text-center mb-12 relative">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-[#1e1e1e] to-[#0a0a0a] rounded-3xl mb-6 border border-white/10 shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#d4af37]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <h2 class="text-4xl font-bold text-white tracking-tight mb-2">Login Admin</h2>
            <p class="text-[#d4af37]/60 uppercase tracking-[0.2em] text-[10px] font-bold">SDN Cibinong 2</p>
        </div>

        @if($errors->any())
        <div class="mb-8 p-4 bg-red-950/30 rounded-2xl border border-red-500/50">
            <p class="text-red-400 text-xs text-center font-medium">{{ $errors->first() }}</p>
        </div>
        @endif

        <form action="{{ route('admin.auth') }}" method="POST" class="space-y-6 relative">
            @csrf
            <div>
                <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-[0.15em] mb-3 ml-1">EMAIL</label>
                <input type="email" name="email" placeholder="email@sdncibinong2.sch.id"
                    class="input-museum w-full px-6 py-4 rounded-2xl outline-none placeholder:text-gray-600 text-sm" required>
            </div>

            <div>
                <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-[0.15em] mb-3 ml-1">PASSWORD</label>
                <input type="password" name="password" placeholder="••••••••"
                    class="input-museum w-full px-6 py-4 rounded-2xl outline-none placeholder:text-gray-600 text-sm" required>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-[#d4af37] text-black py-4 rounded-2xl font-bold text-sm uppercase tracking-widest hover:bg-[#b8962e] hover:shadow-[0_0_30px_rgba(212,175,55,0.3)] transform hover:-translate-y-1 transition-all duration-500">
                    Masuk
                </button>
            </div>
        </form>

        <div class="mt-12 flex items-center justify-center gap-4 opacity-30">
            <div class="h-[1px] w-8 bg-white"></div>
            <p class="text-white text-[9px] font-medium tracking-widest uppercase">
                Est. 2026 SDN Cibinong 2
            </p>
            <div class="h-[1px] w-8 bg-white"></div>
        </div>
    </div>

    {{-- Aksen Latar Belakang --}}
    <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-blue-900/10 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-amber-900/10 rounded-full blur-[120px]"></div>

</body>
</html>
