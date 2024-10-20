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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_misi'); // "nonton iklan", "follow sosmed"
            $table->text('deskripsi'); // Deskripsi atau arahan untuk misi
            $table->integer('point')->default(5); // Setiap misi mendapatkan 5 poin
            $table->timestamps();
        });
    }
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('missions');
    }
};
