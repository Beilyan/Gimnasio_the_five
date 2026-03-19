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

{{-- INICIO DE FOTOS --}}
    {{-- PORTADA --}}
    <div class="profile-cover shadow">
        <a href="{{ route('triceps') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/.webp') }}" class="cover-img" alt="Portada">
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Extensión de tríceps sobre la cabeza con banda elástica</h2>
            </div>
    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-white mt-5 col-8 profile-info">
    <h1 class="fw-bold mb-2">Información del ejercicio</h1>
    <div class="row g-3">
        <div class="col-md-12">
            <div class="bg-light text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h3>Agarra la banda elástica con ambas manos. Pisa la banda elástica y da un paso al frente para otro pie para darte estabilidad.
Sube la banda detrás de la cabeza y mantén los codos cerca de las orejas.
Extiende los brazos hacia arriba hasta que las manos queden completamente extendidas.
Regresa lentamente a la posición inicial y repite.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- FIN DE CONTENEDOR DE INFORMACION --}}

{{-- INICIO DE APARTADO EN BLANCO --}}
<div class="bg-white mt-5" style="height: 10px"></div>  
{{-- FIN DE APARTADO EN BLANCO --}}
</body>
</html>