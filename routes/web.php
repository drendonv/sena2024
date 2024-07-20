<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');

Route::resource('categorias', CategoriaController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class)->except(['index', 'show']);
});

Route::resource('productos', ProductoController::class)->only(['index', 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Rutas para pedidos
Route::resource('/pedidos', PedidoController::class)->except(['create']);
Route::get('/pedidos/create/{producto}', [PedidoController::class, 'create'])->name('pedidos.create');
Route::delete('/pedidos/{pedido}', [PedidoController::class, 'destroy'])->name('pedidos.destroy')->middleware('auth');


// Rutas de pago de pedido
Route::get('/pedidos/pagar/{pedido}', [PedidoController::class, 'pagar'])->name('pedidos.pagar');
Route::get('/pagar/tarjeta/{pedido}', [PagoController::class, 'pagarConTarjeta'])->name('pagar.tarjeta');
Route::post('/pagar/tarjeta/{pedido}', [PagoController::class, 'procesarPagoConTarjeta'])->name('pagos.procesarTarjeta');
Route::get('/pagar/nequi/{pedido}', [PagoController::class, 'pagarConNequi'])->name('pagar.nequi');
Route::post('/pagar/nequi/{pedido}', [PagoController::class, 'procesarPagoConNequi'])->name('pagos.procesarNequi');
Route::get('/pagar/bancolombia/{pedido}', [PagoController::class, 'pagarConBancolombia'])->name('pagar.bancolombia');
Route::post('/pagar/bancolombia/{pedido}', [PagoController::class, 'procesarPagoConBancolombia'])->name('pagos.procesarBancolombia');

// Ruta de éxito
Route::get('/pago/exito/{pedido}', [PagoController::class, 'exito'])->name('pagos.exito');

require __DIR__.'/auth.php';

