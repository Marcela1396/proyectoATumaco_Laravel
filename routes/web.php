<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});

Route::get('clientes', function () {
    return view('clientes.clientela');
});

Route::get('clientes/visualizar', function () {
    return view('clientes.listado', array('id'=>'1', 
                                          'nombre' => 'Jesus Garcia', 
                                          'edad' => 23));
});

Route::get('ofertas', function () {
    return view('ofertas');
});

Route::get('administracion', function () {
    return view('administracion.users.usuarios');
});

// Rutas con parametros
/*
Route::get('productos/{id}', function ($id){
    //return 'El producto Nº '. $id;
    return "El producto Nº {$id}";
})->where('id','[0-9]+');

Route::get('productos/hogar',function (){
    return "Los productos del hogar ";
});

*/

Route::get('productos/hogar',function (){
    return "Los productos del hogar ";
});

Route::get('productos/{id}', function ($id){
    //return 'El producto Nº '. $id;
    return "El producto Nº {$id}";
})->where('id','[0-9]+');

/*
Opcion #1 empleando la funcion array
Route::get('inventario/{id}', function ($id) {
    return view('productos.productos', array('identificador' => $id ));
});
*/

// Opción 2 : Empleando la funcion with de Laravel
Route::get('inventario/{id}', function ($id) {
    return view('productos.productos')
    ->with('identificador', $id )
    ->with('nombre', 'Leche Deslactosada');
});


// Parametros opcionales

Route::get('clientes/{nombre}/{apellido?}', function ($nombre, $apellido = null) {
    return view('clientes.datos')
    ->with('nombre', $nombre)
    ->with('apellido',$apellido);
});

