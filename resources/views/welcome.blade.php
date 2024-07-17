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
        
@endsection
