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
        <a href="{{ route('abdomen') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/bPL3AXHo8Nc"></iframe>
            </div>
        </div>  
        
    </div>
    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Abdominales cruzados</h2>
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
                    <h3>1.- Lo primero que debes hacer es acostarte boca arriba, doblar así tus rodillas a aproximadamente 60 grados.<br><br>
2.- Luego vas a colocar los pies planos en el piso, luego coloca las manos sueltas sobre la cabeza. Procede a traer tu codo y hombro derecho, a través de tu cuerpo, al mismo tiempo comenzaras a mover la rodilla izquierda hacia el hombro izquierdo. Asegúrate de intentar tocarte la rodilla con el codo, seguidamente exhala mientras lo vas haciendo.<br><br>
3.- Luego vuelve a la posición inicial e inhalaras mientras lo vas haciendo, repetirás el movimiento, pero con el codo izquierdo y la rodilla derecha.<br><br>
4.- Sigue alternando esos movimientos, hasta que completes el número de repeticiones.</h3>
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