<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\CarritoItem;
use App\Models\Persona;

class CarritoController extends Controller
{
    public function agregar(Request $request){
        $persona = Persona::where('user_id', auth()->id())->first();

        $carrito = Carrito::firstOrCreate(['persona_id' => $persona->id]);

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
    $persona = Persona::where('user_id', auth()->id())->first();

    if (!$persona) {
        return view('carrito', ['carrito' => null]);
    }

    $carrito = Carrito::with('items.producto')
        ->firstOrCreate(['persona_id' => $persona->id]);

    return view('carrito', compact('carrito'));
}

        public function eliminar($id){
        CarritoItem::findOrFail($id)->delete();
        return back();
    }

    public function vaciar(){
        $persona = Persona::where('user_id', auth()->id())->first();

        if (!$persona) {
            return back();
        }

        $carrito = Carrito::where('persona_id', $persona->id)->first();

        if ($carrito) {
            $carrito->items()->delete();
        }

        return back();
    }
}
