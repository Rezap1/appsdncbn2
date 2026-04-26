<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | SDN Cibinong 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cyber-cyan: #00f2ff;
            --cyber-blue: #0062ff;
            --cyber-dark: #050a10;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--cyber-dark);
            background-image:
                radial-gradient(circle at 50% 50%, rgba(0, 98, 255, 0.1) 0%, transparent 80%),
                linear-gradient(rgba(0, 242, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 242, 255, 0.03) 1px, transparent 1px);
            background-size: 100% 100%, 30px 30px, 30px 30px;
        }

        .cyber-glass {
            background: rgba(13, 21, 32, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 242, 255, 0.1);
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
        }

        .input-cyber {
            background: rgba(0, 242, 255, 0.03) !important;
            border: 1px solid rgba(0, 242, 255, 0.1) !important;
            color: white !important;
            font-family: 'JetBrains Mono', monospace;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .input-cyber:focus {
            border-color: var(--cyber-cyan) !important;
            background: rgba(0, 242, 255, 0.07) !important;
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.2);
            transform: translateX(5px);
        }

        .glitch-text {
            text-shadow: 2px 0 #ff00c1, -2px 0 #00fff9;
            letter-spacing: 2px;
        }

        .mono { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>
<body class="h-screen flex items-center justify-center p-4 overflow-hidden">

    <div class="cyber-glass w-full max-w-[420px] p-10 md:p-12 rounded-[40px] relative z-10 overflow-hidden">
        {{-- Scanline Effect --}}
        <div class="absolute inset-0 bg-[linear-gradient(rgba(18,16,16,0)_50%,rgba(0,0,0,0.25)_50%),linear-gradient(90deg,rgba(255,0,0,0.06),rgba(0,255,0,0.02),rgba(0,0,255,0.06))] bg-[length:100%_2px,3px_100%] pointer-events-none opacity-20"></div>

        <div class="text-center mb-10 relative">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-cyan-500/10 rounded-3xl mb-6 border border-cyan-500/30 shadow-[0_0_20px_rgba(0,242,255,0.15)]">
                <span class="text-3xl filter drop-shadow-[0_0_8px_#00f2ff]">🛰️</span>
            </div>
            <h2 class="text-3xl font-bold text-white tracking-tighter mb-2 glitch-text uppercase">Login Admin</h2>
            <p class="text-cyan-400/60 uppercase tracking-[0.4em] text-[10px] font-bold mono">SDN Cibinong 2</p>
        </div>

        @if($errors->any())
        <div class="mb-6 p-4 bg-red-500/10 rounded-2xl border border-red-500/30">
            <p class="text-red-400 text-[10px] text-center font-bold mono uppercase">{{ $errors->first() }}</p>
        </div>
        @endif

        <form action="{{ route('admin.auth') }}" method="POST" class="space-y-6 relative">
            @csrf
            <div>
                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-[0.3em] mb-3 ml-1 mono">Email</label>
                <input type="email" name="email" placeholder="admin@core.sys"
                    class="input-cyber w-full px-6 py-4 rounded-2xl outline-none placeholder:text-slate-700 text-sm" required>
            </div>

            <div>
                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-[0.3em] mb-3 ml-1 mono">Password</label>
                <input type="password" name="password" placeholder="••••••••"
                    class="input-cyber w-full px-6 py-4 rounded-2xl outline-none placeholder:text-slate-700 text-sm" required>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-cyan-500/10 border border-cyan-500 text-cyan-400 py-4 rounded-2xl font-bold text-[11px] uppercase tracking-[0.4em] hover:bg-cyan-500 hover:text-black transition-all duration-300 mono shadow-[0_0_20px_rgba(0,242,255,0.1)]">
                    Masuk
                </button>
            </div>
        </form>

        <div class="mt-10 text-center">
            <p class="text-slate-600 text-[8px] font-bold tracking-[0.5em] uppercase mono">
                Sdn_Cibinong2.2026
            </p>
        </div>
    </div>

    {{-- Decorative Background Elements --}}
    <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-cyan-600/10 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px]"></div>

</body>
</html>
