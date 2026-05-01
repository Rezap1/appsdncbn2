<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageUploadTrait;

class ActivityController extends Controller
{
    use ImageUploadTrait;

    public function index() {
        $kegiatans = Kegiatan::latest()->get();
        return view('admin.create-kegiatan', compact('kegiatans'));
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $namaGambar = $this->uploadImage($request->file('gambar'), 'uploads/kegiatan', $request->judul);
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

    public function destroy($id) {
        $kegiatan = Kegiatan::findOrFail($id);
        $this->deleteImage($kegiatan->gambar);
        $kegiatan->delete();
        return back()->with('success', 'Kegiatan berhasil dihapus!');
    }
}
