@extends('Layouts.app')

@section('titulo', 'Consultar Productos')

@section('contenido')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 m-6">

  @foreach ($productos as $producto)
    <div class="card w-60 bg-base-100 shadow-xl">
      <figure>
        <img src="{{ $producto->imagen ? Storage::disk('public')->url($producto->imagen) : 'https://source.unsplash.com/random/400x300?product=' . $loop->index }}"
             alt="{{ $producto->nombre }}"
             srcset="https://source.unsplash.com/random/800x600?product={{ $loop->index }} 2x"
             sizes="(max-width: 400px) 100vw, 400px" />
      </figure>

      <div class="card-body">
        <h2 class="card-title">
          {{ $producto->nombre }}
          <div class="badge badge-secondary">${{ $producto->precio }}</div>
        </h2>
        <p>{{ Str::limit($producto->descripcion, 50) }}</p>

        <div class="card-actions justify-end">
          <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs btn-secondary">Editar</a>
          <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-xs btn-error" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
<div class="m-6">
  {{ $productos->links() }}
</div>
@endsection
