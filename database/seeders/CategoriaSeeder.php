<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre' => 'Categoría 1']);
        Categoria::create(['nombre' => 'Categoría 2']);
        Categoria::create(['nombre' => 'Categoría 3']);
    }
}
