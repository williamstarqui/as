<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->paginate(6);
        // $categories = Category::orderBy('id', 'DESC')->paginate();
        return view('admin.producto.index', compact('products'));
        // return view('admin.producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $nombre = Str::random(5) . $request->file('foto')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\img\ ' . $nombre;
        Image::make($request->file('foto'))
            ->resize(400, 500, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
            })
            ->save($ruta);


        // $imagen = $request->file('url')->store('public/img');;

        //  $url = Storage::url($ruta);
        $products = new Product();
        $products->nombre = $request->input('nombre');
        $products->marca = $request->input('marca');
        $products->descripcion = $request->input('descripcion');
        $products->precio = $request->input('precio');
        $products->foto = '/storage/img/' . $nombre;
        $products->save();

        return redirect()->route('product.index')->with('info', 'Agregado correctamente.');
        // $product = Product::create($request->all());
        // return redirect()->route('covers.index')->with('info', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.producto.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nombre' => 'required',
            'marca' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',

        ]);
        $product->update($request->all());
        return redirect()->route('product.index')->with('info', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return back();
    }
}
