@extends('layouts.app')
@section('content')
<h1>Clientes</h1>
<table class="table">
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($cliente as $fila) 
        <tr>
            <td>{{$fila->cod_cliente}}</td>
            <td>{{$fila->nom}}</td>
            <td>{{$fila->paterno}}</td>
            <td>{{$fila->materno}}</td>
            <td><a href="{{route('cliente.editar', $fila->id)}}">Editar</a></td>
            <td><a href="{{route('cliente.eliminar', $fila->id)}}">Eliminar</a></td>
    @endforeach
</table>

<a href="/cliente/nueva"><button type="button">Nuevo cliente</button></a>
@endsection 