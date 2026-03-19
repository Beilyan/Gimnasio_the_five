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
                <h2 class="fw-bold mb-2">Curl invertido con barra</h2>
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
                    <h3>Para efectuar de una excelente manera el curl de bíceps invertido con barra, deberás pararte con el tronco erguido, a la vez que sostiene la barra a la altura de tus hombros. Recuerda que el agarre en el curl de bíceps invertido es prono (seguramente, si ya has realizado el curl de bíceps, esta variante se te facilitará). Comienza levantando la barra hasta que tus bíceps se tensen y se encuentren totalmente contraídos. Así, ésta llegará a la altura de tus hombros.
Lo recomendado es sostener la posición por lo menos un segundo y luego, con lentitud y en un movimiento controlado, desciende la barra.
Lo ideal es realizar repeticiones hasta llegar al fallo muscular; sin embargo, debes practicar la técnica de ejecución, de preferencia, unas cuantas veces sin carga, para poder habituarte al movimiento.
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