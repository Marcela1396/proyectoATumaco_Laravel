<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Productos extends Controller
{
    public function index(){
        // Consultar de productos
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */
        
        /*Metodo First
        $producto = DB::table('productos')->first();
        return view('productos.listado',['p' => $producto] );
        */

        //Clausula where : orwhere
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->where('categoria', '=', 1)
                    ->where('precioProducto', '>=', 4000)
                    ->orwhere('cantidadProducto', '>', 10)
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */

        // Clausula Value
        /*
        $producto = DB::table('productos')
                    ->where('categoria', '=', 1)
                    ->value('id');
        return view('productos.listado',['p' => $producto] );
        */

        //Orderby
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->orderBy('nombreProducto', 'asc')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */

        //Clausula Skip/Take y Offset/Limit
        /*
        $productos = DB::table('productos')
                    ->select('nombreProducto', 'cantidadProducto', 'precioProducto','fotoProducto', 'categoria')
                    ->orderBy('nombreProducto', 'asc')
                    ->skip('2')
                    ->take('4')
                    ->get();
        return view('productos.listado',['productos' => $productos] );
        */
        // Uso de Join
        $productos = DB::table('productos')
                    ->join('categorias', 'categoria', '=', 'categorias.id')
                    ->get();
        return view('productos.listado',['productos' => $productos] );


    }

    public function ofertas(){
        return view('productos.ofertas');
    }

    public function categorias(){
        return view('productos.categorias');
    }

}
