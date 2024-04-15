<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('products')->insert([
                'name' => $faker->words(1, true), // Generate a 1-word product name
                'barcode' => implode('', $faker->unique()->randomElements(range(0, 9), 10)), // Generate a unique 10-digit barcode number
            ]);
        }
    }
}
