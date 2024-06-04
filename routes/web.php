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
        ['nombre' => 'Producto 1', 'precio' => 100, 'imagen' => 'producto1.jpg', 'descripcion' => 'Descripción del Producto 1'],
        ['nombre' => 'Producto 2', 'precio' => 200, 'imagen' => 'producto2.jpg', 'descripcion' => 'Descripción del Producto 2'],
        ['nombre' => 'Producto 3', 'precio' => 300, 'imagen' => 'producto3.jpg', 'descripcion' => 'Descripción del Producto 3'],
        ['nombre' => 'Producto 4', 'precio' => 400, 'imagen' => 'producto4.jpg', 'descripcion' => 'Descripción del Producto 4'],
        ['nombre' => 'Producto 5', 'precio' => 500, 'imagen' => 'producto5.jpg', 'descripcion' => 'Descripción del Producto 5'],
    ];

    $nombre = 'Diego Rendon';
    
    return view('welcome', ['productos' => $productos, 'nombre' => $nombre]);
});

Route::get('/about', function () {
    $nombre = "Usuario"; // Cambia "Usuario" por el nombre del usuario real
    return view('about', compact('nombre'));
});

Route::get('/mis-cursos', function () {
    $nombre = 'Diego Rendon'; // Definir la variable aquí
    return view('mis-cursos', ['nombre' => $nombre]);
});

Route::get('/contacto', function () {
    $nombre = 'Diego Rendon';
    return view('contacto' , ['nombre' => $nombre]);
});







//Route::view('/ contacto','contacto');
    