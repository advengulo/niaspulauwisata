<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('wisata_name');
          $table->integer('artikel_id')->unsigned()->nullable()->index();
          $table->string('wisata_gambar');
          $table->string('wisata_video');
          $table->integer('wisata_rating');
          $table->string('wisata_lokasi');
          $table->integer('wisata_jenis_id')->unsigned()->nullable()->index();
          $table->string('latitude');
          $table->string('longtitude');
          $table->timestamps();

          $table->foreign('artikel_id')->references('id')->on('artikels');
          $table->foreign('wisata_jenis_id')->references('id')->on('jeniswisatas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}
