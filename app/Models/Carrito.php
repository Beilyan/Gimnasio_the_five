<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function items(){
    return $this->hasMany(CarritoItem::class);
}
}
