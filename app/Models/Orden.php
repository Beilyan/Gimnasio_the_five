<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'ordenes';

    protected $fillable = [
        'persona_id',
        'total',
        'estado'
    ];

    public function detalles(){
        return $this->hasMany(DetalleOrden::class);
    }

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
