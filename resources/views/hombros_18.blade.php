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
    <div class="profile-cover shadow position-relative mt-3">
        <a href="{{ route('hombros') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/M4ysdEptZp4"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Elevaciones frontales con barra</h2>
            </div>
    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-warning mt-5 col-8 profile-info">
    <h1 class="fw-bold mb-2">Información del ejercicio</h1>
    <div class="row g-3">
        <div class="col-md-12">
            <div class="bg-warning text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h3>1.- Para realizar este ejercicio, adopta un agarre pronunciado, ancho de hombros en la barra desde una posición de pie. <br><br>2.- Permita que sus brazos cuelguen directamente hasta la mitad del muslo con los codos extendidos. Tu cabeza debe mirar hacia adelante, con tus hombros hacia atrás y tu pecho hacia arriba.<br><br>3.- Mantenga una columna neutral y contraiga sus abdominales para proporcionar soporte central. <br><br>4.- Desde la posición inicial, comience el movimiento flexionando el hombro, levantando el peso directamente frente a usted. <br><br>5.- Mantenga los codos extendidos y la muñeca neutral durante todo el movimiento.<br><br>
6.- Continúe el movimiento hacia arriba de los brazos hasta que la barra esté justo por encima de la altura del hombro.<br><br>
7.- En la parte superior del movimiento, haga una pausa breve y luego regrese lentamente a la posición inicial.<br><br>
8.- Repita el movimiento de acuerdo a las repeticiones que indique su plan de entrenamiento.</h3>
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