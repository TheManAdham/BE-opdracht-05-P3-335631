<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $ids = [1, 2, 3, 4, 5]; // product_id and user_id values

        foreach ($ids as $id) {
            // Insert two entries for each id
            for ($i = 0; $i < 2; $i++) {
                DB::table('product_users')->insert([
                    'product_id' => $id,
                    'user_id' => $id,
                    'amount' => $faker->randomNumber(2),
                    'datedelivery' => $faker->date(),
                    'datenextdelivery' => $faker->date(),
                ]);
            }
        }
    }
}
