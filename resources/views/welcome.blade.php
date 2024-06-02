@extends('Layouts.app')
@section('titulo','consultar productos')
@section('contenido')
    


    <h1> Bienvenido {{$nombre}} a la aplicacion SENA2024</h1>
    <h2>hello</h2>

    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto['nombre'] }} - Precio: ${{ $producto['precio'] }}</li>
        @endforeach
    </ul>

    @endsection
