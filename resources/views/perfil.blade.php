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

{{-- INICIO DE FOTOS --}}
    <!-- PORTADA -->
    <div class="profile-cover shadow">
        <img src="{{ asset('img/foto1.jpeg') }}" class="cover-img" alt="Portada">

        <button class="btn btn-light btn-sm edit-cover shadow">
            <i class="bi bi-camera"></i> Editar portada
        </button>
    </div>

    <!-- INFORMACIÓN PERFIL -->
    <div class="profile-info bg-white p-4 shadow">

        <div class="d-flex align-items-center flex-wrap">

            <!-- FOTO PERFIL -->
            <div class="profile-photo">
                <img src="{{ asset('img/foto1.jpeg') }}" 
                     class="rounded-circle profile-img shadow" 
                     alt="Perfil">

                <button class="btn btn-light btn-sm change-photo shadow">
                    <i class="bi bi-camera"></i>
                </button>
            </div>

            <!-- NOMBRE Y BADGE -->
            <div class="ms-4 mt-3 mt-md-0">
                <h2 class="fw-bold mb-2">Carlos Méndez</h2>
            </div>

        </div>

    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-white mt-5 col-8">
    <h1 class="fw-bold mb-2">Información de membresía</h1>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="bg-success text-black p-4 rounded-4 d-flex aling-items-center">
                <i class="bi bi-calendar4 icono-grande me-5"></i>
                <div>
                    <h2 class="mb-1">Fecha inicio</h2><br>
                    <h2 class="mb-0">01/01/26</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-danger text-black p-4 rounded-4 d-flex aling-items-center">
                <i class="bi bi-calendar-check-fill icono-grande me-5"></i>
                <div>
                    <h2 class="mb-1">Fecha final</h2><br>
                    <h2 class="mb-0">01/01/31</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="progress mt-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 25%">25%</div>
</div>
    <div class=" container mt-4  p-4 rounded-3 bg-dark">
        <h6 class="text-center text-white">Duración total</h6>
        <h1 class="text-center text-white">1 Meses</h1>
    </div>
</div>
{{-- FIN DE CONTENEDOR DE INFORMACION --}}

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
<div class="bg-white mt-5" style="height: 100px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
</body>
</html>