<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes\Cliente;
use App\Http\Controllers\Inventario\Productos;
use App\Http\Controllers\Inventario\Categorias;

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
    
Route::get('clientes', [Cliente::class, 'index'])->name('listadoClientes');

Route::get('clientes/registrar', [Cliente::class, 'formularioReg'])->name('form_registroCliente');

Route::post('clientes/registrar', [Cliente::class, 'registrar'])->name('registrarCliente'); 

Route::get('clientes/actualizar', [Cliente::class, 'actualizar'])->name('actualizarCliente');

Route::get('clientes/eliminar', [Cliente::class, 'eliminar'])->name('eliminarCliente');


Route::get('clientes/visualizar/{id}/{nombre}/{edad}', [Cliente::class, 'detalle']);

Route::get('clientes/fieles' , [Cliente::class, 'fieles'] );

Route::get('clientes/{nombre}/{apellido?}', [Cliente::class, 'antiguos']);




//Seccion Productos

Route::get('productos', [Productos::class, 'index'])->name('listadoProductos');


Route::get('productos/detalle/{id}', [Productos::class, 'detalle'])->name('detalle_producto');


Route::get('productos/registro', [Productos::class , 'formularioReg'])->name('form_registroProducto');

Route::post('productos/registro', [Productos::class , 'registrar'])->name('registrarProducto');

Route::get('productos/actualizar/{id}', [Productos::class, 'form_actualiza'])->name('form_actualizaProducto');

Route::post('productos/actualizar/{id}', [Productos::class, 'actualizar'])->name('actualizarProducto');

Route::get('productos/eliminar/{id}', [Productos::class, 'eliminar'])->name('eliminarProducto');

Route::get('productos/consulta', [Productos::class, 'form_consulta'])->name('form_consulta');

Route::post('productos/consulta', [Productos::class, 'consultar'])->name('consulta_productos');



//Seccion Categorias

Route::get('categorias', [Categorias::class, 'index'] )->name('listadoCategorias');

Route::get('categorias/registro', [Categorias::class, 'formularioReg'])->name('form_registroCategoria');

Route::post('categorias/registro', [Categorias::class, 'registrar'])->name('registrarCategoria');

Route::get('categorias/actualizar', [Categorias::class, 'actualizar'])->name('actualizarCategoria');

Route::get('categorias/eliminar', [Categorias::class, 'eliminar'])->name('eliminarCategoria');


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

