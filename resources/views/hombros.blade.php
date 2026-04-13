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
      <a href="{{ route('hombros_1') }}">
      <img src="{{ asset('img/hombros_1.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rotación interna de hombro en polea</h3><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('hombros_2') }}">
      <img src="{{ asset('img/hombros_2.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rotación externa de hombro en polea</h3><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_3') }}">
      <img src="{{ asset('img/hombros_3.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Rotación externa de hombro con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_4') }}">
      <img src="{{ asset('img/hombros_4.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo de deltoides posterior con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_5') }}">
      <img src="{{ asset('img/hombros_5.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press militar de pie en máquina Smith</h3><br><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_6') }}">
      <img src="{{ asset('img/hombros_6.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de hombros sentado con mancuernas (agarre neutro)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_7') }}">
      <img src="{{ asset('img/hombros_7.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de hombros alternado con mancuernas sentado (agarre neutro)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_8') }}">
      <img src="{{ asset('img/hombros_8.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de hombros tras nuca en máquina Smith</h3><br>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_9') }}">
      <img src="{{ asset('img/hombros_9.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press Arnold con mancuernas</h3><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('hombros_10') }}">
      <img src="{{ asset('img/hombros_10.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Pike Push-Up</h3><br><br><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_11') }}">
      <img src="{{ asset('img/hombros_11.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Aperturas posteriores en polea</h3><br>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_12') }}">
      <img src="{{ asset('img/hombros_12.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Vuelos posteriores en banco inclinado con mancuernas</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_13') }}">
      <img src="{{ asset('img/hombros_13.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo a la cara con cuerda en polea alta</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('hombros_14') }}">
      <img src="{{ asset('img/hombros_14.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevaciones laterales en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_15') }}">
      <img src="{{ asset('img/hombros_15.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de hombros en máquina Smith</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_16') }}">
      <img src="{{ asset('img/hombros_16.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Aperturas invertidas en máquina</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_17') }}">
      <img src="{{ asset('img/hombros_17.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de hombros sentado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('hombros_18') }}">
      <img src="{{ asset('img/hombros_18.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevaciones frontales con barra</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_19') }}">
      <img src="{{ asset('img/hombros_19.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevaciones laterales en polea baja</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('hombros_20') }}">
      <img src="{{ asset('img/hombros_20.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevación frontal con mancuernas</h3>
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