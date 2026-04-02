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
        <a href="{{ route('espalda') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/3NJbpijIPUU"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Remo con barra en banco inclinado</h2>
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
                    <h3>1.- Antes de iniciar con el remo con barra en banco inclinado, debemos ajustar un banco y dejarlo en una inclinación óptima de 30 a 45 grados. Una vez que comencemos, colócate sobre tu espalda y coge la barra de forma firme, una vez hecho esto, llévalas sobre tus hombros con los brazos extendidos casi en su totalidad.<br><br>
2.- Una vez hecho esto, el siguiente paso consiste en juntar los omóplatos y sacar un poco el pecho. Luego, vamos a bajar la barra, flexionando los codos, a la altura de los dorsales. Haremos una pequeña pausa y, posteriormente, iniciamos a la posición inicial.<br><br>
3.- Como con todos y cada uno de los movimientos de tracción que se llevan a cabo con el fin de trabajar los grupos músculares de la espalda, siempre tenemos la opción de potenciar al máximo la tensión de los músculos.<br><br>
4.- Si nos cuesta demasiado trabajo el realizar el ejercicio; entonces podemos tirar sólo a la mitad de lo que corresponde a la extensión total del ejercicio.</h3>
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