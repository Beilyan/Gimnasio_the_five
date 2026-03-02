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
    <div class="input-group mx-auto" style="max-width: 1400px">
        <input type="text" class="form-control border-dark" placeholder="Buscar...">
        <button class="btn btn-outline-secondary border-dark" type="button">
            Buscar
        </button>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards">
  <div class="row row-cols-1 row-cols-md-4 g-4">

  
  <div class="col-6">
    <div class="card">
      <a href="{{ route('entrenador') }}">
      <img src="{{ asset('img/ent1.avif') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Eduardo</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="">
      <img src="{{ asset('img/ent2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Leonel</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent3.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Beilyan</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent4.avif') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Juan</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent5.avif') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Frida</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent6.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Cristian</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent1.avif') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Emilio</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/ent2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Raul</h3>
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

    </div>
</nav>
{{-- FIN DE BARRA DE NAVEGACIÓN --}}

{{-- INICIO DE APARTADO EN BLANCO --}}
<div class="bg-white" style="height: 150px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
</body>
</html>