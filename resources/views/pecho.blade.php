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
      <a href="{{ route('pecho_1') }}">
      <img src="{{ asset('img/pecho1.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de pecho declinado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card ">
      <a href="">
      <img src="{{ asset('img/pecho2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo con mancuernas en banco plano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho3.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo en banco inclinado con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho4.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de banca inclinado con barra</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho1.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de pecho declinado en máquina</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho2.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo con mancuernas en banco plano</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho3.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press martillo en banco inclinado con mancuernas</h3>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <a href="">
      <img src="{{ asset('img/pecho4.webp') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body text-center">
        <h3>Press de banca inclinado con barra</h3>
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