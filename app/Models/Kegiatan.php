<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';

    // Wajib didaftarkan di sini agar tidak error saat simpan data
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'tanggal_kegiatan',
        'gambar'
    ];
}
