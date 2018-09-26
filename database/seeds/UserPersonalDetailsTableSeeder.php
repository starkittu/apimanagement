<?php

use Illuminate\Database\Seeder;
use App\Models\UserpersonalDetails;

class UserPersonalDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserpersonalDetails::truncate();

        $faker = \Faker\Factory::create();

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            UserpersonalDetails::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'gender'    => $faker->randomElement([1, 2]),
                'date_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'father_name'=> $faker->firstNameMale,
                'mother_name'=> $faker->firstNameFemale,
            ]);
        }
    }
}
