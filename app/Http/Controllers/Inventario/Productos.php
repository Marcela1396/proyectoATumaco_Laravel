<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Productos extends Controller
{
    public function index(){
        return view('productos.listado');
    }

    public function ofertas(){
        return view('productos.ofertas');
    }

    public function hogar(){
        return view('productos.hogar');
    }

}
