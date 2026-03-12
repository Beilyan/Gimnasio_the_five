@extends('layouts.app')
@section('content')
<h1>Editar membresia</h1>
<form action="{{route('membresia.actualizar')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$membresia->id}}">

    <label for="">Nombre</label> <br>
    <input type="text" name="nom_membresia" value="{{$membresia->nom_membresia}}" placeholder="Membresia..." required> <br>

    <label for="">Descripción</label> <br>
    <textarea name="descripcion" placeholder="Esta membresia cubre..." required rows="3">{{$membresia->descripcion}}</textarea> <br>

    <label for="">Precio</label> <br>
    <input type="number" min="0" value="{{$membresia->costo}}"  placeholder="00.00" name="costo" required> <br>

    <label for="">Duracion en meses</label> <br>
    <input type="number" min="0" value="{{$membresia->duracion_meses}}" placeholder="3" name="duracion_meses" required> <br>

    <input type="submit" value="Guardar">
</form>
@endsection 