<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Persona;
use App\Models\Orden;
use App\Models\DetalleOrden;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PagoController extends Controller
{
    public function pagarCarrito(){
    $persona = Persona::where('user_id', auth()->id())->first();

    $carrito = Carrito::with('items.producto')
        ->where('persona_id', $persona->id)
        ->first();

    if (!$carrito || $carrito->items->isEmpty()) {
        return back()->with('error', 'Carrito vacío');
    }

    foreach ($carrito->items as $item) {

    if ($item->cantidad > $item->producto->stock) {
        return back()->with('error', 
            'No hay suficiente stock de: ' . $item->producto->nom_producto
        );
    }

}

    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $items = [];
    $total = 0;

    foreach ($carrito->items as $item) {
        $items[] = [
            'name' => $item->producto->nom_producto,
            'quantity' => $item->cantidad,
            'unit_amount' => [
                'currency_code' => 'MXN',
                'value' => number_format($item->precio, 2, '.', '')
            ]
        ];

        $total += $item->cantidad * $item->precio;
    }

    $order = $provider->createOrder([
        "intent" => "CAPTURE",
        "application_context" => [
            "return_url" => route('paypal.success'),
            "cancel_url" => route('paypal.cancel'),
        ],
        "purchase_units" => [[
            "items" => $items,
            "amount" => [
                "currency_code" => "MXN",
                "value" => number_format($total, 2, '.', ''),
                "breakdown" => [
                    "item_total" => [
                        "currency_code" => "MXN",
                        "value" => number_format($total, 2, '.', '')
                    ]
                ]
            ]
        ]]
    ]);

    foreach ($order['links'] as $link) {
        if ($link['rel'] === 'approve') {
            return redirect()->away($link['href']);
        }
    }

    return back()->with('error', 'Error al generar pago');
}

    public function success(Request $request){
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $response = $provider->capturePaymentOrder($request->token);

    if (isset($response['status']) && $response['status'] == 'COMPLETED') {

        $persona = Persona::where('user_id', auth()->id())->first();

        $carrito = Carrito::with('items.producto')
            ->where('persona_id', $persona->id)
            ->first();

        if (!$carrito || $carrito->items->isEmpty()) {
            return redirect()->route('carrito.index')->with('error', 'Carrito vacío');
        }

        $total = 0;
        foreach ($carrito->items as $item) {
            $total += $item->cantidad * $item->precio;
        }

        $orden = Orden::create([
            'persona_id' => $persona->id,
            'total' => $total,
            'estado' => 'pagado'
        ]);

        foreach ($carrito->items as $item) {
            DetalleOrden::create([
                'orden_id' => $orden->id,
                'producto_id' => $item->producto_id,
                'cantidad' => $item->cantidad,
                'precio' => $item->precio
            ]);

            $producto = $item->producto;
            $producto->stock -= $item->cantidad;
            $producto->save();
        }

        $carrito->items()->delete();

        return redirect()
            ->route('carrito.index')
            ->with('success', 'Pago realizado correctamente');
    }

    return redirect()->route('carrito.index')->with('error', 'Error en el pago');
}

    public function cancel(){
        return redirect()->route('carrito.index')->with('error', 'Pago cancelado');
    }
}