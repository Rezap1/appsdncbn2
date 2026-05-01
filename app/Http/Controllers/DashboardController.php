<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Galeri;
use App\Models\Prestasi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index() {

        // 🔥 LOGIC LAMA (TIDAK DIUBAH)
        $total_berita   = Berita::count();
        $total_kegiatan = Kegiatan::count();
        $total_galeri   = Galeri::count();
        $total_prestasi = Prestasi::count();

        /*
        |--------------------------------------------------------------------------
        | 🔥 TAMBAHAN UNTUK GRAFIK (7 HARI TERAKHIR)
        |--------------------------------------------------------------------------
        */

        $labels = [];
        $data   = [];

        for ($i = 6; $i >= 0; $i--) {

            $tanggal = Carbon::now()->subDays($i);

            $labels[] = $tanggal->format('d M');

            $data[] = Berita::whereDate('created_at', $tanggal)->count();
        }

        return view('admin.dashboard', compact(
            'total_berita',
            'total_kegiatan',
            'total_galeri',
            'total_prestasi',
            'labels',   // 🔥 tambahan
            'data'      // 🔥 tambahan
        ));
    }

    public function home() {

        // 🔥 LOGIC LAMA (TIDAK DIUBAH)
        $prestasi_terbaru = Prestasi::latest()->take(2)->get();
        $berita_terbaru   = Berita::latest()->take(2)->get();

        return view('pages.home', compact(
            'prestasi_terbaru',
            'berita_terbaru'
        ));
    }
}
