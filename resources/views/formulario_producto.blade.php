@extends('layouts.app')
@section('content')
<h1>Nuevo producto</h1>
<form action="{{route('producto.guardar')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Codigo de producto</label> <br>
    <input type="text" name="cod_producto" value="{{$codigo}}" readonly> <br>

    <label for="">Nombre</label> <br>
    <input type="text" name="nom_producto" placeholder="Suplemento..." required> <br>

    <label for="">Stock</label> <br>
    <input type="number" name="stock" placeholder="##" required>  <br>

    <label for="">Precio de compra</label> <br>
    <input type="decimal" name="precio_compra" min="0"  placeholder="00.00" required> <br>

    <label for="">Precio de venta</label> <br>
    <input type="decimal" name="precio_venta" min="0"  placeholder="00.00" required> <br>

    <label for="">Imagen</label> <br>
    <input type="file" name="img"> <br>

    <label for="">Proveedor</label> <br>
    <select name="proveedor_id" required>
        @foreach ($proveedor as $item)
            <option value="{{$item->id}}">{{$item->nom_proveedor}}</option>
        @endforeach
    </select> <br>

    <input type="submit" value="Guardar">
</form>
@endsection 