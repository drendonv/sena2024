<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {

    $productos = [
        ['nombre' => 'Producto 1', 'precio' => 100],
        ['nombre' => 'Producto 2', 'precio' => 200],
        ['nombre' => 'Producto 3', 'precio' => 300],
        ['nombre' => 'Producto 4', 'precio' => 400],
        ['nombre' => 'Producto 5', 'precio' => 500],
    ];

    $nombre = 'Diego rendon';
    
    return view('welcome', ['productos' => $productos],['nombre' => $nombre]);
});

//Route::view('/ contacto','contacto');
    