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
      <a href="{{ route('piernas_1') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla sobre Bosu</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('piernas_2') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla sumo (sin equipo)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_3') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla sumo en máquina Smith</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_4') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla sumo con pesa rusa</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_5') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla sumo con barra landmine</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_6') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla split en máquina Smith</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_7') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla split con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_8') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla split con barra</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_9') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla silla en máquina Smith</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('piernas_10') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla lateral con mancuerna</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_11') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla en máquina péndulo</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_12') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadillas con salto</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_13') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Farmer Carry con barra trampa</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('piernas_14') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Extensión a una pierna en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_15') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Estocada con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_16') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Curl de pierna de pie en máquina</h3>
      </div>
    </div>
  </div>

    <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_17') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Curl a una pierna tumbado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('piernas_18') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de pierna posición abierta</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_19') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Sentadilla Hack Squat</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('piernas_20') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Peso muerto con barra: Uno de los mejores ejercicios</h3>
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