<?php

use Illuminate\Database\Seeder;
use App\Acaradanfestival;

class AcaradanfestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i=0; $i<=19; $i++)
        {
            $acara = new Acaradanfestival();
            $acara->acaradanfestival_name = $faker->name;
            $acara->artikel_id = $i+1;
            $acara->acaradanfestival_gambar = "/img/img-acaradanfestival/1532470795.jpg";
            $acara->acaradanfestival_lokasi = "Gunungsitoli";
            $acara->acaradanfestival_tanggal = "2018-09-21";
            $acara->save();
        }
    }
}
