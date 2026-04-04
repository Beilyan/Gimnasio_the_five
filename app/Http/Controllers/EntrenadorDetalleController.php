<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\EntrenadorDetalle;
use Illuminate\Support\Facades\DB;

class EntrenadorDetalleController extends Controller
{
    function nueva(){
    $empleados = Empleado::with('persona')->get();

    return view('formulario_detalle_entrenador', compact('empleados'));
}

    function guardar(Request $req){
        $entrenador = new EntrenadorDetalle();
        $entrenador->empleado_id = $req->empleado_id;
        $entrenador->facebook = $req->facebook;
        $entrenador->instagram = $req->instagram;
        $entrenador->otro = $req->otro; 
        $entrenador->descripcion = $req->descripcion;
        if($req->hasFile('img_perfil')){
        $rutaPerfil = $req->file('img_perfil')->store('entrenadores/perfil','public');
        $entrenador->img_perfil = $rutaPerfil;
    }
        if($req->hasFile('img_portada')){
        $rutaPortada = $req->file('img_portada')->store('entrenadores/portada','public');
        $entrenador->img_portada = $rutaPortada;
    }
        $entrenador->save();
        return redirect()->route('entrenador.mostrar');
    }

    function mostrar(){
        $entrenador = EntrenadorDetalle::select(
    'entrenador_detalles.id as entrenador_id',
    'entrenador_detalles.empleado_id',
    'entrenador_detalles.facebook',
    'entrenador_detalles.instagram',
    'entrenador_detalles.otro',
    'entrenador_detalles.descripcion',
    'entrenador_detalles.img_perfil',
    'entrenador_detalles.img_portada',
    'personas.nom_persona as nom',
    'personas.apaterno as paterno',
    'personas.amaterno as materno'
)
->join('empleados', 'empleados.id', '=', 'entrenador_detalles.empleado_id')
->join('personas', 'personas.id', '=', 'empleados.persona_id')
->get();
        
        return view('lista_detalle_entrenador', compact('entrenador'));
    }

    function mostrarUser(){
        $entrenador = EntrenadorDetalle::select(
    'entrenador_detalles.id as entrenador_id',
    'entrenador_detalles.empleado_id',
    'entrenador_detalles.facebook',
    'entrenador_detalles.instagram',
    'entrenador_detalles.otro',
    'entrenador_detalles.descripcion',
    'entrenador_detalles.img_perfil',
    'entrenador_detalles.img_portada',
    'personas.nom_persona as nom',
    'personas.apaterno as paterno',
    'personas.amaterno as materno'
)
->join('empleados', 'empleados.id', '=', 'entrenador_detalles.empleado_id')
->join('personas', 'personas.id', '=', 'empleados.persona_id')
->get();
        
        return view('lista_entrenadores', compact('entrenador'));
    }

    function editar($id){
        $entrenador = EntrenadorDetalle::findOrFail($id);

        $empleados = Empleado::with('persona')->get();

        return view('editar_detalle_entrenador', compact('entrenador', 'empleados'));
    }

    function actualizar(Request $req){
        $entrenador = EntrenadorDetalle::findOrFail($req->id);
        $entrenador->empleado_id = $req->empleado_id;
        $entrenador->facebook = $req->facebook;
        $entrenador->instagram = $req->instagram;
        $entrenador->otro = $req->otro; 
        $entrenador->descripcion = $req->descripcion;
        if($req->hasFile('img_perfil')){
        $rutaPerfil = $req->file('img_perfil')->store('entrenadores/perfil','public');
        $entrenador->img_perfil = $rutaPerfil;
    }
        if($req->hasFile('img_portada')){
        $rutaPortada = $req->file('img_portada')->store('entrenadores/portada','public');
        $entrenador->img_portada = $rutaPortada;
    }
        $entrenador->save();
        return redirect()->route('entrenador.mostrar');
    }

    function eliminar($id){
        $entrenador = EntrenadorDetalle::findOrFail($id);
        $entrenador -> delete();

        return redirect()->route('entrenador.mostrar');
    }

    public function verPerfil($id){

    $detalle = EntrenadorDetalle::select(
        'entrenador_detalles.*', 
        'personas.nom_persona as nom', 
        'personas.apaterno', 
        'personas.amaterno', 
    )
        ->join('empleados', 'empleados.id', '=', 'entrenador_detalles.empleado_id')
        ->join('personas', 'personas.id', '=', 'empleados.persona_id')->where('entrenador_detalles.id', $id)->firstOrFail();

        $listaHorarios = DB::table('horarios')
        ->where('entrenador_id', $id)
        ->orderBy('id', 'asc')
        ->get();

        return view('entrenador', compact('detalle', 'listaHorarios'));
    }
}
