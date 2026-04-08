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

 @auth 
{{-- INICIO DE BARRA DE BUSQUEDA --}}
<div class="container mt-4 ">
    <div class="mx-auto" style="max-width: 800px">
        <x-buscador /> 
    </div>
    <div class="mt-2">
        <a href="{{ route('inicio') }}#cartas">
            <i class="bi bi-box-arrow-in-left fs-1"></i>
        </a>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-4 contenedor-cards">
  <div class="row row-cols-1 row-cols-md-4 g-4">

  
  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_1') }}">
      <img src="{{ asset('img/tricep_1.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press francés con polea baja</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('triceps_2') }}">
      <img src="{{ asset('img/tricep_2.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de copa con mancuerna de pie</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_3') }}">
      <img src="{{ asset('img/tricep_3.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Patada de tríceps con banda elástica</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_4') }}">
      <img src="{{ asset('img/tricep_4.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Patada de tríceps en polea a una mano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_5') }}">
      <img src="{{ asset('img/tricep_5.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Patada de tríceps con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_6') }}">
      <img src="{{ asset('img/tricep_6.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones sobre los antebrazos</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_7') }}">
      <img src="{{ asset('img/tricep_7.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones Diamante</h3><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_8') }}">
      <img src="{{ asset('img/tricep_8.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones diamante de rodillas</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_9') }}">
      <img src="{{ asset('img/tricep_9.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps sobre la cabeza con polea (versión 2)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('triceps_10') }}">
      <img src="{{ asset('img/tricep_10.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps sobre la cabeza en polea (de rodillas)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_11') }}">
      <img src="{{ asset('img/tricep_11.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps en polea (agarre supino)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_12') }}">
      <img src="{{ asset('img/tricep_12.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps sobre la cabeza con banda elástica</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_13') }}">
      <img src="{{ asset('img/tricep_13.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rompecráneos con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('triceps_14') }}">
      <img src="{{ asset('img/tricep_14.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensiones de tríceps con agarre en V en polea</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_15') }}">
      <img src="{{ asset('img/tricep_15.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps acostado con polea baja</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_16') }}">
      <img src="{{ asset('img/tricep_16.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps acostado con mancuerna</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_17') }}">
      <img src="{{ asset('img/tricep_17.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps a una mano en polea (agarre cuerda)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('triceps_18') }}">
      <img src="{{ asset('img/tricep_18.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de tríceps a una mano con polea (agarre supino)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_19') }}">
      <img src="{{ asset('img/tricep_19.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión de triceps con mancuernas acostado (agarre prono)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('triceps_20') }}">
      <img src="{{ asset('img/tricep_20.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Fondos en banco plano</h3>
      </div>
    </div>
  </div>

</div>
</div>
{{-- FIN DE CARTAS --}}

{{-- INICIO DE APARTADO EN BLANCO --}}
<div class="bg-white" style="height: 100px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
@endguest

@guest
<div class="container mt-4 ">
    <div class="mt-2">
        <a href="{{ route('inicio') }}#cartas">
            <i class="bi bi-box-arrow-in-left fs-1"></i>
        </a>
    </div>
</div>

@include('inicio_sesion')

@endguest

</body>
</html>