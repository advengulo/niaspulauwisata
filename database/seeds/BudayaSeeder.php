<?php

use Illuminate\Database\Seeder;
use App\Budaya;

class BudayaSeeder extends Seeder
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
            $budaya = new Budaya();
            $budaya->budaya_name = $faker->name;
            $budaya->artikel_id = $i+1;
            $budaya->budaya_gambar = "/img/img-budaya/1532464112.jpg";
            $budaya->budaya_lokasi = $faker->address;
            $budaya->save();
        }
    }
}
