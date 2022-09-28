<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactPerson;

class ContactPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \FAKER\Factory::create();
        for ($i=0; $i>30; $i++){
            ContactPerson::create([
                'CompleteName' => $faker->name,
                'ContactNumber' => $faker->phoneNumber,
                'email' => $faker->email
            ]);
        }
    }
}
