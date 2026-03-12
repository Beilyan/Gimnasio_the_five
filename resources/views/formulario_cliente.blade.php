@extends('layouts.app')
@section('content')
<h1>Nuevo cliente</h1>
<form action="{{route('cliente.guardar')}}" method="POST">
    @csrf
    <label for="">Código de cliente</label> <br>
    <input type="text" name="cod_cliente" value="{{$codigo}}" readonly> <br>

    <label for="">Persona</label> <br>
    <select name="persona_id">
        @foreach ($persona as $item)
            <option value="{{$item->id}}">{{$item->nom_persona}}</option>
        @endforeach
    </select> <br>

    <input type="submit" value="Guardar" style="margin-top: 5mm">
</form>
@endsection 