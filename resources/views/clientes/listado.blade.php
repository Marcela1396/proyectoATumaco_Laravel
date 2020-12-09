@extends('main')
@section('contenido')
	
<h1> Listado de Clientes </h1>
    <ul>
        @foreach($clientes as $c)
        <li>
           <h2> {{ $c['nombre'] }}   </h2>
        </li>
        @endforeach

    </ul>

@stop