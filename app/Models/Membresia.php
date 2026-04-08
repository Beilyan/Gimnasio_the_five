<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    public function pagos(){
        return $this->hasMany(PagoMembresia::class);
    }
}
