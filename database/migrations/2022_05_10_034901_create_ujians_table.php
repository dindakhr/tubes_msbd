<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ujian');
            $table->unsignedBigInteger('id_kelas')->references('id')->on('kelas')->onDelete('restrict');
            $table->unsignedBigInteger('id_guru')->references('id')->on('gurus')->onDelete('restrict');
            $table->string('waktu');
            $table->date('tanggal');
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
        Schema::dropIfExists('ujians');
    }
}
