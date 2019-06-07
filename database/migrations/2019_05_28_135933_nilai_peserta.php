<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NilaiPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NilaiPeserta', function (Blueprint $table) {
            $table->bigIncrements('daftar_id');
            $table->smallInteger('NilaiTes1');
            $table->smallInteger('NilaiTes2');
            $table->smallInteger('NilaiTes3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NilaiPeserta');
    }
}
