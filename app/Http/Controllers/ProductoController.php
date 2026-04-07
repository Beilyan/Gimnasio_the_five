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
        $producto->descripcion = $req->descripcion;     
        if($req->hasFile('img_perfil')){
        $rutaPerfil = $req->file('img_perfil')->store('productos/perfil','public');
        $producto->img_perfil = $rutaPerfil;
    }
        if($req->hasFile('img_portada')){
        $rutaPortada = $req->file('img_portada')->store('productos/portada','public');
        $producto->img_portada = $rutaPortada;
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

    public function mostrarUser()
{
    $producto = Producto::select(
        'productos.id as producto_id',
        'productos.cod_producto',
        'productos.nom_producto',
        'productos.precio_venta',
        'productos.img_perfil',
        'productos.img_portada',
        'productos.descripcion',
        'proveedors.nom_proveedor as proveedor'
    )
        ->join('proveedors', 'proveedors.id', '=', 'productos.proveedor_id')
        ->get();

        return view('tienda', compact('producto'));
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
        $producto->descripcion = $req->descripcion;    
        if($req->hasFile('img_perfil')){
        $rutaPerfil = $req->file('img_perfil')->store('productos/perfil','public');
        $producto->img_perfil = $rutaPerfil;
    }
        if($req->hasFile('img_portada')){
        $rutaPortada = $req->file('img_portada')->store('productos/portada','public');
        $producto->img_portada = $rutaPortada;
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

    public function verProducto($id) {

    $producto = Producto::select(
        'productos.*', 
        'proveedors.nom_proveedor as proveedor',
        'proveedors.telefono as contacto_prov',
        'proveedors.correo as correo_prov'
    )
    ->join('proveedors', 'proveedors.id', '=', 'productos.proveedor_id')
    ->where('productos.id', $id)
    ->firstOrFail();

    return view('producto', compact('producto'));
    }

    public function buscar(Request $req) {
        
    $query = $req->get('query');

    $productos = Producto::where('nom_producto', 'LIKE', "%{$query}%")
        ->limit(10)
        ->get();

    return response()->json($productos);
    }
}
