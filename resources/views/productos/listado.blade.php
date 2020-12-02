@extends('main')
@section('contenido')
<h1> Listado de productos </h1>
<div class="container">
    <div class ="row">
    @foreach($productos as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/imagenes/productos/$p->fotoProducto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $p->nombreProducto }} </h5>
                    <p class="card-text"> Cantidad :  {{ $p->cantidadProducto }} </p>
                    <p class="card-text"> Precio :  {{ $p->precioProducto }} </p>
                    <p class="card-text"> Categoria :  {{ $p->nombreCategoria }} </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@stop



        