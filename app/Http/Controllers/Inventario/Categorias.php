<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categorias extends Controller
{
    public function index(){
        // Visualizar categorias
        $categorias = DB::table('categorias')
                    ->get();
        return view('categorias.listado',['categorias' => $categorias] );
    }

    public function registrar()
    {
        return view('categorias.form_registro');
    }

    public function actualizar()
    {
        return view('categorias.form_actualiza');
    }

    public function eliminar()
    {
        return view('categorias.eliminar');
    }
}
