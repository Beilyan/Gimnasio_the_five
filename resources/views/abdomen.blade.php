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
      <a href="{{ route('abdomen_1') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rueda abdominal de rodillas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('abdomen_2') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rueda abdominal de pie</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_3') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rotaciones de tronco en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_4') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Plancha lateral</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_5') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Plancha de rodillas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_6') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Plancha a una pierna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_7') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Hollow Hold</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_8') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Giro Ruso con mancuerna</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_9') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Giro Ruso (sin equipo)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('abdomen_10') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Dead Bug</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_11') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Crunch sentado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_12') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Abdominales sobre pelota de yoga</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_13') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Crunch (brazos rectos por encima de la cabeza)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('abdomen_14') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Criss Cross Legs</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_15') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Cocoons</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_16') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Air Bike en el suelo</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_17') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Toque de talones</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('abdomen_18') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>V-Up con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_19') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Abdominales cruzados</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('abdomen_20') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Crunch en polea alta</h3>
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