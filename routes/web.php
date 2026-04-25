<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Kegiatan;

/*
|--------------------------------------------------------------------------
| Public Routes (Halaman Depan)
|--------------------------------------------------------------------------
*/

// PERBAIKAN: Menggunakan method home di AdminController agar data sinkron
Route::get('/', [AdminController::class, 'home'])->name('home');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/akademik', function () {
    return view('pages.akademik');
})->name('akademik');

Route::get('/galeri', function () {
    $galeries = Galeri::latest()->get();
    return view('pages.galeri', compact('galeries'));
})->name('galeri');

Route::get('/berita', function () {
    $berita = Berita::latest()->get();
    return view('pages.berita', compact('berita'));
})->name('berita');

Route::get('/prestasi', function () {
    $prestasi = Prestasi::latest()->get();
    return view('pages.prestasi', compact('prestasi'));
})->name('prestasi');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');


/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin-login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin-login', [AdminController::class, 'authenticate'])->name('admin.auth');


/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // 1. Dashboard Utama
    Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin.dashboard');

    // 2. Kelola Berita
    // Mengarah ke halaman daftar (tabel) yang tadi kita buat
    Route::get('/admin-panel/berita', [AdminController::class, 'indexBerita'])->name('admin.berita.index');
    // Mengarah ke halaman form tambah berita
    Route::get('/admin-panel/berita/create', [AdminController::class, 'createBerita'])->name('admin.berita.create');
    Route::post('/admin-panel/berita/store', [AdminController::class, 'storeBerita'])->name('admin.berita.store');
    Route::delete('/admin-panel/berita/{id}', [AdminController::class, 'destroyBerita'])->name('admin.berita.destroy');

    // 3. Kelola Kegiatan Sekolah
    Route::get('/admin-panel/kegiatan', [AdminController::class, 'indexKegiatan'])->name('admin.kegiatan.index');
    Route::get('/admin-panel/kegiatan/create', [AdminController::class, 'createKegiatan'])->name('admin.kegiatan.create');
    Route::post('/admin-panel/kegiatan/store', [AdminController::class, 'storeKegiatan'])->name('admin.kegiatan.store');
    Route::delete('/admin-panel/kegiatan/{id}', [AdminController::class, 'destroyKegiatan'])->name('admin.kegiatan.destroy');

    // 4. Kelola Galeri
    Route::get('/admin-panel/galeri', [AdminController::class, 'indexGaleri'])->name('admin.galeri.index');
    Route::get('/admin-panel/galeri/create', [AdminController::class, 'createGaleri'])->name('admin.galeri.create');
    Route::post('/admin-panel/galeri/store', [AdminController::class, 'storeGaleri'])->name('admin.galeri.store');
    Route::delete('/admin-panel/galeri/{id}', [AdminController::class, 'destroyGaleri'])->name('admin.galeri.destroy');

    // 5. Kelola Prestasi
    Route::get('/admin-panel/prestasi', [AdminController::class, 'indexPrestasi'])->name('admin.prestasi.index');
    // Jika kamu ingin punya halaman terpisah untuk form tambah prestasi:
    Route::get('/admin-panel/prestasi/create', [AdminController::class, 'createPrestasi'])->name('admin.prestasi.create');
    Route::post('/admin-panel/prestasi/store', [AdminController::class, 'storePrestasi'])->name('admin.prestasi.store');
    Route::delete('/admin-panel/prestasi/{id}', [AdminController::class, 'destroyPrestasi'])->name('admin.prestasi.destroy');

    // 6. Logout
    Route::post('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');
});
