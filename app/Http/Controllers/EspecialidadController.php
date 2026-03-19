<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    function guardar(Request $req){
        $especialidad = new Especialidad();
        $especialidad->nombre = $req->nombre;

        $especialidad->save();
        return redirect()->route('especialidad.mostrar');
    }

    function mostrar(){
        $especialidad = Especialidad::all();
        return view('lista_especialidad', compact('especialidad'));
    }

    function editar($id){
        $especialidad = Especialidad::find($id);

        return view('editar_especialidad', compact('especialidad'));
    }

    function actualizar(Request $req){
        $especialidad = Especialidad::findOrFail($req->id);
        $especialidad->nombre = $req->nombre;

        $especialidad->save();
        return redirect()->route('especialidad.mostrar');
    }

    function eliminar($id){
        $especialidad = Especialidad::findOrFail($id);
        $especialidad -> delete();

        return redirect()->route('especialidad.mostrar');
    }
}
