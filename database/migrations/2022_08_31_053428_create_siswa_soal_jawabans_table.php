<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_soal_jawabans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
            $table->unsignedBigInteger('soal_id');
            $table->foreign('soal_id')->references('id')->on('soals')->onDelete('cascade');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawabans')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_soal_jawabans');
    }
};
