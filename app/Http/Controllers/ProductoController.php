<?php
 namespace App\Http\Controllers;

 use App\Models\Producto;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 
 class ProductoController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         // Obtener todos los productos ordenados por el campo 'nombre' de forma ascendente
         $productos = Producto::orderBy('nombre', 'asc')->get();
 
         // Pasar los productos a la vista
         return view('productos.index', compact('productos'));
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('productos.create');
     }
 
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {

         $request->validate([
             'nombre' => 'required|string|max:255',
             'descripcion' => 'required|string',
             'precio' => 'required|numeric',
             'stock' => 'required|integer',
             'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
            
      
         $data = $request->all();
 
         if ($request->hasFile('imagen')) {
             $image = $request->file('imagen');
             $imagePath = $image->store('images', 'public');
             $data['imagen'] = $imagePath;
         }
          
        
         Producto::create($data);
 
         return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
     }
 
     /**
      * Display the specified resource.
      */
     public function show(Producto $producto)
     {
         // Lógica para mostrar el producto en una vista
         return view('productos.show', compact('producto'));
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Producto $producto)
     {
         // Devolver una vista con el formulario para editar el producto
         return view('productos.edit', compact('producto'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, Producto $producto)
     {
         $request->validate([
             'nombre' => 'required|string|max:255',
             'descripcion' => 'required|string',
             'precio' => 'required|numeric',
             'stock' => 'required|integer',
             'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
 
         $data = $request->all();
 
         if ($request->hasFile('imagen')) {
             $image = $request->file('imagen');
             $imagePath = $image->store('images', 'public');
             $data['imagen'] = $imagePath;
         }
 
         $producto->update($data);
 
         return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(Producto $producto)
     {
         // Lógica para eliminar el producto
         $producto->delete();
 
         return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
     }
 }
 