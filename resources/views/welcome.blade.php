@extends('Layouts.app')
@section('titulo', 'Consultar Productos')

@section('contenido')
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">  
        @foreach ($productos as $producto)
            <div class="card w-60 bg-base-100 shadow-xl">
                <figure>
                    @if(isset($producto['imagen']))
                        <img src="{{ asset('images/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}" />
                    @else
                        <img src="{{ asset('images/default.jpg') }}" alt="Imagen por defecto" />
                    @endif
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto['nombre'] }}
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>{{ $producto['nombre'] }} - Descripción del producto</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">${{ $producto['precio'] }}</div> 
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
