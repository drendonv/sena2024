@extends('layouts.app')

@section('titulo', 'Contáctenos')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Contáctenos</h1>
    <p class="mb-4">Estamos aquí para ayudarte. Puedes contactarnos a través de nuestras redes sociales o enviarnos un mensaje directamente a nuestro WhatsApp.</p>

    <div class="flex justify-center space-x-4">
        <!-- Enlace a Facebook -->
        <a href="https://www.facebook.com/lalytallercreativo" target="_blank" class="text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.675 0H1.326C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.785 4.66-4.785 1.325 0 2.463.099 2.797.143v3.24l-1.919.001c-1.505 0-1.796.715-1.796 1.764v2.314h3.591l-.468 3.622h-3.123V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z"/>
            </svg>
        </a>

        <!-- Enlace a Instagram -->
        <a href="https://www.instagram.com/laly_taller_creativo/" target="_blank" class="text-pink-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0C8.74 0 8.333.013 7.053.072 5.77.132 4.674.29 3.682.57a6.337 6.337 0 0 0-2.444 1.005 6.336 6.336 0 0 0-1.632 1.632A6.337 6.337 0 0 0 .57 5.317C.29 6.31.132 7.406.072 8.687.013 9.967 0 10.376 0 13.636s.013 3.67.072 4.95c.06 1.282.218 2.38.498 3.373a6.337 6.337 0 0 0 1.005 2.444 6.337 6.337 0 0 0 1.632 1.632 6.337 6.337 0 0 0 2.444 1.005c.993.28 2.09.438 3.373.498 1.28.06 1.688.072 4.95.072s3.67-.013 4.95-.072c1.282-.06 2.38-.218 3.373-.498a6.336 6.336 0 0 0 2.444-1.005 6.337 6.337 0 0 0 1.632-1.632 6.336 6.336 0 0 0 1.005-2.444c.28-.993.438-2.09.498-3.373.06-1.28.072-1.688.072-4.95s-.013-3.67-.072-4.95c-.06-1.282-.218-2.38-.498-3.373a6.336 6.336 0 0 0-1.005-2.444 6.337 6.337 0 0 0-1.632-1.632A6.336 6.336 0 0 0 20.318.57c-.993-.28-2.09-.438-3.373-.498C15.67.013 15.261 0 11.999 0zm0 2.163c3.258 0 3.657.011 4.947.07 1.18.056 1.818.241 2.243.404a4.47 4.47 0 0 1 1.635.958c.46.46.7.725.958 1.635.163.425.349 1.063.404 2.243.06 1.29.07 1.689.07 4.947s-.011 3.657-.07 4.947c-.056 1.18-.241 1.818-.404 2.243a4.47 4.47 0 0 1-.958 1.635c-.46.46-.725.7-1.635.958-.425.163-1.063.349-2.243.404-1.29.06-1.689.07-4.947.07s-3.657-.011-4.947-.07c-1.18-.056-1.818-.241-2.243-.404a4.47 4.47 0 0 1-1.635-.958c-.46-.46-.7-.725-.958-1.635-.163-.425-.349-1.063-.404-2.243-.06-1.29-.07-1.689-.07-4.947s.011-3.657.07-4.947c.056-1.18.241-1.818.404-2.243a4.47 4.47 0 0 1 .958-1.635c.46-.46.725-.7 1.635-.958.425-.163 1.063-.349 2.243-.404 1.29-.06 1.689-.07 4.947-.07zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.167a4.005 4.005 0 1 1 0-8.01 4.005 4.005 0 0 1 0 8.01zm6.406-10.558a1.44 1.44 0 1 0 0-2.88 1.44 1.44 0 0 0 0 2.88z"/>
            </svg>
        </a>

        <!-- Enlace a WhatsApp -->
        <a href="https://wa.me/3123942707" target="_blank" class="text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 0C5.372 0 0 5.372 0 12c0 2.209.573 4.297 1.648 6.144L.086 23.385a.967.967 0 0 0 1.179 1.179l5.241-1.561A11.94 11.94 0 0 0 12 24c6.628 0 12-5.372 12-12S18.628 0 12 0zm7.438 17.186a7.83 7.83 0 0 1-2.944 1.73c-1.045.312-2.203.471-3.452.471-1.256 0-2.453-.162-3.522-.486-1.06-.318-2.045-.773-2.938-1.349-.888-.571-1.601-1.24-2.147-2.005-.562-.771-.978-1.576-1.266-2.484-.3-.928-.45-1.872-.45-2.795 0-.916.162-1.805.486-2.656.332-.861.805-1.617 1.419-2.28.6-.646 1.336-1.137 2.226-1.51.886-.372 1.865-.544 2.899-.544 1.033 0 2.052.182 3.016.552.937.358 1.751.871 2.432 1.505.64.583 1.137 1.281 1.508 2.06.364.76.558 1.57.558 2.378 0 .826-.197 1.613-.558 2.378a7.695 7.695 0 0 1-1.53 2.12zm-2.58-2.122c-.092.153-.273.292-.548.46-.275.168-.568.273-.864.391-.296.12-.565.221-.806.324-.235.101-.486.206-.752.318-.269.115-.523.198-.758.266-.238.067-.437.086-.63.056-.188-.028-.368-.098-.533-.209-.165-.108-.312-.236-.455-.39-.14-.156-.294-.323-.446-.494-.152-.172-.298-.354-.436-.548-.134-.192-.264-.393-.372-.594-.115-.204-.191-.413-.3-.632-.116-.22-.244-.46-.402-.736-.135-.24-.267-.496-.36-.754-.092-.256-.152-.505-.176-.74-.027-.244-.012-.488.031-.74.041-.245.144-.46.272-.664.136-.213.312-.397.513-.573.213-.188.432-.374.682-.518.252-.14.499-.266.754-.373.257-.105.494-.201.742-.276.254-.08.49-.14.702-.181.216-.042.415-.068.59-.092.172-.021.358-.065.569-.129.209-.064.387-.136.54-.207.15-.067.29-.13.41-.173.119-.04.22-.058.312-.055.083.002.168.038.256.092.084.053.145.125.191.22.05.106.052.234.012.382-.038.147-.098.303-.184.471-.085.165-.168.344-.24.524-.084.18-.156.367-.216.55-.07.19-.145.38-.244.576-.099.19-.191.382-.29.576-.09.172-.166.349-.244.522-.072.17-.136.33-.207.476-.065.15-.125.297-.184.436-.058.144-.109.273-.145.382-.035.112-.054.19-.086.277z"/>
            </svg>
        </a>
    </div>
</div>
@endsection
