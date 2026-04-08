<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('uso')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white p-10">

<div class="max-w-7xl mx-auto bg-white shadow-lg hover:shadow-2xl transition duration-300 rounded-xl p-8 border">

    <div class="flex justify-between items-center mb-6">

        <a href="{{ route('operaciones') }}#cartas"
        class="text-gray-700 hover:text-black text-3xl transition">
            <i class="bi bi-box-arrow-in-left fs-1"></i>
        </a>
        <h1 class="text-3xl font-semibold text-gray-800">
            Lista de Ordenes
        </h1>

        {{-- <a href="/horario/nueva">
            <button class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-md">
                Nuevo Horario
            </button>
        </a> --}}

    </div>

    <div class="overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-3 text-left">Nombres</th>
                    <th class="p-3 text-left">Apellido paterno</th>
                    <th class="p-3 text-left">Apellido materno</th>
                    <th class="p-3 text-left">Productos</th>
                    <th class="p-3 text-left">Cantidad</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($ordenes as $fila)

                <tr class="border-b hover:bg-gray-50 hover:shadow-sm transition duration-200">
  
                    <td class="p-3">{{$fila->nom_persona}}</td>
                    <td class="p-3">{{$fila->apaterno}}</td>
                    <td class="p-3">{{$fila->amaterno}}</td>
                    <td class="p-3">{{$fila->nom_producto}}</td>
                    <td class="p-3">{{$fila->cantidad}}</td>
                    <td class="p-3">{{$fila->estado}}</td>
                    
                    <td class="p-3 flex gap-2">
                            <button onclick="cambiarEstado(this)"data-estado="{{ $fila->estado }}"
                                class="px-3 py-1 rounded-md text-white font-semibold transition duration-200
                                {{ $fila->estado == 'entregado' ? 'bg-green-500' : 'bg-yellow-500' }}">
                                {{ $fila->estado == 'entregado' ? 'Entregado' : 'Pendiente' }}
                            </button>
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

</div>

<script>
function cambiarEstado(btn) {
    let estado = btn.getAttribute("data-estado");

    if (estado === "pendiente") {
        btn.setAttribute("data-estado", "entregado");
        btn.textContent = "Entregado";

        btn.classList.remove("bg-yellow-500");
        btn.classList.add("bg-green-500");

    } else {
        btn.setAttribute("data-estado", "pendiente");
        btn.textContent = "Pendiente";

        btn.classList.remove("bg-green-500");
        btn.classList.add("bg-yellow-500");
    }
}
</script>

</body>
</html>