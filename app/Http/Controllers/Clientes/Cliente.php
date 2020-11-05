<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    //
    public function index(){
        return view('clientes.listado', array('id'=>'1', 
                                          'nombre' => 'Jesus Garcia', 
                                          'edad' => 23));
    }

    public function fieles(){
        $fieles = [
            'Alvaro Caicedo',
            'Engler Gonzales',
            'Juan David Landazuri',
            'Valentina Padilla'
        ];
        $titulo = "Clientes Fieles";

        $puntos = [
            '200',
            '500',
            '550',
            '900'
        ];
        /* Opcion 1 de envio de datos 
        return view('clientes.fieles', 
        [
            'clientes' => $fieles,
            'titulo' => $titulo,
            'puntuacion' => $puntos
        ]);
        */

        // Opcion 2 de envio de datos:
        return view('clientes.fieles')
        ->with('clientes', $fieles)
        ->with('titulo', $titulo)
        ->with('puntuacion', $puntos);
    }

    public function antiguos($nombre, $apellido = null){
        return view('clientes.datos')
        ->with('nombre', $nombre)
        ->with('apellido',$apellido);
    }



}
