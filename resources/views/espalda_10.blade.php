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
                <h2 class="fw-bold mb-2">Remo con barra Z (agarre supino)</h2>
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
                    <h3>1.- Coloca la barra Z en el suelo y agáchate para agarrarla con un agarre supino, las palmas de las manos hacia ti y los brazos completamente extendidos.<br><br>
2.- Mantén la espalda recta y las rodillas ligeramente flexionadas. Levanta la barra hasta la altura del pecho manteniendo los codos cerca del cuerpo.<br><br>
3.- Haz una pausa en la posición más alta del ejercicio, manteniendo la contracción en los músculos de la espalda.<br><br>
4.- Baja la barra de manera controlada hasta la posición inicial.</h3>
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