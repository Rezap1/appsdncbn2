<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Galeri;
use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Autentikasi
    |--------------------------------------------------------------------------
    */

    public function login() {
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin-panel');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin-login');
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    public function index() {
        $total_berita = Berita::count();
        $total_kegiatan = Kegiatan::count();
        $total_galeri = Galeri::count();
        $total_prestasi = Prestasi::count();

        return view('admin.dashboard', compact(
            'total_berita',
            'total_kegiatan',
            'total_galeri',
            'total_prestasi'
        ));
    }

    /*
    |--------------------------------------------------------------------------
    | Manajemen Berita
    |--------------------------------------------------------------------------
    */

    public function indexBerita() {
        $beritas = Berita::latest()->get();
        return view('admin.index-berita', compact('beritas'));
    }

    // TAMBAHAN: Method untuk menampilkan form tambah berita
    public function createBerita() {
        return view('admin.create-berita');
    }

    public function storeBerita(Request $request) {
        $request->validate([
            'judul'  => 'required|max:255',
            'isi'    => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = time() . '_' . Str::slug($request->judul) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/berita'), $fileName);
            $namaGambar = 'uploads/berita/' . $fileName;
        }

        Berita::create([
            'judul'  => $request->judul,
            'slug'   => Str::slug($request->judul),
            'isi'    => $request->isi,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dipublikasikan!');
    }

    public function destroyBerita($id) {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar && File::exists(public_path($berita->gambar))) {
            File::delete(public_path($berita->gambar));
        }
        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus!');
    }

    /*
    |--------------------------------------------------------------------------
    | Manajemen Kegiatan
    |--------------------------------------------------------------------------
    */

    public function indexKegiatan() {
        $kegiatans = Kegiatan::latest()->get();
        return view('admin.create-kegiatan', compact('kegiatans'));
    }

    public function storeKegiatan(Request $request) {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/kegiatan'), $fileName);
            $namaGambar = 'uploads/kegiatan/' . $fileName;
        }

        Kegiatan::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'gambar' => $namaGambar
        ]);

        return redirect()->back()->with('success', 'Kegiatan berhasil diterbitkan!');
    }

    public function destroyKegiatan($id) {
        $kegiatan = Kegiatan::findOrFail($id);
        if ($kegiatan->gambar && File::exists(public_path($kegiatan->gambar))) {
            File::delete(public_path($kegiatan->gambar));
        }
        $kegiatan->delete();
        return back()->with('success', 'Kegiatan berhasil dihapus!');
    }

    /*
    |--------------------------------------------------------------------------
    | Manajemen Galeri
    |--------------------------------------------------------------------------
    */

    public function createGaleri() {
        $galeris = Galeri::latest()->get();
        return view('admin.create-galeri', compact('galeris'));
    }

    public function indexGaleri() {
        $galeris = Galeri::latest()->get();
        return view('admin.index-galeri', compact('galeris'));
    }

    public function storeGaleri(Request $request) {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = time() . '_galeri.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads/galeri'), $fileName);
            $namaGambar = $fileName;
        }

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function destroyGaleri($id) {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar && File::exists(public_path('uploads/galeri/' . $galeri->gambar))) {
            File::delete(public_path('uploads/galeri/' . $galeri->gambar));
        }

        $galeri->delete();
        return back()->with('success', 'Foto galeri berhasil dihapus!');
    }

    /*
    |--------------------------------------------------------------------------
    | Manajemen Prestasi
    |--------------------------------------------------------------------------
    */

    public function indexPrestasi() {
        $prestasis = Prestasi::latest()->get();
        return view('admin.index-prestasi', compact('prestasis'));
    }

    // TAMBAHAN: Method untuk menampilkan form tambah prestasi
    public function createPrestasi() {
        return view('admin.create-prestasi');
    }

    public function storePrestasi(Request $request) {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'tanggal_prestasi' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . Str::slug($request->judul) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/prestasi'), $fileName);
            $namaGambar = $fileName;
        }

        Prestasi::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tanggal_prestasi' => $request->tanggal_prestasi,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan!');
    }

    public function destroyPrestasi($id) {
        $prestasi = Prestasi::findOrFail($id);

        if ($prestasi->gambar && File::exists(public_path('uploads/prestasi/' . $prestasi->gambar))) {
            File::delete(public_path('uploads/prestasi/' . $prestasi->gambar));
        }

        $prestasi->delete();
        return back()->with('success', 'Data prestasi berhasil dihapus!');
    }

    /*
    |--------------------------------------------------------------------------
    | Halaman Publik (Home)
    |--------------------------------------------------------------------------
    */

    // Method untuk menampilkan data di halaman utama
    public function home() {
        $prestasi_terbaru = Prestasi::latest()->take(2)->get();
        $berita_terbaru = Berita::latest()->take(2)->get();

        return view('pages.home', compact('prestasi_terbaru', 'berita_terbaru'));
    }
}
