<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Ingresos;
use Illuminate\Http\Request;

class DetalleIngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Detalle_Ingresos::all();
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
        $detalle_ingreso = new Detalle_Ingresos();
        $detalle_ingreso->idingreso = $request->idingreso;
        $detalle_ingreso->idarticulo = $request->idarticulo;
        $detalle_ingreso->precio_compra = $request->precio_compra;
        $detalle_ingreso->precio_venta = $request->precio_venta;
        $detalle_ingreso->stock_inicial = $request->stock_inicial;
        $detalle_ingreso->stock_actual = $request->stock_actual;
        $detalle_ingreso->fecha_produccion = $request->fecha_produccion;
        $detalle_ingreso->fecha_vencimiento = $request->fecha_vencimiento;
        $detalle_ingreso->save();

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return Detalle_Ingresos::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Ingresos $detalle_Ingresos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detalle_ingreso = Detalle_Ingresos::find($id);
        $detalle_ingreso->idingreso = $request->idingreso;
        $detalle_ingreso->idarticulo = $request->idarticulo;
        $detalle_ingreso->precio_compra = $request->precio_compra;
        $detalle_ingreso->precio_venta = $request->precio_venta;
        $detalle_ingreso->stock_inicial = $request->stock_inicial;
        $detalle_ingreso->stock_actual = $request->stock_actual;
        $detalle_ingreso->fecha_produccion = $request->fecha_produccion;
        $detalle_ingreso->fecha_vencimiento = $request->fecha_vencimiento;
        $detalle_ingreso->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $detalle_ingreso = Detalle_Ingresos::find($id);
        $detalle_ingreso->delete();
    }
}
