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
        <a href="{{ route('espalda') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/.webp') }}" class="cover-img" alt="Portada">
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Remo con mancuerna (unilateral)</h2>
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
                    <h3>Comienza colocando una mancuerna en el suelo y ponte de pie con los pies separados al ancho de los hombros. Inclínate hacia adelante desde las caderas, manteniendo la espalda recta y los abdominales apretados. Puedes apoyar una rodilla sobre un banco plano para otorgarte estabilidad durante el movimiento.
Con una mano, toma la mancuerna y lleva el brazo hacia arriba hasta que el codo quede justo por encima del torso, manteniendo la mancuerna cerca de tu cuerpo. Exhala mientras levantas la mancuerna y contraes los músculos de la espalda.
Lentamente baja la mancuerna hacia el suelo mientras inhalas, asegurándote de mantener la espalda recta y los abdominales apretados. Repite el ejercicio con la otra mano.
Realiza las repeticiones que indique tu plan de entrenamiento, aumentando el peso de las mancuernas según sea necesario para un desafío adicional.</h3>
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