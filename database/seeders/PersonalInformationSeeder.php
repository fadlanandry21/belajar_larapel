<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * a
     */
    public function run(): void
    {
        //    call personal factory
        \App\Models\PersonalInformation::factory()->count(10)->create();
    }

    //  using eloquent command

    \App\Models\PersonalInformation::create(
        [
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'email' => 'test@test.com',
            'country' => 'Test City',
            'street_address' => 'Test Street Adress',
            'city_name' => 'Test City',
            'state' => 'Test State',
            'zip_code' => 'Test Zip Code',
        ]
        );

}
