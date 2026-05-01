<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | SDN Cibinong 2</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Inter',sans-serif;
            background:#020617;
        }

        [x-cloak]{ display:none !important; }

        ::-webkit-scrollbar{ width:6px; }
        ::-webkit-scrollbar-thumb{
            background:#334155;
            border-radius:20px;
        }

        .glass{
            background:rgba(15,23,42,.75);
            backdrop-filter:blur(14px);
        }

        .card-dark{
            background:linear-gradient(145deg,#0f172a,#111827);
        }

        .menu-item{
            transition: all .25s ease;
        }

        .menu-item:hover{
            transform: translateX(4px);
        }
    </style>
</head>

<body x-data="{ sidebarOpen:false }" class="overflow-x-hidden text-slate-200">

<div class="flex min-h-screen">

    {{-- Sidebar (TIDAK DIUBAH) --}}
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
           class="fixed lg:static top-0 left-0 z-50 w-72 h-screen bg-slate-950 border-r border-slate-800 transition-transform duration-300 lg:translate-x-0 flex flex-col">

        <div class="p-8 border-b border-slate-800">
            <h1 class="text-xl font-black text-white tracking-tight">
                SDN Cibinong 2
            </h1>
            <p class="text-sm text-slate-400 mt-1">
                Education Management Panel
            </p>
        </div>

        <nav class="flex-1 p-6 space-y-2 overflow-y-auto">

            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">
                Main Navigation
            </p>

            @php
                $menus = [
                    ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => '🏠'],
                    ['route' => 'admin.berita.index', 'label' => 'Kelola Berita', 'icon' => '📰'],
                    ['route' => 'admin.prestasi.index', 'label' => 'Kelola Prestasi', 'icon' => '🏆'],
                    ['route' => 'admin.galeri.index', 'label' => 'Kelola Galeri', 'icon' => '🖼️'],
                ];

                $configMenus = [
                    ['route' => 'admin.profil.edit', 'label' => 'Profil Sekolah', 'icon' => '🏫'],
                ];
            @endphp

            @foreach($menus as $menu)
            <a href="{{ route($menu['route']) }}"
               class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl font-semibold
               {{ request()->routeIs($menu['route'])
                   ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20'
                   : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="text-lg">{{ $menu['icon'] }}</span>
                <span>{{ $menu['label'] }}</span>
            </a>
            @endforeach

            <div class="border-t border-slate-800 my-6"></div>

            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">
                Configuration
            </p>

            @foreach($configMenus as $menu)
            <a href="{{ route($menu['route']) }}"
               class="menu-item flex items-center gap-4 px-5 py-4 rounded-2xl font-semibold
               {{ request()->routeIs($menu['route'])
                   ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20'
                   : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
                <span class="text-lg">{{ $menu['icon'] }}</span>
                <span>{{ $menu['label'] }}</span>
            </a>
            @endforeach
        </nav>

        <div class="p-6 border-t border-slate-800">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="w-full py-4 rounded-2xl bg-red-500/10 text-red-400 hover:bg-red-500/20 font-bold transition border border-red-500/20">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- Main --}}
    <div class="flex-1 flex flex-col">

        {{-- Topbar --}}
        <header class="glass border-b border-slate-800 px-6 md:px-10 py-5 flex justify-between items-center sticky top-0 z-30">
            <div>
                <h2 class="text-2xl font-black text-white">Dashboard</h2>
                <p class="text-sm text-slate-400">Selamat datang kembali</p>
            </div>
        </header>

        {{-- Content --}}
        <main class="p-6 md:p-10 space-y-10">

            {{-- Stats --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                @php
                    $stats = [
                        ['label' => 'Total Berita', 'value' => $total_berita, 'route' => 'admin.berita.index', 'icon' => '📰'],
                        ['label' => 'Total Prestasi', 'value' => $total_prestasi, 'route' => 'admin.prestasi.index', 'icon' => '🏆'],
                        ['label' => 'Total Galeri', 'value' => $total_galeri, 'route' => 'admin.galeri.index', 'icon' => '🖼️'],
                    ];
                @endphp

                @foreach($stats as $stat)
                <div onclick="window.location='{{ route($stat['route']) }}'"
                     class="cursor-pointer card-dark rounded-3xl p-7 border border-slate-800 hover:border-blue-500 hover:shadow-xl hover:shadow-blue-600/10 transition">

                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <p class="text-sm text-slate-400 font-semibold">
                                {{ $stat['label'] }}
                            </p>

                            <h3 class="text-4xl font-black text-white mt-3">
                                {{ $stat['value'] }}
                            </h3>
                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-blue-600/10 flex items-center justify-center text-2xl border border-blue-500/20">
                            {{ $stat['icon'] }}
                        </div>
                    </div>

                    <p class="text-xs text-blue-400 font-bold">
                        Lihat Detail →
                    </p>
                </div>
                @endforeach
            </div>

            {{-- Banner --}}
            <div class="rounded-[2rem] p-10 bg-gradient-to-r from-blue-600 to-slate-900 text-white">
                Kelola Website Sekolah Dengan Mudah
            </div>

            {{-- 🔥 CHART + INFO --}}
            <div class="grid lg:grid-cols-2 gap-6">

                {{-- Chart --}}
                <div class="card-dark p-6 rounded-3xl border border-slate-800">
                    <h3 class="text-white font-bold mb-4">Statistik Berita</h3>
                    <canvas id="chart"></canvas>
                </div>

                {{-- Info Panel --}}
                <div class="card-dark p-6 rounded-3xl border border-slate-800 space-y-4">
                    <h3 class="text-white font-bold">System Info</h3>
                    <p class="text-sm text-slate-400">Status Website: <span class="text-green-400">Online</span></p>
                    <p class="text-sm text-slate-400">Total Konten: {{ $total_berita + $total_prestasi + $total_galeri }}</p>
                    <p class="text-sm text-slate-400">Terakhir Update: {{ now()->format('d M Y') }}</p>
                </div>

            </div>

            {{-- Footer --}}
            <footer class="pt-8 border-t border-slate-800 text-center">
                <p class="text-sm text-slate-500">©️ 2026 SDN Cibinong 2</p>
            </footer>

        </main>
    </div>
</div>

{{-- SCRIPT CHART --}}
<script>
const ctx = document.getElementById('chart');

if (ctx) {
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels ?? []),
            datasets: [{
                label: 'Jumlah Berita',
                data: @json($data ?? []),
                borderWidth: 2,
                tension: 0.4
            }]
        }
    });
}
</script>

</body>
</html>
