<?php

use Illuminate\Database\Seeder;
use App\Kuliner;

class KulinerSeeder extends Seeder
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
            $kuliner = new Kuliner();
            $kuliner->kuliner_name = $faker->name;
            $kuliner->artikel_id = $i+1;
            $kuliner->kuliner_gambar = "/img/img-budaya/1532464112.jpg";
            $kuliner->kuliner_lokasi = $faker->address;
            $kuliner->save();
        }
    }
}
