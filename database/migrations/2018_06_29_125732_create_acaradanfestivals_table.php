<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcaradanfestivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaradanfestivals', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('artikels_id')->unsigned();
          $table->string('acaradanfestival_img');
          $table->string('acaradanfestival_lokasi');
          $table->date('acaradanfestival_tanggal');
          $table->timestamps();

          $table->foreign('artikels_id')->references('id')->on('artikels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acaradanfestivals');
    }
}
