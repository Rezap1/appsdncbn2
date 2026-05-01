<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait
{
    /**
     * Handle upload gambar secara dinamis
     */
    public function uploadImage($file, $path, $title = null)
    {
        if (!$file) return null;

        // Buat nama file: timestamp_slug-judul.ekstensi
        $fileName = time() . '_' . ($title ? Str::slug($title) : 'img') . '.' . $file->getClientOriginalExtension();

        // Pindahkan ke public/uploads/...
        $file->move(public_path($path), $fileName);

        // Kembalikan path lengkap untuk disimpan di database
        return $path . '/' . $fileName;
    }

    /**
     * Hapus gambar dari storage jika data di database dihapus
     */
    public function deleteImage($path)
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
