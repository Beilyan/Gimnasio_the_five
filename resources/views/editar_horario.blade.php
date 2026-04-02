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
        Editar Horario
    </h2>

    <form action="{{route('horario.actualizar')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        <input type="hidden" name="id" value="{{$horario->id}}">

        <div class="md:col-span-2">
            <label class="block text-gray-600 mb-1">Entrenador</label>
            <select name="entrenador_id" required 
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                @foreach ($entrenadores as $item)
                    <option value="{{$item->id}}" {{$item->id == $horario->entrenador_id ? 'selected' : ''}}>{{$item->empleado->persona->nom_persona}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">dia</label>
            <select name="dia" required 
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                <option value="Lunes" {{ $horario->dia == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                <option value="Martes" {{ $horario->dia == 'Martes' ? 'selected' : '' }}>Martes</option>
                <option value="Miercoles" {{ $horario->dia == 'Miercoles' ? 'selected' : '' }}>Miércoles</option>
                <option value="Jueves" {{ $horario->dia == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                <option value="Viernes" {{ $horario->dia == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                <option value="Sabado" {{ $horario->dia == 'Sabado' ? 'selected' : '' }}>Sábado</option>
                <option value="Domingo" {{ $horario->dia == 'Domingo' ? 'selected' : '' }}>Domingo</option>
            </select>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Hora inicio</label>
            <input type="time" name="hora_inicio" value="{{$horario->hora_inicio}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">hora fin</label>
            <input type="time" name="hora_fin" value="{{$horario->hora_fin}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div class="md:col-span-2">
            <button type="submit"
            class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                Actualizar Horario
            </button>
        </div>
    </form>
</div>

</body>

</html>