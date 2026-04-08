<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\CarritoItem;

class CarritoController extends Controller
{
    public function agregar(Request $request){
        $user = auth()->user();

        $carrito = Carrito::firstOrCreate([
            'user_id' => $user->id
        ]);

        $producto = Producto::findOrFail($request->producto_id);

        $item = CarritoItem::where('carrito_id', $carrito->id)
            ->where('producto_id', $producto->id)
            ->first();

        if ($item) {
            $item->cantidad += 1;
            $item->save();
        } else {
            CarritoItem::create([
                'carrito_id' => $carrito->id,
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'precio' => $producto->precio_venta
            ]);
        }

        return back()->with('success', 'Producto agregado');
    }

    public function index(){
        $carrito = Carrito::with('items.producto')
            ->where('user_id', auth()->id())
            ->first();

        return view('carrito', compact('carrito'));
    }

        public function eliminar($id){
        CarritoItem::findOrFail($id)->delete();
        return back();
    }

    public function vaciar(){
        $carrito = Carrito::where('user_id', auth()->id())->first();

        if ($carrito) {
            $carrito->items()->delete();
        }

        return back();
    }
}
