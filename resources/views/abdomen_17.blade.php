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
                <iframe src="https://www.youtube.com/embed/qHXcGLXDYD4"></iframe>
            </div>
        </div>  
        
    </div>
    {{-- INFORMACIÓN PERFIL --}}
    <div class="profile-info bg-white p-4 shadow">
            <div class="ms-4 mt-3 mt-md-0 text-center">
                <h2 class="fw-bold mb-2">Toque de talones</h2>
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
                    <h3>1.- Acuéstate boca arriba en una estera de ejercicios y dobla las rodillas para que tus pies queden apoyados en el suelo. Coloca las manos a ambos lados del cuerpo con las palmas hacia abajo.<br><br>
2.- Levanta la cabeza, los hombros y el cuello del suelo y lleva la mano derecha hacia el pie derecho, tocándolo con los dedos. Al mismo tiempo, levanta el hombro izquierdo del suelo.<br><br>
3.- Vuelve a la posición inicial y repite el movimiento con el lado opuesto. Levanta la mano izquierda y lleva los dedos hacia el pie izquierdo, levantando el hombro derecho del suelo.<br><br>
4.- Continúa alternando los lados de manera fluida y controlada, manteniendo la cabeza y los hombros elevados del suelo durante todo el ejercicio. Haz el número de repeticiones indicadas.</h3>
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