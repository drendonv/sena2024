<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Faker\Factory as Faker;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Producto::create([
                'nombre' => $faker->word,
                'descripcion' => $faker->sentence,
                'precio' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->numberBetween(1, 100),
                'imagen' => null, // Puedes agregar lógica para imágenes si tienes un conjunto de imágenes
            ]);
        }
    }
}
