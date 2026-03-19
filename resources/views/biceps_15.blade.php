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
        <a href="{{ route('biceps') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/.webp') }}" class="cover-img" alt="Portada">
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Curl de bíceps en banco Scott</h2>
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
                    <h3>La técnica de ejecución consiste en que el individuo debe estar sentado sobre la máquina, con los brazos completamente apoyados sobre el pupitre que compone el banco Scott.
Agarra la barra Z o recta o en su defecto, dos mancuernas con ambas manos o incluso a una mano.
Durante la ejecución del bíceps en banco Scott, las palmas deben mirar hacia arriba, sin movilizar los brazos y teniendo ambos estirados mientras se sostiene la carga y se inicia el movimiento.
Inspira profundamente y se comienza con la flexión de los codos para poder llevar el peso hacia el nivel del pecho con ambas manos. Mantén ahí 2 segundos
Regresa a la posición inicial de forma lenta y precisa. Lo importante es no extender completamente los brazos.</h3>
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