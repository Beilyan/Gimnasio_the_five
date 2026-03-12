@extends('layouts.app')
@section('content')
<h1>Editar producto</h1>
<form action="{{route('producto.actualizar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$producto->id}}">

    <label for="">Codigo de producto</label> <br>
    <input type="text" name="cod_producto" value="{{$producto->cod_producto}}" readonly> <br>

    <label for="">Nombre</label> <br>
    <input type="text" name="nom_producto" value="{{$producto->nom_producto}}" placeholder="Suplemento..." required> <br>

    <label for="">Stock</label> <br>
    <input type="number" name="stock" value="{{$producto->stock}}" placeholder="##" required>  <br>

    <label for="">Precio de compra</label> <br>
    <input type="decimal" name="precio_compra" min="0" value="{{$producto->precio_compra}}"  placeholder="00.00" required> <br>

    <label for="">Precio de venta</label> <br>
    <input type="decimal" name="precio_venta" min="0" value="{{$producto->precio_venta}}" placeholder="00.00" required> <br>

    <label for="">Imagen actual</label> <br>
    @if($producto->img)
    <img src="{{ asset('storage/'.$producto->img) }}" width="120"><br>
    @endif
    <label for="">Nueva imagen</label> <br>
    <input type="file" name="img"> <br>

    <label for="">Proveedor</label> <br>
    <select name="proveedor_id" required>
        @foreach ($proveedor as $item)
            <option {{$item->id == $producto->proveedor_id ? 'selected' : ''}} value="{{$item->id}}">{{$item->nom_proveedor}}</option>
        @endforeach
    </select> <br>

    <input type="submit" value="Guardar">
</form>
@endsection 