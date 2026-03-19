<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('uso')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-4xl border">

        {{-- <a href="{{ route('membresia.mostrar') }}#cartas"
            class="text-gray-700 hover:text-black text-3xl transition">
                <i class="bi bi-box-arrow-in-left fs-1"></i>
        </a> --}}
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
            Editar Especialidad
        </h2>

        <form action="{{route('especialidad.actualizar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <input type="hidden" name="id" value="{{$especialidad->id}}">

            <div>
                <label class="block text-gray-600 mb-1">Nombre</label>
                <input type="text" name="nombre" placeholder="Entrenador personal..." value="{{$especialidad->nombre}}"
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                    Actualizar Especialidad
                </button>
            </div>
        </form>
    </div>

</body>

</html>