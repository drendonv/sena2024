<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Puedes usar paginación si prefieres: Producto::paginate(10);
        return view('welcome', compact('productos'));
    }
}
