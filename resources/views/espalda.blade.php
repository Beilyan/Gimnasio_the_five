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
      <a href="{{ route('espalda_1') }}">
      <img src="{{ asset('img/espalda1.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br><br><br><br><br><br><br><br>Remo supino con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_2') }}">
      <img src="{{ asset('img/espalda2.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo supino en polea baja (de pie)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_3') }}">
      <img src="{{ asset('img/espalda3.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo sentado en polea con agarre de cuerda</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_4') }}">
      <img src="{{ asset('img/espalda4.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br><br><br><br><br><br><br><br>Remo invertido agarre supino</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_5') }}">
      <img src="{{ asset('img/espalda5.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo inclinado en banco con mancuernas (agarre prono)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_6') }}">
      <img src="{{ asset('img/espalda6.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br><br>Remo en polea agarre supino</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_7') }}">
      <img src="{{ asset('img/espalda7.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo sentado en polea con agarre abierto</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_8') }}">
      <img src="{{ asset('img/espalda8.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo en banco inclinado con mancuernas (agarre neutro)</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_9') }}">
      <img src="{{ asset('img/espalda9.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con mancuernas (ambas manos)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_10') }}">
      <img src="{{ asset('img/espalda10.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo con barra Z (agarre supino)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_11') }}">
      <img src="{{ asset('img/espalda11.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo a una mano en polea baja</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_12') }}">
      <img src="{{ asset('img/espalda12.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo con barra landmine (agarre V)</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_13') }}">
      <img src="{{ asset('img/espalda13.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Jalón al pecho tras nuca</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_14') }}">
      <img src="{{ asset('img/espalda14.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo sentado en polea baja (agarre V)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_15') }}">
      <img src="{{ asset('img/espalda15.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con mancuerna (unilateral)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_16') }}">
      <img src="{{ asset('img/espalda16.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Jalón al pecho agarre abierto</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_17') }}">
      <img src="{{ asset('img/espalda17.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Dominadas agarre neutro</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_18') }}">
      <img src="{{ asset('img/espalda18.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Pull-ups o dominadas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_19') }}">
      <img src="{{ asset('img/espalda19.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con barra en banco inclinado</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_20') }}">
      <img src="{{ asset('img/espalda20.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Remo con barra recta</h3>
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