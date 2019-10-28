<?php

use App\Actividad;
use App\Cliente;
use App\Medicion;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MedicionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicion::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {

            Medicion::create([
                'cliente_id' => $i+1,
                'tipo_id' => $faker->numberBetween(1,10),
                'profesional_id'=> $faker->numberBetween(1,100),
                'peso'=> $faker->numberBetween(45,150),
                'masa_muscular'=> $faker->numberBetween(1,60),
                'masa_grasa'=> $faker->numberBetween(1,60),
                'fecha' => $faker->date(),
                'altura'=> $faker->numberBetween(150,230),
                'contenido'=> $faker->sentence
            ]);
        }
    }
}
