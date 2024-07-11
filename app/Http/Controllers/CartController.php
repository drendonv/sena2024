<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        if (Auth::check()) {
            $user = Auth::user();
            
            // Agrega el item al carrito del usuario autenticado
            $cartItem = Cart::updateOrCreate(
                ['user_id' => $user->id, 'product_id' => $productId],
                ['quantity' => DB::raw("quantity + $quantity")]
            );
        } else {
            // Agrega el item al carrito del invitado en la sesión
            $cart = session()->get('cart', []);
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                $cart[$productId] = [
                    'product_id' => $productId,
                    'quantity' => $quantity,
                ];
            }
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Producto añadido al carrito');
    }

    public function remove(Request $request, $productId)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Elimina el item del carrito del usuario autenticado
            $user->cart()->where('product_id', $productId)->delete();
        } else {
            // Elimina el item del carrito del invitado en la sesión
            $cart = session()->get('cart', []);
            if (isset($cart[$productId])) {
                unset($cart[$productId]);
            }
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito');
    }

    public function checkout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // Depuración adicional
            $cartItems = $user->cart;
            dd($cartItems); // Dump y die para verificar la relación

            // Vacía el carrito del usuario autenticado
            $user->cart()->delete();
        } else {
            // Vacía el carrito del invitado en la sesión
            session()->forget('cart');
        }

        return redirect()->route('cart.index')->with('success', 'Compra realizada con éxito');
    }

    public function index()
    {
        if (Auth::check()) {
            $cartItems = Auth::user()->cart;
        } else {
            // Lógica para carrito de invitado (sin autenticación)
            $cartItems = session()->get('cart', []);
        }

        return view('cart.index', compact('cartItems'));
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        if (Auth::check()) {
            $user = Auth::user();

            // Actualiza la cantidad del item en el carrito del usuario autenticado
            $user->cart()->where('id', $id)->update(['quantity' => $quantity]);
        } else {
            // Actualiza la cantidad del item en el carrito del invitado en la sesión
            $cart = session()->get('cart', []);
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $quantity;
            }
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cantidad actualizada');
    }
}
