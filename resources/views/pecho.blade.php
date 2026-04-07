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
      <a href="{{ route('pecho_1') }}">
      <img src="{{ asset('img/pecho1.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de pecho declinado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('pecho_2') }}">
      <img src="{{ asset('img/pecho2.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo en banco inclinado con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_3') }}">
      <img src="{{ asset('img/pecho3.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo con mancuernas en banco plano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_4') }}">
      <img src="{{ asset('img/pecho4.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Press de banca inclinado con barra</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_5') }}">
      <img src="{{ asset('img/pecho5.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Press de banca con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_6') }}">
      <img src="{{ asset('img/pecho6.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press alternado con mancuernas en banco plano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_7') }}">
      <img src="{{ asset('img/pecho7.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Fondos de pecho en máquina asistida</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_8') }}">
      <img src="{{ asset('img/pecho8.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br><br><br><br><br><br><br><br><br>Flexiones con toque de pecho</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_9') }}">
      <img src="{{ asset('img/pecho9.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones con banda de resistencia</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('pecho_10') }}">
      <img src="{{ asset('img/pecho10.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones sobre balón medicinal</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_11') }}">
      <img src="{{ asset('img/pecho11.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Flexiones a una mano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_12') }}">
      <img src="{{ asset('img/pecho12.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Flexiones abiertas</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_13') }}">
      <img src="{{ asset('img/pecho13.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Aperturas en banco plano con polea</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('pecho_14') }}">
      <img src="{{ asset('img/pecho14.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Aperturas declinado en polea</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_15') }}">
      <img src="{{ asset('img/pecho15.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br><br>Squeeze Bench Press</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_20') }}">
      <img src="{{ asset('img/pecho20.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Aperturas con mancuernas en banco plano</h3>
      </div>
    </div>
  </div>


    <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_17') }}">
      <img src="{{ asset('img/pecho17.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Vuelos a una mano con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('pecho_18') }}">
      <img src="{{ asset('img/pecho18.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3><br>Fondos de pecho</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_19') }}">
      <img src="{{ asset('img/pecho19.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Aperturas pec deck de pecho</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pecho_16') }}">
      <img src="{{ asset('img/pecho16.png') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Squeeze Press inclinado con mancuernas</h3>
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