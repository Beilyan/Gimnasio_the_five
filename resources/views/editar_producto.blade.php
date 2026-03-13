<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    @include('uso')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white flex items-center justify-center min-h-screen p-6">

<div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition duration-300 rounded-2xl p-10 w-full max-w-4xl border">

    <a href="{{ route('producto.mostrar') }}#cartas"
            class="text-gray-700 hover:text-black text-3xl transition">
                <i class="bi bi-box-arrow-in-left fs-1"></i>
    </a>
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
        Editar Producto
    </h2>

    <form action="{{route('producto.actualizar')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @csrf

        <input type="hidden" name="id" value="{{$producto->id}}">

        <div>
            <label class="block text-gray-600 mb-1">Código de producto</label>
            <input type="text" name="cod_producto" value="{{$producto->cod_producto}}" readonly
            class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Nombre</label>
            <input type="text" name="nom_producto" value="{{$producto->nom_producto}}" placeholder="Suplemento..." required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Stock</label>
            <input type="number" name="stock" value="{{$producto->stock}}" placeholder="##" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Precio de compra</label>
            <input type="number" step="0.01" name="precio_compra" min="0" value="{{$producto->precio_compra}}" placeholder="00.00" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Precio de venta</label>
            <input type="number" step="0.01" name="precio_venta" min="0" value="{{$producto->precio_venta}}" placeholder="00.00" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
        </div>

        <div>
            <label class="block text-gray-600 mb-1">Imagen actual</label>

            @if($producto->img)
                <img src="{{ asset('storage/'.$producto->img) }}" class="w-28 h-28 object-cover rounded-lg border mb-2">
            @endif

            <label class="block text-gray-600 mb-1">Nueva imagen</label>
            <input type="file" name="img"
            class="w-full border border-gray-300 rounded-lg p-2 transition hover:shadow-md">
        </div>

        <div class="md:col-span-2">
            <label class="block text-gray-600 mb-1">Proveedor</label>

            <select name="proveedor_id" required
            class="w-full border border-gray-300 rounded-lg p-3 transition hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">

                @foreach ($proveedor as $item)
                    <option {{$item->id == $producto->proveedor_id ? 'selected' : ''}}
                        value="{{$item->id}}">
                        {{$item->nom_proveedor}}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="md:col-span-2">
            <button type="submit"
            class="w-full bg-gray-800 text-white py-3 rounded-lg hover:bg-black hover:scale-105 transition duration-300 shadow-lg">
                Guardar cambios
            </button>
        </div>
    </form>
</div>

</body>
</html>