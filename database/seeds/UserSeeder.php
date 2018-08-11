<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Profile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Bukan admin
        $max = 10;
        for ($i=0; $i<=$max; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = \Hash::make('password');
            $user->save();

            $profile = new Profile();
            $profile->user_id = $i+1;
            $profile->pro_sampulImg = "/img/profile/sampul/sampul1.jpg";
            $profile->pro_tempatLahir = "Gunungsitoli";
            $profile->pro_tglLahir = '1990-1-1';
            $profile->pro_jenisKelamin = "";
            $profile->pro_telp = "62";
            $profile->pro_alamat = $faker->address;
            $profile->save();
        }

        // Admin

        $admin = new User();
        $user->name = $faker->name;
        $user->email = "admin@niaswisata.com";
        $user->admin = 1;
        $user->password = \Hash::make('password');
        $user->save();
    }
}
