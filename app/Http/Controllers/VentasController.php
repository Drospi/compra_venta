<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ventas::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new Ventas();
        $venta->idtrabajador = $request->idtrabajador;
        $venta->idcliente = $request->idcliente;
        $venta->fecha = $request->fecha;
        $venta->tipo_comprobante = $request->tipo_comprobante;
        $venta->serie = $request->serie;
        $venta->correlativo = $request->correlativo;
        $venta->igv = $request->igv;
        $venta->estado = $request->estado;
        $venta->save();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Ventas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ventas $ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $venta = Ventas::find($id);
        $venta->idtrabajador = $request->idtrabajador;
        $venta->idcliente = $request->idcliente;
        $venta->fecha = $request->fecha;
        $venta->tipo_comprobante = $request->tipo_comprobante;
        $venta->serie = $request->serie;
        $venta->correlativo = $request->correlativo;
        $venta->igv = $request->igv;
        $venta->estado = $request->estado;
        $venta->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ventas $id)
    {
        $venta = Ventas::find($id);
    }
}
