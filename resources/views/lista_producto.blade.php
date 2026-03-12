@extends('layouts.app')
@section('content')
<h1>Producto</h1>
<table class="table">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Precio de compra</th>
        <th>Precio de venta</th>
        <th>Imagen</th>
        <th>Proveedor</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($producto as $fila) 
        <tr>
            <td>{{$fila->cod_producto}}</td>
            <td>{{$fila->nom_producto}}</td>
            <td>{{$fila->stock}}</td>
            <td>{{$fila->precio_compra}}</td>
            <td>{{$fila->precio_venta}}</td>
            <td><img src="{{ asset('storage/'.$fila->img) }}" width="80"></td>
            <td>{{$fila->nom}}</td>
            <td><a href="{{route('producto.editar', $fila->id)}}">Editar</a></td>
            <td><a href="{{route('producto.eliminar', $fila->id)}}">Eliminar</a></td>
    @endforeach
</table>

<a href="/producto/nueva"><button type="button">Nuevo producto</button></a>
@endsection 