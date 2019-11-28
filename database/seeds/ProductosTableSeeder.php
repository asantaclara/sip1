<?php

use App\Actividad;
use App\Producto;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Producto::create([
                'grupo_id' => $faker->numberBetween($min = 0, $max = 8),
                'categoria_id' => $faker->numberBetween($min = 0, $max = 10),
                'nombre' => $faker->name,
                'descripcion' => $faker->sentence,
                'marca' => $faker->name,
                'url' => $faker->imageUrl(400,240)
            ]);
        }
    }
}
