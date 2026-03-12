@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-white flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-5xl border">

    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">Editar Persona</h2>

    <form action="{{route('persona.actualizar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf

    <input type="hidden" name="id" value="{{$personas->id}}">

    <div>
        <label class="block text-gray-600 mb-1">Nombres</label>
        <input type="text" name="nom_persona" value="{{$personas->nom_persona}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Apellido Paterno</label>
            <input type="text" name="apaterno" value="{{$personas->apaterno}}"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Apellido Materno</label>
            <input type="text" name="amaterno" value="{{$personas->amaterno}}"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Fecha de nacimiento</label>
            <input type="date" name="fnac" value="{{$personas->fnac}}"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Teléfono</label>
            <input type="text" name="telefono" value="{{$personas->telefono}}"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Correo electrónico</label>
            <input type="email" name="correo" value="{{$personas->correo}}"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Sexo</label>
            <select name="sexo"class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                <option value="M" {{ $personas->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $personas->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <div class="md:col-span-2">
            <button type="submit"class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">Actualizar Persona</button>
        </div>

    </form>
</div>

</body>
</html>
@endsection 
