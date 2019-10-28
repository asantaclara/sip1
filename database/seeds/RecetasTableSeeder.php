<?php

use App\Receta;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Receta::truncate();

        $faker = Factory::create();


        for ($i = 0; $i < 100; $i++) {
            Receta::create([
                'tipo_id' => $faker->numberBetween($min = 0, $max = 50),
                'profesional_id' => $faker->numberBetween($min = 0, $max = 100),
                'contenido' => $faker->sentence,

            ]);
        }
    }
}
