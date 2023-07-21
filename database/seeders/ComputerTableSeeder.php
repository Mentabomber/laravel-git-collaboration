<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Computer;

class ComputerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $type = $faker->randomElement([
                'Laptop',
                'Desktop'
            ]);

            if($type == 'Laptop') {
                $cooling = 'Air';
            } else {
                $cooling = $faker->randomElement([
                    'Liquid',
                    'Air'
                ]);
            }

            Computer::create([
                'brand' => $faker->company(),
                'type' => $type,
                'cooling' => $cooling,
                'price' => $faker->randomFloat(2, 350, 5000),
                'release_date' => $faker->date(),
                'description' => $faker->text()

            ]);
        }
    }
}
