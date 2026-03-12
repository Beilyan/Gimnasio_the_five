<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    function guardar(Request $req){
        $persona = new Persona();
        $persona->nom_persona = $req->nom_persona;
        $persona->apaterno = $req->apaterno;
        $persona->amaterno = $req->amaterno; 
        $persona->fnac = $req->fnac;
        $persona->telefono = $req->telefono;
        $persona->correo = $req->correo;
        $persona->sexo = $req->sexo;

        $persona->save();
        return redirect()->route('persona.mostrar');
    }

    function mostrar(){
        $personas = Persona::all();
        return view('lista_persona', compact('personas'));
    }

    function editar($id){
        $personas = Persona::find($id);

        return view('editar_persona', compact('personas'));
    }

    function actualizar(Request $req){
        $persona = Persona::findOrFail($req->id);
        $persona->nom_persona = $req->nom_persona;
        $persona->apaterno = $req->apaterno;
        $persona->amaterno = $req->amaterno; 
        $persona->fnac = $req->fnac;
        $persona->telefono = $req->telefono;
        $persona->correo = $req->correo;
        $persona->sexo = $req->sexo;

        $persona->save();

        return redirect()->route('persona.mostrar');
    }

    function eliminar($id){
        $persona = Persona::findOrFail($id);
        $persona -> delete();

        return redirect()->route('persona.mostrar');
    }
}
