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
                <a href="{{ route('producto.user') }}" class="text-gray-600 hover:text-black transition">
                    <i class="bi bi-arrow-left text-2xl"></i>
                </a>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Carrito de Compra</h1>
                    <p class="text-sm text-gray-500">
                        {{ isset($carrito) ? $carrito->items->count() : 0 }} productos
                    </p>
                </div>
            </div>

            <form action="{{route('carrito.vaciar')}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-700 flex items-center gap-2 text-sm font-semibold transition">
                    <i class="bi bi-trash3"></i> Vaciar todo
                </button>
            </form>
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

          
            <div class="lg:col-span-2 space-y-4">
                @php $total = 0; @endphp

                @if($carrito && $carrito->items->count())
                    @foreach($carrito->items as $item)
                        @php 
                            $subtotal = $item->cantidad * $item->precio; 
                            $total += $subtotal;
                        @endphp

                        <div class="bg-white rounded-3xl p-5 shadow-sm border border-gray-100 flex flex-col md:flex-row items-center gap-6 relative">
                            
                            <img src="{{ asset('storage/'.$item->producto->img_perfil) }}" 
                                 class="w-28 h-28 rounded-2xl object-cover shadow-inner">

                            <div class="flex-1">
                                <h3 class="font-bold text-xl text-gray-800">
                                    {{ $item->producto->nom_producto }}
                                </h3>

                                <div class="inline-flex items-center bg-gray-100 rounded-xl p-1 border border-gray-200">
                                    <span class="px-5 font-bold text-gray-800">
                                        {{ $item->cantidad }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex flex-col items-end justify-between h-full self-stretch">
                                <form action="{{ route('carrito.eliminar', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-400 hover:text-red-600 transition text-lg">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>

                                <div class="text-right">
                                    <p class="text-2xl font-black text-gray-900">
                                        ${{ number_format($subtotal, 2) }}
                                    </p>
                                    <p class="text-xs text-gray-400 font-medium">
                                        ${{ number_format($item->precio, 2) }} c/u
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500">Tu carrito está vacío</p>
                @endif
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-50 sticky top-10">
                    <h2 class="text-xl font-bold text-gray-800 mb-8">Resumen de Compra</h2>

                    <div class="space-y-5 mb-8">
                        <div class="border-t border-dashed border-gray-200 pt-5 flex justify-between items-center">
                            <span class="text-xl font-bold text-gray-800">Total</span>
                            <span class="text-3xl font-black text-gray-900">
                                ${{ number_format($total ?? 0, 2) }}
                            </span>
                        </div>
                    </div>

                    <form action="{{route('paypal.carrito')}}" method="POST">
                        @csrf
                        <button class="w-full bg-black text-white py-5 rounded-2xl font-bold flex items-center justify-center gap-3 hover:bg-gray-800 transition-all shadow-lg">
                            <i class="bi bi-credit-card-2-back"></i> Proceder al Pago
                        </button>
                    </form>

                    <div class="mt-10 space-y-4 border-t border-gray-50 pt-8">
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