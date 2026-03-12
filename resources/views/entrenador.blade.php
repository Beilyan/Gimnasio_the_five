<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

{{-- INICIO DE FOTOS --}}
    {{-- PORTADA --}}
    <div class="profile-cover shadow">
        <a href="{{ route('lista_entrenadores') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/ent1.avif') }}" class="cover-img" alt="Portada">
        
        <button class="btn btn-light btn-sm edit-cover shadow">
            <i class="bi bi-camera"></i> Editar portada
        </button>
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">

        <div class="d-flex align-items-center flex-wrap">

            {{-- FOTO PERFIL --}}
            <div class="profile-photo">
                <img src="{{ asset('img/ent1.avif') }}" 
                     class="rounded-circle profile-img shadow" 
                     alt="Perfil">

                <button class="btn btn-light btn-sm change-photo shadow">
                    <i class="bi bi-camera"></i>
                </button>
            </div>

        {{-- NOMBRE --}}
            <div class="ms-4 mt-3 mt-md-0">
                <h2 class="fw-bold mb-2">Eduardo</h2>
            </div>

        </div>

    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-white mt-5 col-8 profile-info">
    <h1 class="fw-bold mb-2">Información del entrenador</h1>
    <div class="row g-3">
        <div class="col-md-12">
            <div class="bg-light text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h1 class="mb-1">Información personal:</h1>
                    <h3>Tel: 666 55 44433</h3>
                    <h3>Facebook: Eduardo</h3>
                    <h3>Instagram: eduardo</h3>
                    <h3>Correo: eduardo00000000000000@gmail.com</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="bg-light text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h1 class="mb-1">Horarios:</h1>
                    <h3>Lunes: 5am-12pm</h3>
                    <h3>Martes: 5am-12pm</h3>
                    <h3>Miércoles: 12pm-7pm</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="bg-light text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h1 class="mb-1">Profesional:</h1>
                    <h3>Entrenador personal</h3>
                    <h3>Entrenador de Fuerza y Acondicionamiento</h3>
                    <h3>Entrenador de Perdida de peso</h3>
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