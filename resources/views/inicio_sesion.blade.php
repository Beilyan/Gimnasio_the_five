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
    
<div class="container d-flex flex-column justify-content-center align-items-center vh-100 contenedor-cards">

    <div class="icon-circle d-flex justify-content-center align-items-center" style="font-size: 100px;">🏋️</div>

    <div class="text-center mt-5">
        <h2 class="fw-bold">Bienvenido</h2>
        <p class="text-muted mb-4">Inicia sesión para acceder a tu gimnasio</p>
    </div>

    <div class="card shadow-8 p-4" style="max-width: 600px; width: 100%;">
        <div class="card-body text-center">
            
            <a href="{{route('login.google')}}" style="text-decoration: none;">
            <button class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" width="20">
                Continuar con Google
            </button>
            </a>

            <p class="small text-muted mt-3 mb-0">Al continuar, aceptas nuestros términos de servicio y política de privacidad</p>

        </div>
    </div>

    <div class="text-center">
        <p class="mt-4">
            ¿Eres nuevo? 
            <a href="#" class="fw-semibold text-decoration-none">Contacta al administrador</a>
        </p>
    </div>

</div>

</body>
</html>