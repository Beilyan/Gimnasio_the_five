@extends('layouts.app')
@section('content')
<h1>Nuevo proveedor</h1>
<form action="{{route('proveedor.guardar')}}" method="POST">
    @csrf
    <label for="">Nombre</label> <br>
    <input type="text" name="nom_proveedor" placeholder="Almacenes Guerrero" required> <br>

    <label for="">Teléfono</label> <br>
    <input type="text" name="telefono" placeholder="##-###-###-####" required> <br>

    <label for="">Correo</label> <br>
    <input type="text" name="correo" placeholder="Correo@gmail.com" required> <br>

    <label for="">Descripción</label> <br>
    <textarea name="descripcion" placeholder="Este proveedor entrega en..." required rows="3"></textarea> <br>

    <input type="submit" value="Guardar">
</form>
@endsection 