@extends('layouts.app')

@section('titulo', 'Consultar productos')

@section('contenido')
    {{-- Botón para crear un nuevo producto (solo visible para administradores autenticados) --}}
    @auth
        @if(Auth::user()->isAdmin())
            <div class="flex justify-start m-6">
                <a href="{{ route('productos.create') }}" class="btn btn-outline">Crear Producto</a>
            </div>
        @endif
    @endauth
    
    {{-- Listado de productos --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
        @foreach ($productos as $producto)
            <div class="card w-60 bg-base-100 shadow-xl">
                <figure><img src="https://loremflickr.com/200/200/store&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto->nombre }}
                        <div class="badge badge-secondary text-xs">${{ $producto->precio }}</div>
                    </h2>
                    <p>{{ Str::limit($producto->descripcion, 50) }}</p>
                    <div class="card-actions justify-end">
                        @auth
                            @if(Auth::user()->isAdmin())
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs btn-secondary">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                                </form>
                            @else
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $producto->id }}">
                                    <button type="submit" class="btn btn-xs btn-primary">Agregar al Carrito</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
