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

    <a href="{{ route('horario.mostrar') }}#cartas"
            class="text-gray-700 hover:text-black text-3xl transition">
                <i class="bi bi-box-arrow-in-left fs-1"></i>
    </a>
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
        Horarios Entrenadores
    </h2>

    <form action="{{route('horario.guardar')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <div class="md:col-span-2">
            <label class="block text-gray-600 mb-1">Entrenador</label>
            <select name="entrenador_id" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                @foreach ($empleados as $item)
                    <option value="{{$item->id}}">{{$item->persona->nom_persona}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">dia</label>
            <select name="dia" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sábado</option>
                <option value="Domingo">Domingo</option>
            </select>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Hora inicio</label>
            <input type="time" name="hora_inicio" 
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">hora fin</label>
            <input type="time" name="hora_fin" 
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div class="md:col-span-2">
            <button type="submit"
            class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                Guardar Horario
            </button>
        </div>
    </form>
</div>

</body>
</html>