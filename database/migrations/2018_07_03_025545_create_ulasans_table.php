<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUlasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wisata_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('isi_ulasan');
            $table->integer('temp_rat');
            $table->timestamps();

            $table->foreign('wisata_id')->references('id')->on('wisatas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasans');
    }
}
