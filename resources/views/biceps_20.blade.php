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
                <iframe src="https://www.youtube.com/embed/5Go_uOTnFl0"></iframe>
            </div>
        </div>  
        
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Curl Zottman con mancuernas</h2>
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
                    <h3>1.- Inicia colocándote de pie, con la espalda totalmente erecta, y toma una mancuerna con cada brazo.<br><br>
2.- En un inicio, los brazos deben de permanecer totalmente extendidos, pero no de forma rígida, sino relajada. Las palmas, por su parte, deben permanecer con las manos mirando hacia el frente.<br><br>
3.- Sin mover los brazos en balanceo, toma las mancuernas y suficiente aire, expirando sólo cuando sientas contraídos los bíceps; que será cuando las pesas se localicen, aproximadamente, a la altura de los hombros.<br><br>
4.- Llegado a este punto, soporta la posición por uno o dos segundos, gira las muñecas para cambiar a un agarre prono y desciende las mancuernas en un movimiento controlado.<br><br>
5.- Una vez llegues al punto inicial, coge aire de nuevo y realiza de nuevo el ejercicio.</h3>
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