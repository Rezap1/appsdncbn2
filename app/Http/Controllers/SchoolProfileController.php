<?php

namespace App\Http\Controllers;

use App\Models\SchoolProfile;
use App\Models\Guru;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\DB;

class SchoolProfileController extends Controller
{
    use ImageUploadTrait;

    /*
    |--------------------------------------------------------------------------
    | PUBLIC - HALAMAN PROFIL
    |--------------------------------------------------------------------------
    */
    public function profil()
    {
        $profil = SchoolProfile::first();
        $gurus  = Guru::latest()->get();

        return view('pages.profil', compact('profil', 'gurus'));
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN - HALAMAN EDIT
    |--------------------------------------------------------------------------
    */
    public function edit()
    {
        $profil = SchoolProfile::first() ?? new SchoolProfile();
        $gurus  = Guru::latest()->get();

        return view('admin.edit-profil', compact('profil', 'gurus'));
    }

    /*
    |--------------------------------------------------------------------------
    | SIMPAN / UPDATE PROFIL SEKOLAH
    |--------------------------------------------------------------------------
    */
    public function update(Request $request)
    {
        $request->validate([
            'nama_sekolah'        => 'required|max:255',
            'sejarah'             => 'required',
            'visi'                => 'required',
            'misi'                => 'required',
            'kepala_sekolah'      => 'required|max:255',
            'sambutan'            => 'required',
            'foto_gedung'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'foto_kepala_sekolah' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        DB::beginTransaction();

        try {
            $profil = SchoolProfile::first() ?? new SchoolProfile();

            $data = $request->only([
                'nama_sekolah',
                'sejarah',
                'visi',
                'misi',
                'kepala_sekolah',
                'sambutan'
            ]);

            // FOTO GEDUNG
            if ($request->hasFile('foto_gedung')) {
                if ($profil->foto_gedung) {
                    $this->deleteImage($profil->foto_gedung);
                }

                $data['foto_gedung'] = $this->uploadImage(
                    $request->file('foto_gedung'),
                    'uploads/profile',
                    'gedung'
                );
            }

            // FOTO KEPALA SEKOLAH
            if ($request->hasFile('foto_kepala_sekolah')) {
                if ($profil->foto_kepala_sekolah) {
                    $this->deleteImage($profil->foto_kepala_sekolah);
                }

                $data['foto_kepala_sekolah'] = $this->uploadImage(
                    $request->file('foto_kepala_sekolah'),
                    'uploads/profile',
                    'kepsek'
                );
            }

            $profil->fill($data)->save();

            DB::commit();

            return back()->with('success', 'Profil sekolah berhasil diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }

    /*
    |--------------------------------------------------------------------------
    | TAMBAH GURU
    |--------------------------------------------------------------------------
    */
    public function storeGuru(Request $request)
    {
        $request->validate([
            'nama'      => 'required|max:255',
            'jabatan' => 'required|max:255',
            'whatsapp'  => 'nullable|max:20',
            'email'     => 'nullable|email',
            'facebook'  => 'nullable|max:255',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only([
            'nama',
            'jabatan',
            'whatsapp',
            'email',
            'facebook'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $this->uploadImage(
                $request->file('foto'),
                'uploads/guru',
                $request->nama
            );
        }

        Guru::create($data);

        return back()->with('success', 'Data guru berhasil ditambahkan!');
    }

    /*
    |--------------------------------------------------------------------------
    | HAPUS GURU
    |--------------------------------------------------------------------------
    */
    public function destroyGuru($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->foto) {
            $this->deleteImage($guru->foto);
        }

        $guru->delete();

        return back()->with('success', 'Data guru berhasil dihapus!');
    }
}
