<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    protected $table = 'school_profiles';

    protected $fillable = [
        'nama_sekolah',
        'sejarah',
        'visi',
        'misi',
        'kepala_sekolah',
        'sambutan',
        'foto_gedung',
        'foto_kepala_sekolah', // 🔥 TAMBAHAN
        'kurikulum',
        'program_unggulan',
        'ekstrakurikuler',
        'fasilitas_belajar'
    ];
}
