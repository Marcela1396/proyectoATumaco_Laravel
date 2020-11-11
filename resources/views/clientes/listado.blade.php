@extends('main')
@section('contenido')
	
<h1> Listado de Clientes </h1>
    <ul>
        @foreach($clientes as $c)
        <li>
           <h2> {{ $c['nombre'] }} 
            <a href='{{ url("clientes/visualizar/$c[id]/$c[nombre]/$c[edad]") }}'> Ver detalles </a>
           </h2>
        </li>
        @endforeach

    </ul>

@stop