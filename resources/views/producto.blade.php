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
        <a href="{{ route('producto.user') }}">
            <i class="bi bi-box-arrow-in-left"></i>
        </a>
        <img src="{{ asset('storage/' . $producto->img_portada) }}" class="cover-img" alt="Portada">
        
        @auth
        @if(auth()->user()->persona->rol == '2')
        <a href="{{ route('producto.editar', $producto->id) }}">
            <button class="btn btn-light btn-sm edit-cover shadow">
                <i class="bi bi-camera"></i> Editar portada
            </button>
        </a>
        @endif
        @endauth

    </div>

    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">

        <div class="d-flex align-items-center flex-wrap">

            {{-- FOTO PERFIL --}}
            <div class="profile-photo">
                <img src="{{ asset('storage/' . $producto->img_perfil) }}" 
                     class="rounded-circle profile-img shadow" 
                     alt="Perfil">

                @auth
                @if(auth()->user()->persona->rol == '2')
                    <a href="{{ route('producto.editar', $producto->id) }}"><button class="btn btn-light btn-sm change-photo shadow"><i class="bi bi-camera"></i></button>
                    </a>
                @endif
                @endauth
            </div>

        {{-- NOMBRE Y BADGE --}}
            <div class="ms-4 mt-3 mt-md-0">
                <h2 class="fw-bold mb-2">{{ $producto->nom_producto }}</h2>
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
                    <h3>${{ $producto->precio_venta }}</h3>
                    <h1 class="mb-1">Descripción:</h1>
                    <h3>{{ $producto->descripcion }}</h3>
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