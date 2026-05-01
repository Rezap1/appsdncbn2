<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class GalleryController extends Controller
{
    use ImageUploadTrait;

    public function index() {
        $galeris = Galeri::latest()->get();
        return view('admin.index-galeri', compact('galeris'));
    }

    // ✅ TAMBAHAN (FIX ERROR)
    public function create() {
        return view('admin.create-galeri');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $path = $this->uploadImage($request->file('gambar'), 'uploads/galeri', 'galeri');

            Galeri::create([
                'judul' => $request->judul,
                'gambar' => basename($path) // tetap sesuai logic kamu
            ]);
        }

        return back()->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    public function destroy($id) {
        $galeri = Galeri::findOrFail($id);

        $this->deleteImage('uploads/galeri/' . $galeri->gambar);

        $galeri->delete();

        return back()->with('success', 'Foto galeri berhasil dihapus!');
    }
}
