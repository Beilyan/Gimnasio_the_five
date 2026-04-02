<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('uso')
</head>

<body class="bg-light">

{{-- INICIO DE FOTOS --}}
    {{-- PORTADA --}}
    <div class="profile-cover shadow position-relative mt-3">
        <a href="{{ route('pecho') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/3NJbpijIPUU"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow text-center">
        <h2 class="fw-bold mb-2">Press de pecho declinado en máquina</h2>
    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-warning mt-5 col-8 profile-info">
    <h1 class="fw-bold mb-4">Información del ejercicio</h1>

    <div class="row g-3">
        <div class="col-md-12">
            <div class="bg-warning text-black p-4 rounded-4 d-flex align-items-center">
                <div>
                    <h3>
                        1.- Ajusta el asiento y la almohadilla de la máquina para que se adapte a tu altura y posición de entrenamiento.<br><br>
                        2.- Siéntate en la máquina con la espalda recta y los pies firmes en el suelo.<br><br>
                        3.- Agarra las asas de la máquina y comienza a empujar hacia adelante, manteniendo los codos ligeramente flexionados.<br><br>
                        4.- Lleva las asas hacia tu pecho y luego extiende los brazos para volver a la posición inicial.
                    </h3>
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