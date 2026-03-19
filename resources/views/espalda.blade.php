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
    <div class="d-flex align-items-center gap-2 mx-auto" style="max-width: 1400px">
        <div class="input-group">
            <input type="text" class="form-control border-dark" placeholder="Buscar...">
            <button class="btn btn-outline-secondary border-dark" type="button">
              Buscar
            </button>
        </div>
    </div>
    <div class="mt-4">
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
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo supino con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_2') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo supino en polea baja (de pie)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_3') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo sentado en polea con agarre de cuerda</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_4') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo invertido agarre supino</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_5') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo inclinado en banco con mancuernas (agarre prono)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_6') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo en polea agarre supino</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_7') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo sentado en polea con agarre abierto</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_8') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo en banco inclinado con mancuernas (agarre neutro)</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_9') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con mancuernas (ambas manos)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_10') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con barra Z (agarre supino)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_11') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo a una mano en polea baja</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_12') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con barra landmine (agarre V)</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_13') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Jalón al pecho tras nuca</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_14') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo sentado en polea baja (agarre V)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_15') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con mancuerna (unilateral)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_16') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Jalón al pecho agarre abierto</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_17') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Dominadas agarre neutro</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('espalda_18') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Pull-ups o dominadas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_19') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con barra en banco inclinado</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('espalda_20') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Remo con barra recta</h3>
      </div>
    </div>
  </div>

</div>
</div>
{{-- FIN DE CARTAS --}}

{{-- INICIO DE APARTADO EN BLANCO --}}
<div class="bg-white" style="height: 100px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
</body>
</html>