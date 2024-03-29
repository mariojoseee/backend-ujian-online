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
        Schema::create('ujians', function (Blueprint $table) {
            $table->id();
            $table->string('jenis', 50);
            $table->text('deskripsi')->nullable();
            $table->string('kode_ujian', 10);
            $table->string('semester', 6);
            $table->string('status', 8);
            $table->time('waktu');
            $table->foreignId('mapel_id');
            $table->foreignId('guru_id');
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
};
