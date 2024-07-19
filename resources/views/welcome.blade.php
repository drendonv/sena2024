@extends('layouts.app')
@section('titulo', 'Consultar Productos')

@section('contenido')
<div class="hero min-h-screen" style="background-image: url(https://images.pexels.com/photos/26953740/pexels-photo-26953740.jpeg);">
   <div class="hero-content text-center text-neutral-content">
     <div class="max-w-md">
       <p class="mb-5 text-gray-700">Explora nuestra colección de hermosos moños para niñas. Creaciones únicas y personalizadas para cada ocasión.</p>
       <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg">Ver Productos</a>
     </div>
   </div>
</div>

<div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Nuestros Productos</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($productos as $producto)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                @if ($producto->imagen)
                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="product-image" />
                @else
                    <img src="https://loremflickr.com/200/200/store&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" class="product-image" />
                @endif
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">{{ $producto->nombre }}</h3>
                    <p class="text-gray-700 mb-4">{{ $producto->descripcion }}</p>
                    <p class="text-gray-900 font-bold">${{ number_format($producto->precio, 2) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
