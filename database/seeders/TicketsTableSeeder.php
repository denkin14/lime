<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $customerIds = DB::table('customers')->pluck('id')->toArray();

        $tickets = [
            [
                'title' => 'Issue 1',
                'description' => 'Thank you for submitting the ticket. We will address your request promptly.',
                'customer_id' => $customerIds[array_rand($customerIds)],
                'scheduled_date' => now()->addDays(7),
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Generate 9 additional random tickets

        for ($i = 0; $i < 9; $i++) {
            $tickets[] = [
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'customer_id' => $customerIds[array_rand($customerIds)],
                'scheduled_date' => $faker->dateTimeBetween('now', '+1 month'),
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('tickets')->insert($tickets);
    }
}
