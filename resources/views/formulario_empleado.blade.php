@extends('layouts.app')
@section('content')
<h1>Nuevo empleado</h1>
<form action="{{route('empleado.guardar')}}" method="POST">
    @csrf
    <label for="">Código de empleado</label> <br>
    <input type="text" name="cod_empleado" value="{{$codigo}}" readonly> <br>

    <label for="">Persona</label> <br>
    <select name="persona_id">
        @foreach ($persona as $item)
            <option value="{{$item->id}}">{{$item->nom_persona}}</option>
        @endforeach
    </select> <br>

    <label for="">Rol</label> <br>
    <select name="rol" required>
        <option value="Encargado">Encargado</option>
        <option value="Entrenador">Entrenador</option>
    </select> <br>

    <input type="submit" value="Guardar">
</form>
@endsection 