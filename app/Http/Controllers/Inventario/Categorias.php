<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria; 

class Categorias extends Controller
{
    public function index(){
        // Visualizar categorias
        $categorias = Categoria::all();

        // Visualizar categorias cuya descripcion empiece por L
        //$categorias = Categoria::where('descripcion', 'like', 'L%')->get();
        return view('categorias.listado',['categorias' => $categorias] );
    }

    public function formularioReg(){
        return view('categorias.form_registro') ;
    }

    public function registrar(Request $request)
    {
        //Registro de una categoria
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion  = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listadoCategorias');   
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
