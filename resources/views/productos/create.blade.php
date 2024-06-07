@extends('Layouts.app')
@section('titulo', 'Crear Productos')
@section('cabecera', 'Crear Producto')

@section('contenido')
<div class="flex justify-center my-6">
    <div>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            {{-- nombre --}}
            <div>
            <label for="nombre" class="label">Nombre</label>       
            <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto" required />
           </div>   
           
            {{-- descripcion --}}
            <label for="descripcion" class="label">Descripcion</label>       
            <input name="descripcion" id="descripcion" class="textarea textarea-bordered" placeholder="Descripcion del producto">
       
            {{-- precio --}}    
            <label for="precio" class="label">Precio</label>       
            <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" required />
       

            {{-- stock --}}
            <label for="stock" class="label">stock</label>       
            <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" required />
       
            <div>
                {{-- boton de guardar  --}}
                <button type="submit" class="btn btn-primary"> Crear producto</button>
            </div>
            </form>
            
        
    </div>
</div>
@endsection