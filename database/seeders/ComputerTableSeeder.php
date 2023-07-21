<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            Computer::create([
                'brand ' => fake()->company(),
                'type ' => fake()->randomElement([
                    'Laptop',
                    'Desktop'
                ]),
                'cooling' => fake()->randomElement([
                    'Liquid',
                    'Air'
                ]),
                'price' => fake()->randomFloat(2, 350, 5000),
                'release_date' => fake()->date(),
                'description' => fake()->text()

            ]);
        }
    }
}
