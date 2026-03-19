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
      <a href="{{ route('pantorrillas_1') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Levantamiento de pantorrillas en máquina Smith</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="{{ route('pantorrillas_2') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevación de pantorrillas con barra</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_3') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Levantamiento de pantorrilla a una pierna (sin equipo)</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_4') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevación de pantorrilla a una pierna con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_5') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de pantorrillas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_6') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevación de talones de pie en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_7') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Elevación de talones sentado</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="{{ route('pantorrillas_8') }}">
      <img src="{{ asset('img/.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Donkey Calf Raises</h3>
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