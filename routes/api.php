<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TrabajadoresController;
use App\Http\Controllers\VentasController;
use App\Models\Detalle_Ingresos;
use App\Models\Detalle_Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/clientes/{id}', [ClientesController::class, 'show']);
Route::post('/clientes', [ClientesController::class, 'store']);
Route::put('/clientes/{id}', [ClientesController::class, 'update']);
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy']);

Route::get('/trabajadores', [TrabajadoresController::class, 'index']);
Route::get('/trabajadores/{id}', [TrabajadoresController::class, 'show']);
Route::post('/trabajadores', [TrabajadoresController::class, 'store']);
Route::put('/trabajadores/{id}', [TrabajadoresController::class, 'update']);
Route::delete('/trabajadores/{id}', [TrabajadoresController::class, 'destroy']);

Route::get('/ventas', [VentasController::class, 'index']);
Route::get('/ventas/{id}', [VentasController::class, 'show']);
Route::post('/ventas', [VentasController::class, 'store']);
Route::put('/ventas/{id}', [VentasController::class, 'update']);
Route::delete('/ventas/{id}', [VentasController::class, 'destroy']);

Route::get('/articulos', [ArticulosController::class, 'index']);
Route::get('/articulos/{id}', [ArticulosController::class, 'show']);
Route::post('/articulos', [ArticulosController::class, 'store']);
Route::put('/articulos/{id}', [ArticulosController::class, 'update']);
Route::delete('/articulos/{id}', [ArticulosController::class, 'destroy']);

Route::get('/detalle_ingresos', [Detalle_Ingresos::class, 'index']);
Route::get('/detalle_ingresos/{id}', [Detalle_Ingresos::class, 'show']);
Route::post('/detalle_ingresos', [Detalle_Ingresos::class, 'store']);
Route::put('/detalle_ingresos/{id}', [Detalle_Ingresos::class, 'update']);
Route::delete('/detalle_ingresos/{id}', [Detalle_Ingresos::class, 'destroy']);

Route::get('/detalle_ventas', [Detalle_Ventas::class, 'index']);
Route::get('/detalle_ventas/{id}', [Detalle_Ventas::class, 'show']);
Route::post('/detalle_ventas', [Detalle_Ventas::class, 'store']);
Route::put('/detalle_ventas/{id}', [Detalle_Ventas::class, 'update']);
Route::delete('/detalle_ventas/{id}', [Detalle_Ventas::class, 'destroy']);
