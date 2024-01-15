<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Ventas;
use Illuminate\Http\Request;

class DetalleVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Detalle_Ventas::all();
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
        $detalle_venta = new Detalle_Ventas();
        $detalle_venta->idventa = $request->idventa;
        $detalle_venta->iddetalle_ingreso = $request->iddetalle_ingreso;
        $detalle_venta->cantidad = $request->cantidad;
        $detalle_venta->precio_venta = $request->precio_venta;
        $detalle_venta->descuento = $request->descuento;
        $detalle_venta->save();
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return Detalle_Ventas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Ventas $detalle_Ventas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $detalle_venta = Detalle_Ventas::find($id);
        $detalle_venta->idventa = $request->idventa;
        $detalle_venta->iddetalle_ingreso = $request->iddetalle_ingreso;
        $detalle_venta->cantidad = $request->cantidad;
        $detalle_venta->precio_venta = $request->precio_venta;
        $detalle_venta->descuento = $request->descuento;
        $detalle_venta->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle_Ventas $id)
    {
        $detalle_venta = Detalle_Ventas::find($id);
        $detalle_venta->delete();
    }
}
