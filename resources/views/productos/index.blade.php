@extends('Layouts.app')
@section('titulo', 'Consultar Productos')

@section('contenido')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">  
    @foreach ($productos as $producto)
        <div class="card w-60 bg-base-100 shadow-xl">
            <figure>
                @php
                    $imagePath = $producto->imagen ?? null;
                    $imageExists = $imagePath && \Illuminate\Support\Facades\Storage::disk('public')->exists($imagePath);
                @endphp
            
                @if($imageExists)
                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($imagePath) }}" alt="{{ $producto->nombre }}" />
                @else
                    <img src="https://source.unsplash.com/random/400x300?product={{ $loop->index }}" alt="{{ $producto->nombre }}" />
                @endif
            </figure>
            
            <div class="card-body">
                <h2 class="card-title">
                    {{ $producto->nombre }}
                    <div class="badge badge-secondary">${{ $producto->precio }}</div>
                </h2>
                <p>{{ Str::limit($producto->descripcion, 50) }}</p>

                <div class="card-actions justify-end">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs btn-secondary">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
