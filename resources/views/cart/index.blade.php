@extends('layouts.app')

@section('titulo', 'Carrito de Compras')

@section('contenido')
    <h1 class="text-2xl font-bold mb-6">Carrito de Compras</h1>

    @if(Auth::check())
        @if($cartItems->isEmpty())
            <p>No hay productos en tu carrito.</p>
        @else
            <table class="table-auto w-full mb-6">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Producto</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->producto->nombre }}</td>
                            <td class="border px-4 py-2">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="w-12 text-center">
                                    <button type="submit" class="btn btn-xs btn-primary">Actualizar</button>
                                </form>
                            </td>
                            <td class="border px-4 py-2">${{ $item->producto->precio }}</td>
                            <td class="border px-4 py-2">${{ $item->producto->precio * $item->quantity }}</td>
                            <td class="border px-4 py-2">
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @else
        @if(empty($cartItems))
            <p>No hay productos en tu carrito.</p>
        @else
            <table class="table-auto w-full mb-6">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Producto</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Precio</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $productId => $item)
                        <tr>
                            <td class="border px-4 py-2">Producto ID: {{ $productId }}</td>
                            <td class="border px-4 py-2">
                                <form action="{{ route('cart.update', $productId) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="w-12 text-center">
                                    <button type="submit" class="btn btn-xs btn-primary">Actualizar</button>
                                </form>
                            </td>
                            <td class="border px-4 py-2">$--</td>
                            <td class="border px-4 py-2">$--</td>
                            <td class="border px-4 py-2">
                                <form action="{{ route('cart.remove', $productId) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection
