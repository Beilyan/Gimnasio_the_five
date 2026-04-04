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

{{-- INICIO DE BARRA DE BUSQUEDA --}}
<div class="container mt-4">
    <div class="d-flex align-items-center gap-2 mx-auto" style="max-width: 1300px">
        <div class="input-group">
            <input type="text" class="form-control border-dark" placeholder="Buscar...">
            <button class="btn btn-outline-secondary border-dark" type="button">
              Buscar
            </button>
        </div>
        <a href="{{ asset('carrito') }}">
        <button class="btn btn-warning">
            <i class="bi bi-cart-fill"></i>
        </button>
        </a>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards">
  <div class="row row-cols-2 row-cols-md-4 g-4">

    @foreach ($producto as $item)
    <div class="col">
      <div class="card h-100 shadow-10 border-0">
        <a href="{{ route('producto.producto', $item->producto_id) }}">
          <img src="{{ asset('storage/' . $item->img_perfil) }}" 
               class="card-img-top" 
               alt="Producto {{ $item->nom }}"
               style="height: 250px; object-fit: cover; border-radius: 10px 10px 0 0;">
        </a>
        <div class="card-body text-center">
          <h3 class="h5 fw-bold"> {{ $item->nom_producto }} </h3>
          <h3 class="h5 fw-bold">${{ $item->precio_venta }} </h3>
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