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
        <a href="{{ route('biceps') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/d0KljV_-ew8"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Curl predicador con mancuernas (agarre supino)</h2>
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
                    <h3>1.- Ajusta el banco predicador de manera que el ángulo sea de aproximadamente 45 grados. Toma una mancuerna en cada mano y siéntate en el banco, colocando tus brazos en la almohadilla vertical.<br><br>
2.- Mantén tus pies firmes en el suelo y los brazos extendidos. Exhala y, lentamente, flexiona los codos, levantando las mancuernas hacia los hombros mientras mantienes los antebrazos en contacto con la almohadilla.<br><br>
3.- En la posición contraída, contrae los bíceps y mantén la tensión durante un segundo. Mantén una postura estable y evita mover los hombros o balancear el cuerpo.<br><br>
4.- De manera controlada, baja las mancuernas hasta la posición inicial mientras inhalas. Repite el movimiento durante el número deseado de repeticiones, manteniendo la técnica adecuada y enfocándote en la contracción de los bíceps.</h3>
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