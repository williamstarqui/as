<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Cover;

use Illuminate\Support\Facades\Storage;

class CoverController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers = Cover::orderBy('id', 'DESC')->paginate(3);
        // $categories = Category::orderBy('id', 'DESC')->paginate();
        return view('admin.portada.index', compact('covers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portada.create');
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
            'titulo' => 'required',
            'foto' => 'required|image|max:2048',
        ]);
        $nombre = Str::random(10) . $request->file('foto')->getClientOriginalName();
        $ruta = storage_path() . '\app\public\img/' . $nombre;
        Image::make($request->file('foto'))
            ->resize(1680, 800)
            ->save($ruta);
        // $imagen = $request->file('url')->store('public/img');;
        //  $url = Storage::url($ruta);
        $covers = new Cover();
        $covers->titulo = $request->input('titulo');
        $covers->foto = '/storage/img/' . $nombre;
        $covers->save();

        return redirect()->route('cover.index')->with('info', 'Agregado correctamente.');;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cover = Cover::find($id)->delete();
        return back();
    }
}
