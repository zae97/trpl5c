<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('np');
            $table->float('jenjang');
            $table->float('akreditasi');
            $table->float('fresh');
            $table->float('competency');
            $table->float('capability');
            $table->float('commitment');
            $table->float('credibility');
            $table->float('characher');
            $table->float('capacity');
            // $table->foreign('np')
            //             ->references('id')
            //             ->on('user2s');
            $table->primary('np');
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
        Schema::dropIfExists('kriteria');
    }
}
