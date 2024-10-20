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
        Schema::create('penanamans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('jenis_tanaman');
            $table->date('tanggal_penanaman');
            $table->foreignId('observasi_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penanamen');
    }
};
