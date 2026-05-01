<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('school_profiles', function (Blueprint $table) {
            $table->id();

            // =========================
            // IDENTITAS SEKOLAH
            // =========================
            $table->string('nama_sekolah')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('sejarah')->nullable(); // 🔥 TAMBAHAN
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();

            // =========================
            // KEPALA SEKOLAH
            // =========================
            $table->string('kepala_sekolah')->nullable(); // 🔥 TAMBAHAN
            $table->text('sambutan')->nullable(); // 🔥 TAMBAHAN
            $table->string('foto_kepala_sekolah')->nullable(); // 🔥 TAMBAHAN

            // =========================
            // MEDIA / FOTO
            // =========================
            $table->string('foto_gedung')->nullable(); // 🔥 TAMBAHAN
            $table->string('logo')->nullable();

            // =========================
            // KONTAK
            // =========================
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();

            // =========================
            // SOSIAL MEDIA
            // =========================
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();

            // =========================
            // MAPS
            // =========================
            $table->text('google_maps')->nullable();

            // =========================
            // AKADEMIK (CMS)
            // =========================
            $table->text('kurikulum')->nullable(); // 🔥 TAMBAHAN
            $table->text('program_unggulan')->nullable(); // 🔥 TAMBAHAN
            $table->text('ekstrakurikuler')->nullable(); // 🔥 TAMBAHAN
            $table->text('fasilitas_belajar')->nullable(); // 🔥 TAMBAHAN

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
