@extends('main')
@section('contenido')
    <h1> Información detallada de un Cliente </h1>
    <h3> Identificación : {{ $id }} </h3>
    <h3> Nombre : {{ $nombre }} </h3>
    <h3> Edad : {{ $edad }} </h3>

    <a href="{{ url('clientes/visualizar')}}"> Regresar </a> <br>
    <a href="{{ url()->previous()}}"> Regresar2 </a> <br>
    <a href="{{ route('listadoCli') }}"> Regresar3 </a>

@stop