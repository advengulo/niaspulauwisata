<?php

use Illuminate\Database\Seeder;

use App\User;

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
