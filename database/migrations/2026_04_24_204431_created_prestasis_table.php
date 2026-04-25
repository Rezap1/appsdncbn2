<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('prestasis', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('slug')->unique();
        $table->string('kategori'); 
        $table->text('deskripsi');
        $table->string('gambar')->nullable();
        $table->date('tanggal_prestasi');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
