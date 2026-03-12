@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Membresía</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen p-6">

    <div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-4xl border">

        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
            Registrar Membresía
        </h2>

        <form action="{{route('membresia.guardar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <label class="block text-gray-600 mb-1">Nombre</label>
                <input type="text" name="nom_membresia" placeholder="Membresía..."
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Precio</label>
                <input type="number" min="0" name="costo" placeholder="00.00"
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Duración en meses</label>
                <input type="number" min="0" name="duracion_meses" placeholder="3"
                class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div class="md:col-span-2">
                <label class="block text-gray-600 mb-1">Descripción</label>
                <textarea
                    name="descripcion"
                    rows="3"
                    placeholder="Esta membresía cubre..."
                    oninput="this.style.height='auto';this.style.height=this.scrollHeight+'px'"
                    class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400 resize-none">
                </textarea>
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                    Guardar Membresía
                </button>
            </div>
        </form>
    </div>

</body>

</html>
@endsection 
