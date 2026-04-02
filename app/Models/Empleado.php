<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Empleado extends Model
{
    public function persona(){
        return $this->belongsTo(Persona::class, 'persona_id');
    }
}
