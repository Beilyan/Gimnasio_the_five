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

<div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-3xl border">

    <a href="{{ route('cliente.mostrar') }}#cartas"
            class="text-gray-700 hover:text-black text-3xl transition">
                <i class="bi bi-box-arrow-in-left fs-1"></i>
    </a>
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
        Editar Cliente
    </h2>

    <form action="{{route('cliente.actualizar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <input type="hidden" name="id" value="{{$cliente->id}}">

        <div>
            <label class="block text-gray-600 mb-1">Código de cliente</label>
            <input type="text" name="cod_cliente" value="{{$cliente->cod_cliente}}" readonly
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Persona</label>
            <select name="persona_id"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">

                @foreach ($persona as $item)
                    <option value="{{$item->id}}" {{$item->id == $cliente->persona_id ? 'selected' : ''}}>
                        {{$item->nom_persona}}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="md:col-span-2">
            <button type="submit"
            class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                Actualizar Cliente
            </button>
        </div>

    </form>

</div>

</body>
</html>