<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            // $table->string('id');
            // $table->string('jawaban');
            // $table->integer('soal')->unsigned();
            // $table->foreign('soal')
            //             ->references('id')
            //             ->on('soal');
            // $table->timestamps();
            // $table->primary(['id','soal']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
