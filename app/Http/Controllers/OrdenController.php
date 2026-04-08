<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    function mostrar() {
        $ordenes = Orden::select(
            'ordenes.id as orden_id',
            'ordenes.persona_id',
            'personas.nom_persona',
            'personas.apaterno',
            'personas.amaterno',
            'ordenes.total',
            'ordenes.estado',
            'detalle_ordenes.id as detalle_id',
            'detalle_ordenes.producto_id',
            'detalle_ordenes.cantidad',
            'detalle_ordenes.precio as precio_unitario',
            'productos.cod_producto',
            'productos.nom_producto'
        )
        ->join('personas', 'personas.id', '=', 'ordenes.persona_id')
        ->join('detalle_ordenes', 'detalle_ordenes.orden_id', '=', 'ordenes.id')
        ->join('productos', 'productos.id', '=', 'detalle_ordenes.producto_id')
        ->get();

        return view('lista_orden', compact('ordenes'));
    }

}
