<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('uso')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="bg-gray-50 min-h-screen p-4 md:p-10 font-sans">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center gap-4">
                <a href="{{ url()->previous() }}" class="text-gray-600 hover:text-black transition">
                    <i class="bi bi-arrow-left text-2xl"></i>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Carrito de Compra</h1>
                    <p class="text-sm text-gray-500">3 productos</p>
                </div>
            </div>
            <button class="text-red-500 hover:text-red-700 flex items-center gap-2 text-sm font-semibold transition">
                <i class="bi bi-trash3"></i> Vaciar todo
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-4">
                
                <div class="bg-white rounded-3xl p-5 shadow-sm border border-gray-100 flex flex-col md:flex-row items-center gap-6 relative">
                    <img src="https://via.placeholder.com/150" class="w-28 h-28 rounded-2xl object-cover shadow-inner">
                    
                    <div class="flex-1">
                        <h3 class="font-bold text-xl text-gray-800">Proteína Whey 2kg</h3>
                        <p class="text-gray-400 text-sm mb-4">Suplementos</p>
                        
                        <div class="inline-flex items-center bg-gray-100 rounded-xl p-1 border border-gray-200">
                            <button onclick="changeQty(this, -1)" class="w-10 h-10 flex items-center justify-center hover:bg-white hover:shadow-sm rounded-lg transition text-gray-600">-</button>
                            <span class="px-5 font-bold text-gray-800 qty-value">2</span>
                            <button onclick="changeQty(this, 1)" class="w-10 h-10 flex items-center justify-center hover:bg-white hover:shadow-sm rounded-lg transition text-gray-600">+</button>
                        </div>
                    </div>

                    <div class="flex flex-col items-end justify-between h-full self-stretch">
                        <button class="text-red-400 hover:text-red-600 transition text-lg">
                            <i class="bi bi-trash3"></i>
                        </button>
                        <div class="text-right">
                            <p class="text-2xl font-black text-gray-900">$91.98</p>
                            <p class="text-xs text-gray-400 font-medium">$45.99 c/u</p>
                        </div>
                    </div>
                </div>
                </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-50 sticky top-10">
                    <h2 class="text-xl font-bold text-gray-800 mb-8">Resumen de Compra</h2>
                    
                    <div class="space-y-5 mb-8">
                        <div class="border-t border-dashed border-gray-200 pt-5 flex justify-between items-center">
                            <span class="text-xl font-bold text-gray-800">Total</span>
                            <span class="text-3xl font-black text-gray-900">$224.91</span>
                        </div>
                    </div>

                    <button class="w-full bg-black text-white py-5 rounded-2xl font-bold flex items-center justify-center gap-3 hover:bg-gray-800 transform hover:scale-[1.02] transition-all shadow-lg shadow-gray-200 mb-6">
                        <i class="bi bi-credit-card-2-back"></i> Proceder al Pago
                    </button>

                    <div class="mt-10 space-y-4 border-t border-gray-50 pt-8">
                        <div class="flex items-center gap-4 text-xs font-medium text-gray-500">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            Envío gratuito en todos los pedidos
                        </div>
                        <div class="flex items-center gap-4 text-xs font-medium text-gray-500">
                            <div class="w-6 h-6 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            Pago seguro garantizado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>