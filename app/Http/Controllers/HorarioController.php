<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Empleado;

class HorarioController extends Controller
{
    function nueva(){
    $empleados = Empleado::with('persona')->get();

    return view('formulario_horario', compact('empleados'));
}

    function guardar(Request $req){
        $horario = new Horario();
        $entrenador->empleado_id = $req->empleado_id;
        $entrenador->dia = $req->dia;
        $entrenador->hora_inicio = $req->hora_inicio;
        $entrenador->hora_fin = $req->hora_fin;

        $entrenador->save();
        return redirect()->route('horario.mostrar');
    }

    function mostrar(){
        $horario = Horario::select('horarios.*', 'empleados.*','personas.nom_persona as nom', 'personas.apaterno as paterno', 'personas.amaterno as materno')->join('empleados', 'empleados.id', '=', 'horarios.empleado_id')->join('personas', 'personas.id', '=', 'empleados.persona_id')->get();
        
        return view('lista_horario', compact('horario'));
    }

    function editar($id){
        $horario = Horario::findOrFail($id);

        // $empleados = Empleado::with('persona')->get();

        return view('lista_horario', compact('entrenador', 'empleados'));
    }

    function actualizar(Request $req){
        $horario = Horario::findOrFail($req->id);
        $horario->empleado_id = $req->empleado_id;
        $entrenador->dia = $req->dia;
        $entrenador->hora_inicio = $req->hora_inicio;
        $entrenador->hora_fin = $req->hora_fin;

        $horario->save();
        return redirect()->route('lista_horario');
    }

    function eliminar($id){
        $horario = Horario::findOrFail($id);
        $horario -> delete();

        return redirect()->route('lista_horario');
    }
}
