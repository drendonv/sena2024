<?php
 namespace App\Http\Controllers;

 use App\Models\Producto;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 
 class ProductoController extends Controller
 {
     public function index()
     {
         $productos = Producto::orderBy('nombre', 'asc')->get();
         return view('productos.index', compact('productos'));
     }
 
     public function create()
     {
         return view('productos.create');
     }
 
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
 
     public function show(Producto $producto)
     {
         return view('productos.show', compact('producto'));
     }
 
     public function edit(Producto $producto)
     {
         return view('productos.edit', compact('producto'));
     }
 
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
 
     public function destroy(Producto $producto)
     {
         if ($producto->imagen) {
             Storage::disk('public')->delete($producto->imagen);
         }
 
         $producto->delete();
 
         return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
     }
 }
 