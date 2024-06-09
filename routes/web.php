<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


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

//CRUD de productos

Route::resource('productos',ProductoController::class); //crear 7 rutas para el crud



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
Route::view('/' , 'welcome');







//Route::view('/ contacto','contacto');
    