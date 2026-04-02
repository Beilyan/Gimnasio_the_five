<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Empleado;
use App\Models\EntrenadorDetalle;

class HorarioController extends Controller
{
    function nueva(){
    $empleados = Empleado::with('persona')->get();

    return view('formulario_horario', compact('empleados'));
}

    function guardar(Request $req){
        $horario = new Horario();
        $horario->entrenador_id = $req->entrenador_id;
        $horario->dia = $req->dia;
        $horario->hora_inicio = $req->hora_inicio;
        $horario->hora_fin = $req->hora_fin;

        $horario->save();
        return redirect()->route('horario.mostrar');
    }

    function mostrar(){
        $horario = Horario::select(
    'horarios.id as horario_id',
    'horarios.entrenador_id',
    'horarios.dia',
    'horarios.hora_inicio',
    'horarios.hora_fin',
    'personas.nom_persona as nom',
    'personas.apaterno as paterno',
    'personas.amaterno as materno'
)
->join('entrenador_detalles', 'entrenador_detalles.id', '=', 'horarios.entrenador_id')
->join('empleados', 'empleados.id', '=', 'entrenador_detalles.empleado_id')
->join('personas', 'personas.id', '=', 'empleados.persona_id')
->get();
        
        return view('lista_horario', compact('horario'));
    }

    function editar($id){
        $horario = Horario::findOrFail($id);

        $entrenadores = EntrenadorDetalle::with('empleado.persona')->get();

        return view('editar_horario', compact('horario', 'entrenadores'));
    }

    function actualizar(Request $req){
        $horario = Horario::findOrFail($req->id);
        $horario->entrenador_id = $req->entrenador_id;
        $horario->dia = $req->dia;
        $horario->hora_inicio = $req->hora_inicio;
        $horario->hora_fin = $req->hora_fin;

        $horario->save();
        return redirect()->route('horario.mostrar');
    }

    function eliminar($id){
        $horario = Horario::findOrFail($id);
        $horario -> delete();

        return redirect()->route('horario.mostrar');
    }
}
