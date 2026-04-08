<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'cod_producto',
        'nom_producto',
        'stock',
        'precio_compra',
        'precio_venta',
        'img_perfil',
        'img_portada',
        'descripcion', 
        'proveedor_id',
        'estatus'
    ];

    public function detalles(){
        return $this->hasMany(DetalleOrden::class);
    }
}