<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cliente extends Controller
{
    //
    public function index(){
        $clientes =[
            array('id'=> '1', 'nombre' => 'Mariana Suarez', 'edad'=> 24),
            array('id'=> '2', 'nombre' => 'Lourdes Perez', 'edad'=> 31),
            array('id'=> '3', 'nombre' => 'Jesus Benavides', 'edad'=> 45),
            array('id'=> '4', 'nombre' => 'Nicolas Burbano', 'edad'=> 12)

        ];
        return view('clientes.listado', compact('clientes'));
    }

    public function detalle($id,$nombre,$edad){
        return view('clientes.detalle', array(
            'id' => $id,
            'nombre' => $nombre,
            'edad' => $edad
            )
        );
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
        return view('clientes.antiguos')
        ->with('nombre', $nombre)
        ->with('apellido',$apellido);
    }

    public function formularioReg(){
        return view('clientes.formulario');
    }

    public function registrar(){
        return view('clientes.mensaje');
    }



}
