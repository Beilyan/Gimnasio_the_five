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

    <a href="{{ route('entrenador.mostrar') }}#cartas"
            class="text-gray-700 hover:text-black text-3xl transition">
                <i class="bi bi-box-arrow-in-left fs-1"></i>
    </a>
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
        Editar Entrenador
    </h2>

    <form action="{{route('entrenador.actualizar')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf
        <input type="hidden" name="id" value="{{$entrenador->id}}">

        <div class="md:col-span-2">
            <label class="block text-gray-600 mb-1">Entrenador</label>
            <select name="empleado_id" required 
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                @foreach ($empleados as $item)
                    <option value="{{$item->id}}" {{$item->id == $entrenador->empleado_id ? 'selected' : ''}}>{{$item->persona->nom_persona}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Facebook</label>
            <input type="text" name="facebook" value="{{$entrenador->facebook}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>
        <div>
            <label class="block text-gray-600 mb-1">Instagram</label>
            <input type="text" name="instagram"   value="{{$entrenador->instagram}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>
        <div>
            <label class="block text-gray-600 mb-1">Otro (opcional)</label>
            <input type="text" name="otro"   value="{{$entrenador->otro}}"
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Foto perfil actual</label>
            @if($entrenador->img_perfil)
                <img src="{{ asset('storage/'.$entrenador->img_perfil) }}" width="80" style="border-radius:50%">
            @endif
            <input type="file" name="img_perfil"
            class="w-full border border-gray-300 rounded-lg p-2 transition hover:shadow-md">
        </div>
        <div>
            <label class="block text-gray-600 mb-1">Foto portada actual</label>
            @if($entrenador->img_portada)
                <img src="{{ asset('storage/'.$entrenador->img_portada) }}" width="120">
            @endif
            <input type="file" name="img_portada"
            class="w-full border border-gray-300 rounded-lg p-2 transition hover:shadow-md">
        </div>

        <div class="md:col-span-2">
                <label class="block text-gray-600 mb-1">Descripción profesional</label>
                <textarea name="descripcion" rows="3" placeholder="Especialidad en..." oninput="this.style.height='auto';this.style.height=this.scrollHeight+'px'"
                    class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400 resize-none">{{ $entrenador->descripcion }}</textarea>
            </div>

        <div class="md:col-span-2">
            <button type="submit"
            class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                Actualizar Entrenador
            </button>
        </div>
    </form>
</div>

</body>

</html>