<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('gurus', function (Blueprint $table) {
        $table->string('whatsapp')->nullable();
        $table->string('email')->nullable();
        $table->string('facebook')->nullable();
    });
}

public function down()
{
    Schema::table('gurus', function (Blueprint $table) {
        $table->dropColumn(['whatsapp','email','facebook']);
    });
}
};
