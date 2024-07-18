<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function pagarConTarjeta(Pedido $pedido)
    {
        return view('pagos.tarjeta', compact('pedido'));
    }

    public function procesarPagoConTarjeta(Request $request, Pedido $pedido)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'numero' => 'required|numeric|digits:16',
            'expiracion' => 'required|regex:/^\d{2}\/\d{2}$/',
            'cvv' => 'required|numeric|digits:3',
        ]);

        // Lógica para procesar el pago con tarjeta
        // ...

        return redirect()->route('pagos.exito', ['pedido' => $pedido->id]);
    }

    public function pagarConNequi(Pedido $pedido)
    {
        return view('pagos.nequi', compact('pedido'));
    }

    public function procesarPagoConNequi(Request $request, Pedido $pedido)
    {
        // Lógica para procesar el pago con Nequi
        // ...

        return redirect()->route('pagos.exito', ['pedido' => $pedido->id]);
    }

    public function pagarConBancolombia(Pedido $pedido)
    {
        return view('pagos.bancolombia', compact('pedido'));
    }

    public function procesarPagoConBancolombia(Request $request, Pedido $pedido)
    {
        // Lógica para procesar el pago con Bancolombia
        // ...

        return redirect()->route('pagos.exito', ['pedido' => $pedido->id]);
    }

    public function exito(Pedido $pedido)
    {
        return view('pagos.exito', compact('pedido'));
    }
}
