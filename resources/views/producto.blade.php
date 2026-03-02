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
        <a href="{{ route('tienda') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('img/pro1.jpeg') }}" class="cover-img" alt="Portada">
        
        <button class="btn btn-light btn-sm edit-cover shadow">
            <i class="bi bi-camera"></i> Editar portada
        </button>
    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">

        <div class="d-flex align-items-center flex-wrap">

            {{-- FOTO PERFIL --}}
            <div class="profile-photo">
                <img src="{{ asset('img/pro1.jpeg') }}" 
                     class="rounded-circle profile-img shadow" 
                     alt="Perfil">

                <button class="btn btn-light btn-sm change-photo shadow"><i class="bi bi-camera"></i></button>
            </div>

        {{-- NOMBRE Y BADGE --}}
            <div class="ms-4 mt-3 mt-md-0">
                <h2 class="fw-bold mb-2">Proteína Whey</h2>
            </div>
        </div>

        <div class="mt-4">
            <a href=""><button class="btn btn-dark">Comprar</button></a>
            <a href=""><button class="btn btn-warning">Agregar al carrito</button></a>
        </div>

    </div>
{{-- FIN DE FOTOS --}}

{{-- INICIO DE CONTENEDOR DE INFORMACION --}}
<div class="container shadow-lg p-4 rounded bg-warning mt-5 col-10 profile-info">
    <h1 class="fw-bold mb-2">Información del suplemento</h1>
    <div class="row g-3">
        <div class="col-md-12">
            <div class="bg-warning text-black p-4 rounded-4 d-flex aling-items-center">
                <div>
                    <h1 class="mb-1">Precio:</h1>
                    <h3>$450</h3>
                    <h1 class="mb-1">Descripción:</h1>
                    <h3>La proteína de suero es la fuente definitiva de proteína. Es la proteína de más alta calidad. La proteína de suero es una rica fuente de aminoácidos de cadena ramificada (BCAAs) y, de todas las proteínas, puede ser absorbida más rápidamente por el cuerpo.
                    La proteína de suero es uno de los 2 tipos de proteínas derivadas de la leche (el otro es la proteína de caseína). Cuando se elabora queso a partir de leche, el suero se separa de la caseína y se recoge. El suero contiene solo un 3% de proteína de suero.
                    Con la ayuda de métodos de filtración elaborados, se eliminan la lactosa (azúcar de la leche) y la grasa de la leche, y se retira el agua. El resultado final es proteína de suero en diferentes calidades y con diferentes contenidos de proteína.
                    La proteína de suero es fácilmente digestible y tiene un valor biológico de 104, lo que significa que puede convertirse directamente en las propias proteínas del cuerpo humano. Los primeros aminoácidos entran en la sangre apenas 30 minutos después de la ingestión.</h3>
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