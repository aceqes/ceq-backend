<?php

namespace Database\Seeders;

use App\Models\Persons;
use Illuminate\Database\Seeder;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Persons::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-50 years', 'now'),
                'countries_id' => rand(1, 10),
            ]);
        }
    }
}
