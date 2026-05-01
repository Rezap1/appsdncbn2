<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AcademyController; // ✅ TAMBAHAN WAJIB
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;

/*
|--------------------------------------------------------------------------
| Public Routes (Halaman Depan)
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [DashboardController::class, 'home'])->name('home');

/*
|--------------------------------------------------------------------------
| 🔥 FIX DI SINI (WAJIB)
|--------------------------------------------------------------------------
*/

Route::get('/profil', [SchoolProfileController::class, 'profil'])->name('profil');

/*
|--------------------------------------------------------------------------
| Route lainnya tetap
|--------------------------------------------------------------------------
*/

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

Route::get('/admin-login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'authenticate'])->name('admin.auth');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/admin-panel', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin-panel/berita', [NewsController::class, 'index'])->name('admin.berita.index');
    Route::get('/admin-panel/berita/create', [NewsController::class, 'create'])->name('admin.berita.create');
    Route::post('/admin-panel/berita/store', [NewsController::class, 'store'])->name('admin.berita.store');
    Route::delete('/admin-panel/berita/{id}', [NewsController::class, 'destroy'])->name('admin.berita.destroy');

    Route::get('/admin-panel/kegiatan', [ActivityController::class, 'index'])->name('admin.kegiatan.index');
    Route::post('/admin-panel/kegiatan/store', [ActivityController::class, 'store'])->name('admin.kegiatan.store');
    Route::delete('/admin-panel/kegiatan/{id}', [ActivityController::class, 'destroy'])->name('admin.kegiatan.destroy');

    Route::get('/admin-panel/galeri', [GalleryController::class, 'index'])->name('admin.galeri.index');
    Route::get('/admin-panel/galeri/create', [GalleryController::class, 'create'])->name('admin.galeri.create');
    Route::post('/admin-panel/galeri/store', [GalleryController::class, 'store'])->name('admin.galeri.store');
    Route::delete('/admin-panel/galeri/{id}', [GalleryController::class, 'destroy'])->name('admin.galeri.destroy');

    Route::get('/admin-panel/prestasi', [AchievementController::class, 'index'])->name('admin.prestasi.index');
    Route::get('/admin-panel/prestasi/create', [AchievementController::class, 'create'])->name('admin.prestasi.create');
    Route::post('/admin-panel/prestasi/store', [AchievementController::class, 'store'])->name('admin.prestasi.store');
    Route::delete('/admin-panel/prestasi/{id}', [AchievementController::class, 'destroy'])->name('admin.prestasi.destroy');

    // PROFIL
    Route::get('/admin-panel/profil', [SchoolProfileController::class, 'edit'])->name('admin.profil.edit');
    Route::put('/admin-panel/profil/update', [SchoolProfileController::class, 'update'])->name('admin.profil.update');

    // GURU
    Route::post('/admin-panel/guru/store', [SchoolProfileController::class, 'storeGuru'])->name('admin.guru.store');
    Route::delete('/admin-panel/guru/{id}', [SchoolProfileController::class, 'destroyGuru'])->name('admin.guru.destroy');

    // PASSWORD
    Route::get('/admin-panel/password', [AuthController::class, 'editPassword'])->name('admin.password.edit');
    Route::put('/admin-panel/password/update', [AuthController::class, 'updatePassword'])->name('admin.password.update');

    // LOGOUT
    Route::post('/admin-logout', [AuthController::class, 'logout'])->name('admin.logout');
});
