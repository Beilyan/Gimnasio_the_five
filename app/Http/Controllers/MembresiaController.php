<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membresia;

class MembresiaController extends Controller
{
    function guardar(Request $req){
        $membresia = new Membresia();
        $membresia->nom_membresia = $req->nom_membresia;
        $membresia->descripcion = $req->descripcion;
        $membresia->costo = $req->costo; 
        $membresia->duracion_meses = $req->duracion_meses;

        $membresia->save();
        return redirect()->route('membresia.mostrar');
    }

    function mostrar(){
        $membresia = Membresia::all();
        return view('lista_membresia', compact('membresia'));
    }

    function editar($id){
        $membresia = Membresia::find($id);

        return view('editar_membresia', compact('membresia'));
    }

    function actualizar(Request $req){
        $membresia = Membresia::findOrFail($req->id);
        $membresia->nom_membresia = $req->nom_membresia;
        $membresia->descripcion = $req->descripcion;
        $membresia->costo = $req->costo; 
        $membresia->duracion_meses = $req->duracion_meses;

        $membresia->save();

        return redirect()->route('membresia.mostrar');
    }

    function eliminar($id){
        $membresia = Membresia::findOrFail($id);
        $membresia -> delete();

        return redirect()->route('membresia.mostrar');
    }
}
