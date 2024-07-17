<?php
 namespace App\Http\Controllers;

 use App\Models\Producto;
 use App\Models\Categoria;  // Asegúrate de importar el modelo Categoria
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 
 class ProductoController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         // Obtener productos ordenados por el campo 'nombre' de forma ascendente y paginarlos
         $productos = Producto::orderBy('nombre', 'asc')->paginate(12); // Cambia 12 al número de productos que quieras por página
 
         // Pasar los productos a la vista
         return view('productos.index', compact('productos'));
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         $categorias = Categoria::all();  // Obtener todas las categorías
         return view('productos.create', compact('categorias'));  // Pasar las categorías a la vista
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
             'categoria_id' => 'required|exists:categorias,id',  // Validar que la categoría exista
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
         return view('productos.show', compact('producto'));
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Producto $producto)
     {
         $categorias = Categoria::all();  // Obtener todas las categorías
         return view('productos.edit', compact('producto', 'categorias'));  // Pasar las categorías y el producto a la vista
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
             'categoria_id' => 'required|exists:categorias,id',  // Validar que la categoría exista
         ]);
 
         $data = $request->all();
 
         if ($request->hasFile('imagen')) {
             // Eliminar la imagen antigua si existe
             if ($producto->imagen) {
                 Storage::disk('public')->delete($producto->imagen);
             }
 
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
         // Eliminar la imagen asociada si existe
         if ($producto->imagen) {
             Storage::disk('public')->delete($producto->imagen);
         }
 
         $producto->delete();
 
         return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
     }
 }
 