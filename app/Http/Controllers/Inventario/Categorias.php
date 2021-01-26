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

    public function form_registro(){
        return view('categorias.form_registro') ;
    }

    public function registrar(Request $request)
    {
        //Registro de una categoria
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion  = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listado_categorias');   
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $categoria = Categoria::findOrFail($id);
        return view ('categorias.form_actualiza', compact('categoria'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = Categoria::findOrFail($id);
        $c->nombreCategoria = $request->input('nombreCat');
        $c->descripcion = $request->input('descripcionCat');
        $c->save();
        return redirect()->route('listado_categorias');  
    }

    public function eliminar($id)
    {
        $c = Categoria::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_categorias');
    }
}
