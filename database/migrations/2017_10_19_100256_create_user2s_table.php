<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user2s', function (Blueprint $table) {
          $table->increments('id');
                    $table->string('name');
                    $table->string('email')->unique();
                    $table->string('alamat');
                    $table->string('ttl');
                    $table->enum('jk', ['pria', 'wanita']);
                    $table->string('no_tlp');
                    $table->string('pddk_thr');
                    $table->string('agama');
                    $table->string('minat')->nullable();
                    $table->enum('status', ['verifikasi', 'belum']);
                    $table->string('password');
                    // $table->string('username');
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
        Schema::dropIfExists('user2s');
    }
}
