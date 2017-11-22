<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            // $table->increments('id');
            $table->char('nip',5);
            $table->string('nama');
            $table->string('alamat');
            $table->string('ttl');
            $table->enum('jk', ['pria', 'wanita']);
            $table->integer('jabatan')->unsigned();
            $table->string('no_tlp');
            $table->string('email');
            $table->date('tgl_msk');
            $table->string('pddk_thr');
            $table->string('agama');
            $table->enum('status', ['nikah', 'single']);
            $table->enum('status_pegawai', ['tetap', 'tidak']);
            $table->timestamps();
            $table->primary(['nip']);
            $table->foreign('jabatan')
                        ->references('kode_jabatan')
                        ->on('jabatan');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
