<?php

use App\Profesional;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProfesionalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesional::truncate();

        $faker = Factory::create();


        for ($i = 0; $i < 100; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            Profesional::create([
                'nombre' => $faker->name($gender),
                'apellido' => $faker->lastName,
                'dni' => $faker->numberBetween(10000000,99999999),
                'fecha_nacimiento' => $faker->date(),
                'genero' => $gender,
                'comentarios' => $faker->sentence,
                'telefono' => $faker->phoneNumber,
                'direccion' => $faker->address,
                'email' => $faker->email
            ]);
        }
    }
}
