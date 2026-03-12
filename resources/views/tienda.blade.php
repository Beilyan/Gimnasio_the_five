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
        <a href="">
        <button class="btn btn-warning">
            <i class="bi bi-cart-fill"></i>
        </button>
        </a>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards">
  <div class="row row-cols-1 row-cols-md-4 g-4">

  
  <div class="col-6">
    <div class="card">
      <a href="{{ route('producto') }}">
      <img src="{{ asset('img/pro1.jpeg') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Proteína Whey</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="">
      <img src="{{ asset('img/pro2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Creatina</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro3.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Pre-entrenamiento</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro4.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Glutamina</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro1.jpeg') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Proteína Whey</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Creatina</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro3.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Pre-entrenamiento</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pro4.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Glutamina</h3>
        <h4>$$450</h4>
      </div>
    </div>
  </div>
  
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

        <a href="{{ route('lista_entrenadores') }}"
           class="nav-item text-center {{ request()->routeIs('lista_entrenadores') ? 'active' : '' }}">
            <i class="bi bi-person-check"></i>
            <span>Entrenador</span>
        </a>

        <a href="{{ route('tienda') }}"
           class="nav-item text-center {{ request()->routeIs('tienda') ? 'active' : '' }}">
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