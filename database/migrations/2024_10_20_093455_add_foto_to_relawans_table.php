<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoToRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relawans', function (Blueprint $table) {
            $table->string('foto')->nullable(); // Menambahkan kolom foto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relawans', function (Blueprint $table) {
            $table->dropColumn('foto'); // Menghapus kolom foto jika rollback
        });
    }
}
