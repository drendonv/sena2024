<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;
use Faker\Factory as Faker;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de las categorías
        $categoriaIds = Categoria::all()->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Producto::create([
                'nombre' => $faker->word,
                'descripcion' => $faker->sentence,
                'precio' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->numberBetween(1, 100),
                
                'categoria_id' => $faker->randomElement($categoriaIds),
            ]);
        }
    }
}
