<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="{{ url('/')}}">Supermercado</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/descripcion')}}">Sobre Nosotros <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/clientes/visualizar')}}">General</a>
                <a class="dropdown-item" href="{{ url('/clientes/fieles')}}">Fieles</a>
                <a class="dropdown-item" href="{{ url('/clientes/maria/suarez')}}">Antiguos</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/productos/listado')}}">General</a>
                <a class="dropdown-item" href="{{ url('/productos/ofertas')}}">Ofertas del dia</a>
                <a class="dropdown-item" href="{{ url('/productos/hogar')}}">Hogar</a>
                </div>
            </li>
        </ul>
    </div>
</nav>