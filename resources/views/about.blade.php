@extends('layouts.app')
@section('titulo', 'Acerca de nosotros')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto flex flex-col lg:flex-row">
        <div class="w-full lg:w-1/2 pr-4">
            <!-- Aquí va tu texto -->
            <div>
                <h1 class="text-3xl font-bold mb-4">¡Bienvenida a mi mundo de Lazos hechos a mano!</h1>
                <p>Me encanta diseñar, crear, combinar colores y texturas, aquí vas a encontrar y poder adquirir lindos lazos para la princesita de tu hogar y tambien podrás aprender junto a mi si eres una mama DIY (hazlo tú mismo) o si quieres hacer tu propio mundo de lazos…
                    ¡Estoy Para ayudarte!
                    </p>
                <p>Acá vas a encontrar y poder adquirir mis creaciones y también podrás aprender junto a mí si eres una mamá DIY o si quieres hacer tu propio mundo de lazos.</p>
                <h1 class="text-3xl font-bold mt-11">Academia</h1>
                <p>En mi Academia podrás encontrar cursos para aprender a hacer lazos como los que hago. Comparto toda mi experiencia con mucho amor!</p>
                <p>También puedes acceder a recursos gratuitos como moldes y tutoriales de modelos sencillos que comparto con frecuencia a través de las redes sociales.</p>
                <p class="text-lg mb-4 mt-8">Para más información, contáctenos en...</p>
            </div>
        </div>
        <div class="w-full lg:w-1/2 pl-4">
            <!-- Aquí va tu imagen -->
            <img src="{{ asset('storage/images/1717819670.jpeg') }}" class="mx-auto lg:mx-0" width="400px" alt="Accesorios">
            
        </div>
    </div>
</div>
@endsection

