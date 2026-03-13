<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('uso')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <div class="max-w-7xl mx-auto p-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">PERSONAS</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer operaciones sobre personas a traves de formularios.
                </p>
                <a href="{{route('persona.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Ejecutar
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">EMPLEADOS</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer operaciones sobre empleados a traves de formularios.
                </p>
                <a href="{{route('empleado.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Ejecutar
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">CLIENTES</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer operaciones sobre clientes a traves de formularios.
                </p>
                <a href="{{route('cliente.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                     Ejecutar
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">PROVEEDORES</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer oparaciones sobre proveedores a traves de formularios.
                </p>
                <a href="{{route('proveedor.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Ejecutar
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">MEMBRESÍAS</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer operaciones sobre membresías a traves de formularios.
                </p>
                <a href="{{route('membresia.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Ejecutar
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1 transition">
                <h5 class="text-xl font-semibold mb-3">PRODUCTOS</h5>
                <p class="text-gray-600 mb-4">
                    En este apartado puedes hacer operaciones sobre productos a traves de formularios.
                </p>
                <a href="{{route('producto.mostrar')}}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                    Ejecutar
                </a>
            </div>

        </div>

    </div>

    <nav class="fixed-bottom d-flex justify-content-center">
        <div class="nav-container d-flex justify-content-around align-items-center px-4 py-3">

            <a href="{{ route('inicio') }}"
               class="nav-item text-center {{ request()->routeIs('inicio') ? 'active' : '' }}">
                <i class="bi bi-house-door-fill"></i>
                <span>Inicio</span>
            </a>

            <a href="{{ route('perfil') }}"
               class="nav-item text-center {{ request()->routeIs('perfil') ? 'active' : '' }}">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
            </a>

            <a href="{{ route('lista_entrenadores') }}"
               class="nav-item text-center {{ request()->routeIs('lista_entrenadores') ? 'active' : '' }}">
                <i class="bi bi-person-check"></i>
                <span>Entrenador</span>
            </a>

            <a href="{{ route('tienda') }}"
               class="nav-item text-center {{ request()->routeIs('tienda') ? 'active' : '' }}">
                <i class="bi bi-bag"></i>
                <span>Tienda</span>
            </a>

            <a href="{{ route('operaciones') }}"
               class="nav-item text-center {{ request()->routeIs('operaciones') ? 'active' : '' }}">
                <i class="bi bi-bug"></i>
                <span>Operaciones</span>
            </a>

        </div>
    </nav>

    <div class="bg-white" style="height: 150px"></div>

</body>
</html>