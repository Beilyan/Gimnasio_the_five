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
                <h2 class="fw-bold mb-2">Curl predicador con mancuernas (agarre supino)</h2>
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
                    <h3>Ajusta el banco predicador de manera que el ángulo sea de aproximadamente 45 grados. Toma una mancuerna en cada mano y siéntate en el banco, colocando tus brazos en la almohadilla vertical.
Mantén tus pies firmes en el suelo y los brazos extendidos. Exhala y, lentamente, flexiona los codos, levantando las mancuernas hacia los hombros mientras mantienes los antebrazos en contacto con la almohadilla.
En la posición contraída, contrae los bíceps y mantén la tensión durante un segundo. Mantén una postura estable y evita mover los hombros o balancear el cuerpo.
De manera controlada, baja las mancuernas hasta la posición inicial mientras inhalas. Repite el movimiento durante el número deseado de repeticiones, manteniendo la técnica adecuada y enfocándote en la contracción de los bíceps.</h3>
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