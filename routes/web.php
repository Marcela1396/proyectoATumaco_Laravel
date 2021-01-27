<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Clientes;
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

// Clientes *********************************************************


Route::get('clientes/registrar', [Clientes::class, 'form_registro'])
	->name('form_registroCli');

Route::post('clientes/registrar', [Clientes::class, 'registrar'])
	->name('registrar_cliente');

Route::get('clientes/actualizar/{id}', [Clientes::class, 'form_actualiza'])
	->name('form_actualizaCli');

Route::post('clientes/actualizar/{id}', [Clientes::class, 'actualizar'])
	->name('actualiza_cliente');

Route::get('clientes/eliminar/{id}', [Clientes::class, 'eliminar'])
	->name('elimina_Cliente');

Route::get('clientes', [Clientes::class, 'index'])
	->name('listado_clientes');

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

Route::get('categorias', [Categorias::class, 'index'] )
->name('listado_categorias');

Route::get('categorias/registro', [Categorias::class, 'form_registro'])
->name('form_registroCategoria');

Route::post('categorias/registro', [Categorias::class, 'registrar'])
->name('registrarCategoria');

Route::get('categorias/actualizar/{id}', [Categorias::class, 'form_actualiza'])
->name('form_actualizaCategoria');

Route::post('categorias/actualizar/{id}', [Categorias::class, 'actualizar'])
->name('actualizarCategoria');

Route::get('categorias/eliminar/{id}', [Categorias::class, 'eliminar'])
->name('eliminarCategoria');

Route::get('categorias/exportarExcel', [Categorias::class, 'exportarExcel'])
->name('exportar_Excel');

Route::get('categorias/descargarPDF', [Categorias::class, 'descargarPDF'])
->name('descargar_PDF');




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

