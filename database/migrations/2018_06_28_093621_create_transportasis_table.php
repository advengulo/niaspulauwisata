<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportasis', function (Blueprint $table) {
          $table->increments('id');
          $table->string('transportasi_name');
          $table->integer('artikel_id')->unsigned();
          $table->string('transportasi_gambar');
          $table->string('transportasi_jenis');
          $table->timestamps();

          $table->foreign('artikel_id')->references('id')->on('artikels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportasis');
    }
}
