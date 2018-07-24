<?php

use Illuminate\Database\Seeder;
use App\JenisWisata;

class JenisWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $jenis = new JenisWisata();
        $jenis->jeniswisata_name = $faker->name;
        $jenis->save();
    }
}
