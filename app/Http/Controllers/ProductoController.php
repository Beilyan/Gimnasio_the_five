<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Producto;

class ProductoController extends Controller
{
    function nueva(){
        $proveedor = Proveedor::all();
        $ultimo = Producto::orderBy('id','desc')->first();

    if($ultimo){
        $numero = intval(substr($ultimo->cod_producto,1)) + 1;
    }else{
        $numero = 1;
    }
    $codigo = 'P'.str_pad($numero,3,'0',STR_PAD_LEFT);

        return view('formulario_producto', compact('proveedor', 'codigo')); 
    }

    function guardar(Request $req){
        $producto = new Producto();
        $producto->cod_producto = $req->cod_producto;
        $producto->nom_producto = $req->nom_producto;
        $producto->stock = $req->stock;
        $producto->precio_compra = $req->precio_compra;
        $producto->precio_venta = $req->precio_venta;    
        if($req->hasFile('img')){
        $ruta = $req->file('img')->store('productos','public');
        $producto->img = $ruta;
    }
        $producto->proveedor_id = $req->proveedor_id;     

        $producto->save();
        return redirect()->route('producto.mostrar');
    }

    function mostrar(){//Referirce al modelo es referirse a la tabla en bd          
        $producto = Producto::select('productos.*','proveedors.nom_proveedor as nom')->join('proveedors', 'proveedors.id', 'productos.proveedor_id')->get();//simpre get o no lleva
        //Esto es un inner join, tabla aka modelo, X.pk = Y.X.fk
        return view('lista_producto', compact('producto'));
    }

    function editar($id){
        $producto = Producto::findOrFail($id);

        $proveedor = Proveedor::all();

        return view('editar_producto', compact('producto', 'proveedor'));
    }

    function actualizar(Request $req){
        $producto = Producto::findOrFail($req->id);
        $producto->cod_producto = $req->cod_producto;
        $producto->nom_producto = $req->nom_producto;
        $producto->stock = $req->stock;
        $producto->precio_compra = $req->precio_compra;
        $producto->precio_venta = $req->precio_venta;    
        if($req->hasFile('img')){
        $ruta = $req->file('img')->store('productos','public');
        $producto->img = $ruta;
    }
        $producto->proveedor_id = $req->proveedor_id;     

        $producto->save();
        return redirect()->route('producto.mostrar');
    }

    function eliminar($id){
        $producto = Producto::findOrFail($id);
        $producto -> delete();

        return redirect()->route('producto.mostrar');
    }
}
