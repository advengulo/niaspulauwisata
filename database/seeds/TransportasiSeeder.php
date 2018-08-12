<?php

use Illuminate\Database\Seeder;
use App\Transportasi;

class TransportasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for ($i=0; $i<=3; $i++)
        {
            $transportasi = new Transportasi();
            $transportasi->transportasi_name = $faker->name;
            $transportasi->artikel_id = $i+1;
            $transportasi->transportasi_gambar = "/img/img-transportasi/1532497073.jpeg";
            $transportasi->transportasi_jenis = $faker->address;
            $transportasi->save();
        }
    }
}
