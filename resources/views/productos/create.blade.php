@extends('layouts.app')
@section('titulo', 'Crear Productos')
@section('cabecera', 'Crear Producto')

@section('contenido')
<div class="flex justify-center my-6">
    <div>
        <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- nombre --}}
            <div>
                <label for="nombre" class="label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto" required />
            </div>   

            {{-- descripcion --}}
            <div>
                <label for="descripcion" class="label">Descripción</label>       
                <input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered" />
            </div>

            {{-- precio --}}    
            <div>
                <label for="precio" class="label">Precio</label>       
                <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" required />
            </div>

            {{-- stock --}}
            <div>
                <label for="stock" class="label">Stock</label>       
                <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" required />
            </div>

            {{-- imagen --}}
            <div>
                <label for="imagen" class="label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="input input-bordered" onchange="previewImage(event)" />
            </div>

            <div class="mt-4">
                <img id="imagePreview" src="" alt="Vista previa de la imagen" style="max-width: 200px; max-height: 200px;" />
            </div>

            <div class="mt-4">
                {{-- botón de guardar --}}
                <button type="submit" class="btn btn-primary">Crear producto</button>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('imagePreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
