<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('uso')
</head>
<body>

{{-- Header --}}
    <div class="ps-4 mt-3 mt-md-0 shadow-lg">
        <h2 class="fw-bold mb-2">Nuestras membresias</h2>
    </div>

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards">
  <div class="row row-cols-2 row-cols-md-4 g-4">

    @foreach ($membresia as $item)
<div class="col">
  <div class="card h-100 shadow border-0 p-3">

    <div class="card-body text-center">
      <h4 class="fw-bold">{{ $item->nom_membresia }}</h4>
      
      <p class="text-muted">
        {{ $item->descripcion }}
      </p>

      <h5 class="fw-bold text-success">
        ${{ $item->costo }} MXM
      </h5>

      <p class="mb-2">
        Duración: {{ $item->duracion_meses }} meses
      </p>

      <form action="{{ route('membresia.pagar', $item->id) }}" method="POST">
        @csrf
        <button class="btn btn-dark w-100">
             Adquirir
        </button>
</form>
    </div>
  </div>
</div>
    @endforeach

  </div>
</div>
{{-- FIN DE CARTAS --}}

{{-- INICIO DE BARRA DE NAVEGACIÓN --}}
<nav class="fixed-bottom d-flex justify-content-center">
    <div class="nav-container d-flex justify-content-around align-items-center px-4 py-3">

        <a href="{{ route('inicio') }}"
           class="nav-item text-center {{ request()->routeIs('inicio') ? 'active' : '' }}">
            <i class="bi bi-house-door-fill"></i>
            <span>Inicio</span>
        </a>

        <a href="{{ route('perfil') }}"
           class="nav-item text-center {{ request()->routeIs('perfil') ? 'active' : '' }}">
            <i class="bi bi-person"></i>
            <span>Mi Perfil</span>
        </a>

        <a href="{{ route('entrenador.user') }}"
           class="nav-item text-center {{ request()->routeIs('entrenador.user') ? 'active' : '' }}">
            <i class="bi bi-person-check"></i>
            <span>Entrenador</span>
        </a>

        <a href="{{ route('producto.user') }}"
           class="nav-item text-center {{ request()->routeIs('producto.user') ? 'active' : '' }}">
            <i class="bi bi-bag"></i>
            <span>Tienda</span>
        </a>

        <a href="{{ route('operaciones') }}"
           class="nav-item text-center {{ request()->routeIs('operaciones') ? 'active' : '' }}">
            <i class="bi bi-bug"></i>
            <span>Operaciones</span>
        </a>

    </div>
</nav>
{{-- FIN DE BARRA DE NAVEGACIÓN --}}

{{-- INICIO DE APARTADO EN BLANCO --}}
<div class="bg-white" style="height: 150px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
</body>
</html>