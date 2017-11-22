<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
          $table->increments('id');

            // $table->char('no_pendaftaran',5);
            // $table->string('nama');
            // $table->string('alamat');
            // $table->string('ttl');
            // $table->enum('jk', ['pria', 'wanita']);
            // $table->string('no_tlp');
            // $table->string('email');
            // $table->string('pddk_thr');
            // $table->string('agama');
            // $table->enum('status', ['verifikasi', 'belum']);
            // $table->string('username');
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
            // $table->primary(['no_pendaftaran']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar');
    }
}
