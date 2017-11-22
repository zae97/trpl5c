<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJurusanJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan_jabatan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jabatan_id')->unsigned()->nullable();
            $table->foreign('jabatan_id')->references('kode_jabatan')->on('jabatan');
            $table->string('jurusan')->nullable();
            $table->integer('point')->nullable();
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
        Schema::dropIfExists('jurusan_jabatan');
    }
}
