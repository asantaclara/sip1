<?php

use App\Nota;
use Faker\Factory;
use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nota::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {

            Nota::create([
                'cliente_id' => $i+1,
                'tipo_id' => $faker->numberBetween(1,10),
                'profesional_id'=> $faker->numberBetween(1,100),
                'contenido'=> $faker->sentence
            ]);
        }
    }
}
