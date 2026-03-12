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
  
    {{-- INICIO DEL CARRUSEL --}}
    <div id="carouselExampleCaptions" class="carousel slide container-fluid p-0">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/foto1.jpeg') }}"  class="d-block w-100" alt="Foto" height="400">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/foto2.jpeg') }}" class="d-block w-100" alt="Foto" height="400">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/foto3.jpeg') }}" class="d-block w-100" alt="Foto" height="400">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>
{{-- FIN DEL CARRUSEL --}}

<div class="text-center font-family mt-5">
  <h1><strong>¿QUÉ QUIERES ENTRENAR HOY?</strong></h1>
  <h3 class="text-secondary">Selecciona tu grupo muscular favorito y descubre ejercicios</h3>
</div>

{{-- INICIO DE BARRA DE BUSQUEDA --}}
<div class="container mt-4">
    <div class="input-group mx-auto" style="max-width: 500px">
        <input type="text" class="form-control border-dark" placeholder="Buscar...">
        <button class="btn btn-outline-secondary border-dark" type="button">
            Buscar
        </button>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards" id="cartas">
  <div class="row row-cols-1 row-cols-md-4 g-4">

  
  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Pecho</h6>
      </div>
      <a href="{{ asset('pecho') }}">
      <img src="{{ asset('img/pectorales.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <div class="card-body text-center">
        <h6>Espalda</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/espalda.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Bíceps</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/biceps.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Tríceps</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/triceps.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Abdomen</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/abdomen.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Hombros</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/hombros.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Pantorrillas</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/pantorrillas.jpeg') }}" class="card-img-top" alt="...">
      </a>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body text-center">
        <h6>Piernas</h6>
      </div>
      <a href="">
      <img src="{{ asset('img/piernas.jpeg') }}" class="card-img-top" alt="...">
      </a>
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