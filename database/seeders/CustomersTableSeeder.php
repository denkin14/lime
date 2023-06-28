<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $customers = [
            [
                'first_name' => 'Lisa',
                'last_name' => 'Mutheu',
                'username' => 'Lisa',
                'expiry_date' => now()->addYear(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Generate 9 additional random customers
        for ($i = 0; $i < 9; $i++) {
            $customers[] = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'username' => $faker->userName,
                'expiry_date' => $faker->dateTimeBetween('now', '+1 year'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('customers')->insert($customers);
    }
}
