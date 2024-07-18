<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function pagarConTarjeta(Pedido $pedido)
    {
        // Lógica para pagar con tarjeta de crédito/débito
        return view('pagos.tarjeta', compact('pedido'));
    }

    public function pagarConNequi(Pedido $pedido)
    {
        // Lógica para pagar con Nequi
        return view('pagos.nequi', compact('pedido'));
    }

    public function pagarConBancolombia(Pedido $pedido)
    {
        // Lógica para pagar con Botón Bancolombia
        return view('pagos.bancolombia', compact('pedido'));
    }
}
