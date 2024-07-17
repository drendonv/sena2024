<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'stock' => $this->faker->numberBetween(1, 100),
            'imagen' => 'images/productos/producto_' . $this->faker->unique()->numberBetween(1, 100) . '.jpg',
            'categoria_id' => Categoria::inRandomOrder()->first()->id, // Asignar un id de categoría existente
        ];
    }
}
