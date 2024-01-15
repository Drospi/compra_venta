<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Clientes::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->sexo = $request->sexo;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->num_documento = $request->num_documento;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->save();
         return 'se ha registrado';
        } catch (QueryException $e) {
            // Manejar la excepción de la base de datos
            return 'Error al registrar el cliente. Detalles: ' . $e->getMessage();
        } catch (\Exception $e) {
            // Manejar otras excepciones
            return 'Error inesperado. Detalles: ' . $e->getMessage();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $id)
    {
        return Clientes::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
        $cliente = Clientes::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellidos = $request->apellidos;
        $cliente->sexo = $request->sexo;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->num_documento = $request->num_documento;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->save();
    } catch (QueryException $e) {
        // Manejar la excepción de la base de datos
        return 'Error al registrar el cliente. Detalles: ' . $e->getMessage();
    } catch (\Exception $e) {
        // Manejar otras excepciones
        return 'Error inesperado. Detalles: ' . $e->getMessage();
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();
    }
}
