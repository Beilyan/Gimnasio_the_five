@extends('layouts.app')
@section('content')
<h1>Editar cliente</h1>
<form action="{{route('cliente.actualizar')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$cliente->id}}">

    <label for="">Código de cliente</label> <br>
    <input type="text" name="cod_cliente" value="{{$cliente->cod_cliente}}" readonly> <br>

    <label for="">Persona</label> <br>
    <select name="persona_id">
        @foreach ($persona as $item)
            <option {{$item->id == $cliente->persona_id ? 'selected' : ''}}  value="{{$item->id}}">{{$item->nom_persona}}</option>
        @endforeach
    </select> <br>

    <input type="submit" value="Guardar" style="margin-top: 5mm">
</form>
@endsection 