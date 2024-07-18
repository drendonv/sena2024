@extends('layouts.app')
@section('titulo', 'Pagar Pedido')
@section('cabecera', 'Pagar Pedido')

@section('contenido')
    <div class="flex justify-center">
        <div class="overflow-x-auto">
            <h2>Detalles del Pedido</h2>
            <p>ID del Pedido: {{ $pedido->id }}</p>
            <p>Importe Total: {{ $pedido->monto_total }}</p>

            <h2>Elegir Método de Pago</h2>
            <a href="{{ route('pagar.tarjeta', $pedido->id) }}" class="btn btn-primary">Pagar con Tarjeta de Crédito/Débito</a>
            <a href="{{ route('pagar.nequi', $pedido->id) }}" class="btn btn-primary">Pagar con Nequi</a>
            <a href="{{ route('pagar.bancolombia', $pedido->id) }}" class="btn btn-primary">Pagar con Botón Bancolombia</a>
        </div>
    </div>
@endsection
