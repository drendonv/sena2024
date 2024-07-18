<!-- resources/views/pagos/tarjeta.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar con Tarjeta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-2xl font-bold text-gray-800 text-center">Pago con Tarjeta</h2>
                <form action="{{ route('pagos.procesarTarjeta', $pedido->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                            Nombre en la Tarjeta
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Nombre completo" name="nombre" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="numero">
                            Número de Tarjeta
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numero" type="text" placeholder="1234 5678 9012 3456" name="numero" required>
                    </div>
                    <div class="mb-4 flex">
                        <div class="mr-2 w-1/2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="expiracion">
                                Fecha de Expiración
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="expiracion" type="text" placeholder="MM/AA" name="expiracion" required>
                        </div>
                        <div class="ml-2 w-1/2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="cvv">
                                CVV
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cvv" type="text" placeholder="123" name="cvv" required>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Pagar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
