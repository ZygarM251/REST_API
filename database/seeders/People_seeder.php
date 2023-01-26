<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use Faker\Factory as Faker;

class People_seeder extends Seeder
{
    
    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<=50;$i++)
        {
            People::create([
                'NAME'=> $faker->firstName,
                'SURNAME'=> $faker->lastName,
                'TELEPHONE'=> $faker->phoneNumber,
                'STREET'=> $faker->streetName,
                'COUNTRY'=> $faker->country

            ]);

        }
    }
}
