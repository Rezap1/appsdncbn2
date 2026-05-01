<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageUploadTrait;

class NewsController extends Controller
{
    use ImageUploadTrait;

    public function index() {
        $beritas = Berita::latest()->get();
        return view('admin.index-berita', compact('beritas'));
    }

    public function create() {
        return view('admin.create-berita');
    }

    public function store(Request $request) {
        $request->validate([
            'judul'  => 'required|max:255',
            'isi'    => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $namaGambar = $this->uploadImage($request->file('gambar'), 'uploads/berita', $request->judul);
        }

        Berita::create([
            'judul'  => $request->judul,
            'slug'   => Str::slug($request->judul),
            'isi'    => $request->isi,
            'gambar' => $namaGambar
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dipublikasikan!');
    }

    public function destroy($id) {
        $berita = Berita::findOrFail($id);
        $this->deleteImage($berita->gambar);
        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus!');
    }
}
