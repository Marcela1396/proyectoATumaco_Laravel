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

Route::get('productos', function () {
    return view('productos');
});

Route::get('clientes', function () {
    return view('clientes.clientela');
});

Route::get('clientes/visualizar', function () {
    return view('clientes.listado');
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

// Parametros opcionales

Route::get('clientes/{nombre}/{apellido?}', function ($nombre, $apellido = null) {

    if($apellido){
        return "Cliente cuyo nombre es: {$nombre} y cuyo apellido es {$apellido}";
    }
    else{
        return "Cliente cuyo nombre es: {$nombre} sin apellido";
    }
});

