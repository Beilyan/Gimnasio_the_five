<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = ['persona_id'];

    public function items(){
        return $this->hasMany(CarritoItem::class);
    }
}
