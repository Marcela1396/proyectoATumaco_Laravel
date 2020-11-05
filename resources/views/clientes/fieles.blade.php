<h1> {{ $titulo }} </h1>

<h2> Nombres Clientes </h2>
<ul>
    @foreach ($clientes as $c)
        <li> {{ $c }} </li>
    @endforeach
</ul>

<h2> Puntos Clientes </h2>
<ul>
    @foreach ($puntuacion as $p)
        <li> {{ $p }} </li>
    @endforeach
</ul>