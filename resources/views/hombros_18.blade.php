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
        <a href="{{ route('hombros') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/.webp') }}" class="cover-img" alt="Portada">
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Elevaciones frontales con barra</h2>
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
                    <h3>Para realizar este ejercicio, adopta un agarre pronunciado, ancho de hombros en la barra desde una posición de pie. Permita que sus brazos cuelguen directamente hasta la mitad del muslo con los codos extendidos. Tu cabeza debe mirar hacia adelante, con tus hombros hacia atrás y tu pecho hacia arriba. Mantenga una columna neutral y contraiga sus abdominales para proporcionar soporte central. Desde la posición inicial, comience el movimiento flexionando el hombro, levantando el peso directamente frente a usted. Mantenga los codos extendidos y la muñeca neutral durante todo el movimiento.
Continúe el movimiento hacia arriba de los brazos hasta que la barra esté justo por encima de la altura del hombro.
En la parte superior del movimiento, haga una pausa breve y luego regrese lentamente a la posición inicial.
Repita el movimiento de acuerdo a las repeticiones que indique su plan de entrenamiento.</h3>
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