<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Testemmang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tim',20);
            $table->string('anggota1',45);
            $table->string('kelas1',4);
            $table->string('nisn1',20);
            $table->string('anggota2',45);
            $table->string('kelas2',4);
            $table->string('nisn2',20);
            $table->string('anggota3',45);
            $table->string('kelas3',4);
            $table->string('nisn3',20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar');
    }
}
