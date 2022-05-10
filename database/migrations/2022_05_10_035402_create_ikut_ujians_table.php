<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkutUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikut_ujians', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_ujian')->references('id')->on('ujians')->onDelete('restrict');
            $table->unsignedBigInteger('id_siswa')->references('id')->on('siswas')->onDelete('restrict');
            $table->text('list_soal');
            $table->text('list_jawaban');
            $table->string('nilai');
            $table->date('waktu_mulai');
            $table->date('waktu_selesai');
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
        Schema::dropIfExists('ikut_ujians');
    }
}
