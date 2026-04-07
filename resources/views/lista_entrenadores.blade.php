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
    <div class="d-flex align-items-center justify-content-center">
        <div class="position-relative d-inline-block" style="width: 800px;">
          <input type="text" id="buscador" class="form-control" placeholder="Buscar...">
          <ul id="resultados" class="list-group position-absolute w-100 shadow" style="z-index: 1000;"></ul>
        </div>
    </div>
</div>
{{-- FIN DE BARRA DE BUSQUEDA --}}

{{-- INICIO DE CARTAS --}}
<div class="container mt-5 contenedor-cards">
  <div class="row row-cols-2 row-cols-md-4 g-4">

    @foreach ($entrenador as $item)
    <div class="col">
      <div class="card h-100 shadow-10 border-0">
        <a href="{{ route('entrenador.perfil', $item->entrenador_id) }}">
          <img src="{{ asset('storage/' . $item->img_perfil) }}" 
               class="card-img-top" 
               alt="Entrenador {{ $item->nom }}"
               style="height: 250px; object-fit: cover; border-radius: 10px 10px 0 0;">
        </a>
        <div class="card-body text-center">
          <h3 class="h5 fw-bold">{{ $item->nom }} {{ $item->paterno }}</h3>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
{{-- FIN DE CARTAS --}}

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

        <a href="{{ route('entrenador.user') }}"
           class="nav-item text-center {{ request()->routeIs('entrenador.user') ? 'active' : '' }}">
            <i class="bi bi-person-check"></i>
            <span>Entrenador</span>
        </a>

        <a href="{{ route('producto.user') }}"
           class="nav-item text-center {{ request()->routeIs('producto.user') ? 'active' : '' }}">
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
<div class="bg-white" style="height: 150px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}

<script>
document.addEventListener('DOMContentLoaded', function() {

    let buscador = document.getElementById('buscador');
    let resultados = document.getElementById('resultados');

    let url = "{{ route('entrenador.buscar') }}";

    buscador.addEventListener('keyup', function() {
        let query = this.value.trim();

        if(query.length > 0){

            fetch(`${url}?query=${query}`)
                .then(res => res.json())
                .then(data => {

                    resultados.innerHTML = '';

                    data.forEach(pro => {

                        // Evitar errores si algo viene null
                        let nombre = pro.empleado?.persona?.nom_persona ?? '';
                        let apaterno = pro.empleado?.persona?.apaterno ?? '';

                        resultados.innerHTML += `
                            <li class="list-group-item item"
                                style="cursor:pointer;"
                                data-id="${pro.id}">
                                ${nombre} ${apaterno}
                            </li>
                        `;
                    });

                    // Evento click
                    document.querySelectorAll('.item').forEach(item => {
                        item.addEventListener('click', function() {
                            let id = this.getAttribute('data-id');

                            // Cambia la ruta si usas otra
                            window.location.href = `/entrenador/${id}`;
                        });
                    });

                })
                .catch(error => {
                    console.error('Error:', error);
                });

        } else {
            resultados.innerHTML = '';
        }
    });

});
</script>

</body>
</html>