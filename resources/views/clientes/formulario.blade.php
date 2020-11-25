@extends('main')
@section('contenido')
    <h1> Registro de Clientes </h1>

    @php 
        $apellido = 'Suarez';
        $cedula = '123';
    @endphp

    <form action="{{url('clientes/registrar')}}" method="POST">
        @csrf

        <label for="nombre">Nombre </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <label for="apellido">Apellido </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" id='apellido' name='apellido' value={{$apellido}} placeholder="Apellido"  aria-describedby="basic-addon1">
        </div>

        <label for="contraseña">Contraseña </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="password" class="form-control" id='contraseña' name='contraseña'  placeholder="Contraseña"  aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="hidden" class="form-control" id='cedula' name='cedula' value='{{$cedula}}'   aria-describedby="basic-addon1">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="number" class="form-control" id='edad' name='edad' min='18' max='100'  placeholder="Edad"  aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="email" class="form-control" id='correo' name='correo'  placeholder="Correo"  aria-describedby="basic-addon1">
        </div>


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="date" class="form-control" id='fecha_Nac' name='fecha_Nac'  placeholder="fecha_Nac"  aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <textarea name="texto" id="texto" rows="5" cols="200">  </textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="gustos" name="musica">
            <label class="form-check-label" for="defaultCheck1">
                Musica
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="2" id="gustos2" name="baile">
            <label class="form-check-label" for="defaultCheck2">
                Baile
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="3" id="gustos3" name="deporte">
            <label class="form-check-label" for="defaultCheck2">
                Deporte
            </label>
        </div>

        <label class="form-check-label">
                Genero
        </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="fem" value="f" checked>
            <label class="form-check-label" for="fem">
               Femenino
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="mas" value="m">
            <label class="form-check-label" for="mas">
                Masculino
            </label>
        </div>

        <div class="form-group">
            <label for="foto">Suba su foto </label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>

        <select class="form-control form-control-lg">
             <option>Deporte</option>
             <option>Musica</option>
             <option>Baile</option>
             <option>Lectura</option>
        </select>

        <br>
        <button type="submit" class="btn btn-primary" > Registrar </button> 

        <button type="reset" class="btn btn-danger">Borrar</button>
        
        <button type="button" class="btn btn-dark">Volver</button>
           
    </form>

@stop