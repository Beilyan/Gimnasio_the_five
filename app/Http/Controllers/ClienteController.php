<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Cliente;

class ClienteController extends Controller
{
    function nueva(){
        $persona = Persona::all();
        $ultimo = Cliente::orderBy('id','desc')->first();

    if($ultimo){
        $numero = intval(substr($ultimo->cod_cliente,1)) + 1;
    }else{
        $numero = 1;
    }
    $codigo = 'C'.str_pad($numero,3,'0',STR_PAD_LEFT);
//Se llama igual que la variable pero sin signo de pesos v
        return view('formulario_cliente', compact('persona', 'codigo')); 
    }

    function guardar(Request $req){
        $cliente = new Cliente();
        $cliente->cod_cliente = $req->cod_cliente;
        $cliente->persona_id = $req->persona_id;

        $cliente->save();
        return redirect()->route('cliente.mostrar');
    }

    function mostrar(){                                                       
        $cliente = Cliente::select('clientes.*','personas.nom_persona as nom', 'personas.apaterno as paterno', 'personas.amaterno as materno')->join('personas', 'personas.id', 'clientes.persona_id')->get();
        
        return view('lista_cliente', compact('cliente'));
    }

    function editar($id){
        $cliente = Cliente::findOrFail($id);

        $persona = Persona::all();

        return view('editar_cliente', compact('cliente', 'persona'));
    }

    function actualizar(Request $req){
        $cliente = Cliente::findOrFail($req->id);
        $cliente->cod_cliente = $req->cod_cliente;
        $cliente->persona_id = $req->persona_id;

        $cliente->save();
        return redirect()->route('cliente.mostrar');
    }

    function eliminar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente -> delete();

        return redirect()->route('cliente.mostrar');
    }
}
