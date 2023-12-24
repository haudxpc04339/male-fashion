<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'customer_name' => $faker->name,
                'customer_email' => $faker->email,
                'customer_phone' => $faker->e164PhoneNumber,
                'customer_address' => $faker->address,
                'total' => rand(3, 100),
                'user_id' => rand(1, 10),
                'created_at' =>now()
            ]);
        }
    }
}
