<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Actividad;


class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividad::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Actividad::create([
                'tipo_id' => $faker->numberBetween($min = 0, $max = 50),
                'cliente_id' => $faker->numberBetween($min = 0, $max = 100),
                'profesional_id' => $faker->numberBetween($min = 0, $max = 100),
                'contenido' => $faker->sentence,
                'fecha_inicio' => $faker->dateTimeBetween('-1000 days','-1 days'),
                'fecha_fin' => $faker->dateTimeBetween('+0 days','+1000 days'),
                'finalizada' => $faker->boolean,
                'comentario_paciente' => $faker->sentence,
                'comentario_profesional' => $faker->sentence,
            ]);
        }
    }
}
