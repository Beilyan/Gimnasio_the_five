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
            Lista de Productos
        </h1>

        <a href="/producto/nueva">
            <button class="bg-gray-800 text-white px-5 py-2 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-md">
                Nuevo producto
            </button>
        </a>

    </div>

    <div class="overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-3 text-left">Código</th>
                    <th class="p-3 text-left">Nombre</th>
                    <th class="p-3 text-left">Stock</th>
                    <th class="p-3 text-left">Precio de compra</th>
                    <th class="p-3 text-left">Precio de venta</th>
                    <th class="p-3 text-left">Imagen</th>
                    <th class="p-3 text-left">Proveedor</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($producto as $fila)

                <tr class="border-b hover:bg-gray-50 hover:shadow-sm transition duration-200">

                    <td class="p-3">{{$fila->cod_producto}}</td>
                    <td class="p-3">{{$fila->nom_producto}}</td>
                    <td class="p-3">{{$fila->stock}}</td>
                    <td class="p-3">{{$fila->precio_compra}}</td>
                    <td class="p-3">{{$fila->precio_venta}}</td>

                    <td class="p-3">
                        <img src="{{ asset('storage/'.$fila->img) }}" class="w-16 h-16 object-cover rounded">
                    </td>

                    <td class="p-3">{{$fila->nom}}</td>

                    <td class="p-3 flex gap-2">

                        <a href="{{route('producto.editar', $fila->id)}}"
                        class="bg-gray-700 text-white px-3 py-1 rounded-md hover:bg-black hover:scale-105 transition duration-200 shadow">
                            Editar
                        </a>

                        <a href="{{route('producto.eliminar', $fila->id)}}"
                        class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-800 hover:scale-105 transition duration-200 shadow">
                            Eliminar
                        </a>

                    </td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>