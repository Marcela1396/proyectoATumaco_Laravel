@extends('main')
@section('contenido')

<div class="container">
    <h2> Registro Categoria </h2> <br> <br>
    <form action ="{{url('categorias/registro')}}" method="POST" >
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Categoria" aria-label="Username" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" required>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>

</div>

@stop