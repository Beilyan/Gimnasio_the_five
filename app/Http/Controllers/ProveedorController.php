<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
     function guardar(Request $req){
        $proveedor = new Proveedor();
        $proveedor->nom_proveedor = $req->nom_proveedor;
        $proveedor->telefono = $req->telefono;
        $proveedor->correo = $req->correo; 
        $proveedor->descripcion = $req->descripcion;

        $proveedor->save();
        return redirect()->route('proveedor.mostrar');
    }

    function mostrar(){
        $proveedor = Proveedor::all();
        return view('lista_proveedor', compact('proveedor'));
    }

    function editar($id){
        $proveedor = Proveedor::find($id);

        return view('editar_proveedor', compact('proveedor'));
    }

    function actualizar(Request $req){
        $proveedor = Proveedor::findOrFail($req->id);
        $proveedor->nom_proveedor = $req->nom_proveedor;
        $proveedor->telefono = $req->telefono;
        $proveedor->correo = $req->correo; 
        $proveedor->descripcion = $req->descripcion;

        $proveedor->save();

        return redirect()->route('proveedor.mostrar');
    }

    function eliminar(){

    }
}
