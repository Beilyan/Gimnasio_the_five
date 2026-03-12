<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-3xl border">

        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
            Registrar Empleado
        </h2>

        <form action="{{route('empleado.guardar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <label class="block text-gray-600 mb-1">Código de empleado</label>
                <input type="text" name="cod_empleado" value="{{$codigo}}" readonly
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Persona</label>
                <select name="persona_id"
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">

                    @foreach ($persona as $item)
                        <option value="{{$item->id}}">
                            {{$item->nom_persona}}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-600 mb-1">Rol</label>
                <select name="rol"
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">

                    <option value="Encargado">Encargado</option>
                    <option value="Entrenador">Entrenador</option>

                </select>
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                    Guardar Empleado
                </button>
            </div>
        </form>
    </div>

</body>

</html>
