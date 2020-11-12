<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Cliente;
use App\Http\Controllers\Inventario\Productos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Seccion Administracion 
Route::get('/', [Administracion::class, 'index']);

Route::get('administracion', [Administracion::class, 'usuarios']);

Route::get('descripcion', [Administracion::class, 'descripcion'] );

//Seccion Clientes
    
Route::get('clientes/visualizar', [Cliente::class, 'index'] )->name('listadoCli');

Route::get('clientes/visualizar/{id}/{nombre}/{edad}', [Cliente::class, 'detalle']);

Route::get('clientes/fieles' , [Cliente::class, 'fieles'] );

Route::get('clientes/registrar', [Cliente::class, 'formularioReg'])->name('formularioRegistro');

Route::post('clientes/registrar', [Cliente::class, 'registrar'])->name('registroCli'); 


Route::get('clientes/{nombre}/{apellido?}', [Cliente::class, 'antiguos']);



//Seccion Productos

Route::get('productos/listado', [Productos::class, 'index']);

Route::get('productos/ofertas', [Productos::class, 'ofertas'] );

Route::get('productos/hogar', [Productos::class, 'hogar'] );


// Ejemplos rutas
/*
Route::get('productos/{id}', function ($id){
    //return 'El producto Nº '. $id;
    return "El producto Nº {$id}";
})->where('id','[0-9]+');


Route::get('inventario/{id}', function ($id) {
    return view('productos.productos')
    ->with('identificador', $id )
    ->with('nombre', 'Leche Deslactosada');
});
*/

