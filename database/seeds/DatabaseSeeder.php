<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,200) as $index) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $username = $firstName.$lastName;
            $email = $username.'@'.$faker->safeEmailDomain;
            DB::table('users')->insert([
                'gender' => $faker->title($gender),
                'first_name' => $firstName,
                'last_name' =>  $lastName,
                'description' => '',
                'email' => $email,
                'address' => $faker->streetAddress,
                'postal_code' => $faker->postcode,
                'town' => $faker->city,
                'birthdate' => $faker->dateTimeBetween('1950-01-01', '2002-12-31')
                ->format('Y/m/d'),
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('test')
            ]);
        }
    }
}
