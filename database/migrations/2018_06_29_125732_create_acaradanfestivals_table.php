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
          $table->string('acaradanfestival_name');
          $table->integer('artikel_id')->unsigned();
          $table->string('acaradanfestival_gambar');
          $table->string('acaradanfestival_lokasi');
          $table->date('acaradanfestival_tanggal')->nullable();
          $table->timestamps();

          $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('cascade');
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
