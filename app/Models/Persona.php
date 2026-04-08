<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pagosMembresia(){
        return $this->hasMany(PagoMembresia::class);
    }

    public function ultimoPago(){
        return $this->hasOne(PagoMembresia::class)->latestOfMany();
    }

    public function ordenes(){
        return $this->hasMany(Orden::class);
    }
}
