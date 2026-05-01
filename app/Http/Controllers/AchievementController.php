<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageUploadTrait;

class AchievementController extends Controller
{
    use ImageUploadTrait;

    public function index() {
        $prestasis = Prestasi::latest()->get();
        return view('admin.index-prestasi', compact('prestasis'));
    }

    public function create() {
        return view('admin.create-prestasi');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'tanggal_prestasi' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            // Catatan: Mengikuti struktur lama Anda yang hanya menyimpan nama file saja di DB
            $path = $this->uploadImage($request->file('gambar'), 'uploads/prestasi', $request->judul);
            $namaGambar = basename($path);
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

    public function destroy($id) {
        $prestasi = Prestasi::findOrFail($id);
        $this->deleteImage('uploads/prestasi/' . $prestasi->gambar);
        $prestasi->delete();
        return back()->with('success', 'Data prestasi berhasil dihapus!');
    }
}
