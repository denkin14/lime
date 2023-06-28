<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $customerIds = DB::table('customers')->pluck('id')->toArray();

        $payments = [
            [
                'transaction_code' => 'TAX001',
                'first_name' => 'Ian',
                'last_name' => 'Ianno',
                'customer_id' => $faker->randomElement($customerIds),
                'amount' => 100.00,
                'account_number' => '1234567890',
                'transaction_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        for ($i = 0; $i < 9; $i++) {
            $payments[] = [
                'transaction_code' => $faker->uuid,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'customer_id' => $faker->randomElement($customerIds),
                'amount' => $faker->randomFloat(2, 1, 1000),
                'account_number' => $faker->randomNumber(6),
                'transaction_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('payments')->insert($payments);
    }
}
