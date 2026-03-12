<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="min-h-screen bg-white flex items-center justify-center p-6">

        <div class="bg-white shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 rounded-2xl p-10 w-full max-w-6xl border">
            <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">Registro de Persona</h2>

            <form action="{{route('persona.guardar')}}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf

            <div>
                <label class="block text-gray-600 mb-1">Nombres</label>
                <input type="text" name="nom_persona" placeholder="Nombre o nombres"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Apellido Paterno</label>
                <input type="text" name="apaterno" placeholder="Primer apellido"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Apellido Materno</label>
                <input type="text" name="amaterno" placeholder="Segundo apellido"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Fecha de nacimiento</label>
                <input type="date" name="fnac"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Teléfono</label>
                <input type="text" name="telefono" placeholder="##-###-###-####"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Correo electrónico</label>
                <input type="email" name="correo" placeholder="correo@gmail.com"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Sexo</label>
                <select name="sexo"
                class="w-full border border-gray-300 rounded-lg p-3 transition duration-300 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <button type="submit"
                class="w-full bg-gray-800 text-white py-3 rounded-lg transition duration-300 hover:bg-black hover:scale-105 hover:shadow-lg">
                    Guardar Persona
                </button>
            </div>

        </form>

    </div>
</div>

</body>
</html>