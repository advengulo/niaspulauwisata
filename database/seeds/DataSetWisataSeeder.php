<?php

use Illuminate\Database\Seeder;

use App\DataSetWisata;

class DataSetWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=19; $i++)
        {
            $rating = new DataSetWisata();
            $rating->rating = rand(1, 5);
            $rating->wisata_id = $i+1;
            $rating->save();
        }
    }
}
