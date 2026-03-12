<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="{{route('welcome')}}">The Five</a>

    <ul class="navbar-nav">

      {{-- dropdown --}}

      <li class="nav-item dropdown me-5">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          Personas
        </a>
        <ul class="dropdown-menu">
            {{-- <li><a class="dropdown-item" href="/persona/nueva">Agregar Persona</a></li> --}}
            <li><a class="dropdown-item" href="{{route('persona.mostrar')}}">Ver Personas</a></li>
            <li><a class="dropdown-item" href="{{route('empleado.mostrar')}}">Ver Empleados</a></li>
            <li><a class="dropdown-item" href="{{route('cliente.mostrar')}}">Ver Clientes</a></li>
            {{-- <li><a class="dropdown-item" href="{{route('cliente.mostrar')}}">Ver Clientes</a></li> --}}
        </ul>
    </li>

      <li class="nav-item dropdown me-5">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          Productos
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('producto.mostrar')}}">Ver productos</a></li>
            <li><a class="dropdown-item" href="{{route('proveedor.mostrar')}}">Ver proveedores</a></li>
            <li><a class="dropdown-item" href="{{route('membresia.mostrar')}}">Ver membresias</a></li>
        </ul>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('')}}">Iniciar sesión</a>
      </li> --}}

    </ul>

  </div>
</nav>
</div>