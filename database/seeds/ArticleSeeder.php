<?php

use Illuminate\Database\Seeder;
use App\Artikel;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<50; $i++)
        {
            $artikel = new Artikel();
            $artikel->artikel = $faker->text;
            $artikel->save();            
        }
    }
}
