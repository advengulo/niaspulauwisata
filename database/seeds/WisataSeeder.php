<?php

use Illuminate\Database\Seeder;

use App\Wisata;
use App\Ulasan;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $wisataSize = 50;
        $minimalRating = 11;
        for($i=0; $i<$wisataSize; $i++)
        {
            $wisata = new Wisata();
            $wisata->wisata_name = $faker->name;
            $wisata->artikel_id = rand(1, 50);
            $wisata->latitude = $faker->latitude;
            $wisata->longtitude = $faker->longitude;
            $wisata->wisata_jenis_id = 1;
            $wisata->wisata_lokasi = $faker->address;
            $wisata->wisata_gambar = "/img/img-wisata/wisata_001.jpeg";
            $wisata->save();

            for($u=1; $u<=$minimalRating;$u++)
            {
                // // $wisata->
                $rating = new \willvincent\Rateable\Rating;
                $rating->rating = rand(1, 5);
                $rating->user_id = $u;

                $wisata->ratings()->save($rating);

                Ulasan::create([
                    'wisata_id' => $wisata->id,
                    'user_id' => $u,
                    'isi_ulasan' => $faker->text,
                ]);
            }
        }

        
        for($i=0; $i<30; $i++)
        {
            $randomUser = rand(1, 11);
            $randomProduct = rand(1, $wisataSize);
            DB::table('ratings')
                ->where('user_id', $randomUser)
                ->where('rateable_id', $randomProduct)
                ->delete();
        }

    }
}
