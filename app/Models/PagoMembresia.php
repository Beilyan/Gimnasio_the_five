<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoMembresia extends Model
{
    public function membresia(){
        return $this->belongsTo(Membresia::class);
    }

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
