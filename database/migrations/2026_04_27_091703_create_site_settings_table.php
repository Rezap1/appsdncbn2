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
        Schema::create('site_settings', function (Blueprint $table) {
    $table->id();
    $table->string('nama_website')->nullable();
    $table->string('tagline')->nullable();
    $table->string('logo')->nullable();
    $table->string('email_kontak')->nullable();
    $table->string('telepon')->nullable();
    $table->text('alamat')->nullable();
    $table->string('instagram')->nullable();
    $table->string('youtube')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
