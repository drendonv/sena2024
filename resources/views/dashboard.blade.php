@extends('layouts.app')
@section('titulo','Dashboard')
@section('contenido')
<div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Hola,{{ Auth()->user()->name }}</h1>
        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
         <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver prodcutos</a>
      </div>
    </div>
  </div>
@endsection
