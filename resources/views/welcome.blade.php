<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>sena2024</title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
      </h1>
    <h1> Bienvenido {{$nombre}} a la aplicacion SENA2024</h1>
    <h2>hello</h2>

    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto['nombre'] }} - Precio: ${{ $producto['precio'] }}</li>
        @endforeach
    </ul>
</body>
</html>