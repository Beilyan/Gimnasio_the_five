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
        <a href="{{ route('pantorrillas') }}" class="position-absolute top-0 start-0 m-3 text-dark fs-3">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>

        <div style="max-width: 530px; margin: auto;" class="mb-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/A3W9klDRKdQ"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Elevación de talones de pie en máquina</h2>
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
                    <h3>1.- Lo primero que harás será colocar el peso con el que deseas trabajar en la máquina. Hecho esto, te sentarás y pondrás ambos pies en las almohadillas; mientras que con las dos manos sujetarás la parte superior de la máquina, esto te dará mayor soporte.<br><br>
2.- El peso que has colocado debe de encontrarse sobre tus hombros al momento en que eleves los talones; hecho esto, jala los talones hacia tus glúteos.<br><br>
3.- Tu espalda debe mantenerse durante todo el ejercicio lo más recta posible. Una vez que completes el ejercicio, jalando los talones lo más que puedas hacia tus glúteos, regresa a la posición del inicio, descendiendo los talones no tan rápido.<br><br>
4.- No te olvides de llevar a cabo un buen ritmo de respiración, esto te facilitará completar el ejercicio de una mejor forma.</h3>
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