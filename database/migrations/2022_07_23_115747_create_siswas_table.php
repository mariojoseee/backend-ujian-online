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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 5)->unique();
            $table->string('email', 100)->unique()->nullable();
            $table->string('password', 100);
            $table->string('level');
            $table->string('nama', 80)->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->foreignId('kelaz_id');
            $table->foreignId('admin_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('siswas');
    }
};
