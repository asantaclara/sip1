<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::truncate();

        $faker = Factory::create();


        for ($i = 0; $i < 100; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            Cliente::create([
                'nombre' => $faker->name($gender),
                'apellido' => $faker->lastName,
                'dni' => $faker->numberBetween(10000000,99999999),
                'fecha_nacimiento' => $faker->date(),
                'genero' => $gender,
                'comentarios' => $faker->sentence,
                'telefono' => $faker->phoneNumber,
                'direccion' => $faker->address,
                'email' => $faker->email,
                'obra_social' => $faker->randomElement(['OSDE', 'GALENO', 'SWISS MEDICAL']),
                'plan_obra_social' => $faker->randomElement(['210', '310', '410', '440']),
                'numero_obra_social' => $faker->numberBetween(1056123000000,9999915699900000)
            ]);
        }
    }
}
