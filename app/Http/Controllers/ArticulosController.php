<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Articulos::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulo = new Articulos();
        $articulo->codigo = $request->codigo;
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->imagen = $request->imagen;
        $articulo->id_categoria = $request->id_categoria;
        $articulo->id_presentacion = $request->id_presentacion;
        $articulo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Articulos::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulos::find($id);
        $articulo->codigo = $request->codigo;
        $articulo->nombre = $request->nombre;
        $articulo->descripcion = $request->descripcion;
        $articulo->imagen = $request->imagen;
        $articulo->id_categoria = $request->id_categoria;
        $articulo->id_presentacion = $request->id_presentacion;
        $articulo->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $articulo = Articulos::find($id);
        $articulo->delete();
    }
}
