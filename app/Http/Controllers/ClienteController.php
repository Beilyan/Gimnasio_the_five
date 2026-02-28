<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Cliente;

class ClienteController extends Controller
{
    function nueva(){
        $persona = Persona::all();
//Se llama igual que la variable pero sin signo de pesos v
        return view('formulario_empleado', compact('persona')); 
    }

    function guardar(Request $req){
        $empleado = new Empleado();
        $empleado->cod_empleado = $req->cod_empleado;
        $empleado->persona_id = $req->persona_id;
        $empleado->rol = $req->rol; 

        $empleado->save();
        return redirect()->route('empleado.mostrar');
    }

    // function mostrar(){
    //     $empleado = Empleado::all();
    //     return view('lista_empleado', compact('empleado'));
    // }

    function mostrar(){//Referirce al modelo es referirse a la tabla en bd                                                           //Para que incluya eliminados v
        $empleado = Empleado::select('empleados.*','personas.nom_persona as nom', 'personas.apaterno as paterno', 'personas.amaterno as materno')->join('personas', 'personas.id', 'empleados.persona_id')->get();//simpre get o no lleva
        //Esto es un inner join, tabla aka modelo, X.pk = Y.X.fk
        return view('lista_empleado', compact('empleado'));
    }

    function editar($id){
        $empleado = Empleado::findOrFail($id);

        $persona = Persona::all();

        return view('editar_empleado', compact('empleado', 'persona'));
    }

    function actualizar(Request $req){
        $empleado = Empleado::findOrFail($req->id);
        $empleado->cod_empleado = $req->cod_empleado;
        $empleado->persona_id = $req->persona_id;
        $empleado->rol = $req->rol; 

        $empleado->save();
        return redirect()->route('empleado.mostrar');
    }

    function eliminar(){

    }
}
