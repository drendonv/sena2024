@extends('layouts.app')
@section('titulo', 'Ordenar Producto')
@section('cabecera', 'Nuevo pedido - ' . $producto->nombre)

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <figure><img src="https://loremflickr.com/200/200/store&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure>
                <p class="text-sm">{{$producto->descripcion}}</p>

                {{-- precio y stock--}}
                <div class="flex space-x-4">
                    <div class="badge badge-neutral">${{number_format($producto->precio, 0, ',', '.')}}</div>
                    <div class="badge badge-ghost">{{$producto->stock}} en stock</div>
                </div>
                <form action="{{route('pedidos.store')}}" method="POST">
                    @csrf
                        <input type="hidden" name="producto_id" value="{{$producto->id}}">
                        <input type="hidden" name="precio" value="{{$producto->precio}}">
                    {{-- Cantidad --}}
                    <div class="form-control">
                        <label class="label" for="cantidad">
                            <span class="label-text">Cantidad</span>
                        </label>
                        <select name="cantidad" class="select select-bordered">
                            <option value="1">1</option>
                            @if ($producto->stock >= 2)
                                <option value="2">2</option>
                            @endif
                            @if ($producto->stock >= 3)
                                <option value="3">3</option>
                            @endif
                        </select>
                    </div>
                    {{-- Dirección de envío --}}
                    <p class="mt-2">
                        <span class="font-semibold">Dirección de envío</span><br>
                        {{auth()->user()->address}}

                    </p>
                    
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Ordenar</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection