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
    return view('clientes');
});

Route::get('ofertas', function () {
    return view('ofertas');
});

Route::get('administracion', function () {
    return view('administracion.users.usuarios');
});


