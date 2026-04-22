<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama (Beranda)
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Halaman Profil (Termasuk Guru & Kepala Sekolah)
Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

// Halaman Akademik
Route::get('/akademik', function () {
    return view('pages.akademik');
})->name('akademik');

// Halaman Prestasi
Route::get('/prestasi', function () {
    return view('pages.prestasi');
})->name('prestasi');

// Halaman Galeri
Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');

// Halaman Berita
Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');
