<?php

namespace App\Http\Controllers;

use App\Models\Trabajadores;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trabajadores::all();
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
        $trabajadores = new Trabajadores();
        $trabajadores->nombre = $request->nombre;
        $trabajadores->apellidos = $request->apellidos;
        $trabajadores->sexo = $request->sexo;
        $trabajadores->fecha_nacimiento = $request->fecha_nacimiento;
        $trabajadores->num_documento = $request->num_documento;
        $trabajadores->direccion = $request->direccion;
        $trabajadores->telefono = $request->telefono;
        $trabajadores->email = $request->email;
        $trabajadores->acceso = $request->acceso;
        $trabajadores->usuario = $request->usuario;
        $trabajadores->password = $request->password;
        $trabajadores->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajadores $id)
    {
        return Trabajadores::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $trabajadores = Trabajadores::find($id);
        $trabajadores->nombre = $request->nombre;
        $trabajadores->apellidos = $request->apellidos;
        $trabajadores->sexo = $request->sexo;
        $trabajadores->fecha_nacimiento = $request->fecha_nacimiento;
        $trabajadores->num_standard = $request->num_standard;
        $trabajadores->direccion = $request->direccion;
        $trabajadores->telefono = $request->telefono;
        $trabajadores->email = $request->email;
        $trabajadores->acceso = $request->acceso;
        $trabajadores->usuario = $request->usuario;
        $trabajadores->password = $request->password;
        $trabajadores->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajadores $id)
    {
        $trabajadores = Trabajadores::find($id);
        $trabajadores->delete();
    }
}
