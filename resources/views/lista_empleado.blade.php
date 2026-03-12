@extends('layouts.app')
@section('content')
<h1>Empleados</h1>
<table class="table">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($empleado as $fila) 
        <tr>
            <td>{{$fila->cod_empleado}}</td>
            <td>{{$fila->nom}}</td>
            <td>{{$fila->paterno}}</td>
            <td>{{$fila->materno}}</td>
            <td>{{$fila->rol}}</td>
            <td><a href="{{route('empleado.editar', $fila->id)}}">Editar</a></td>
            <td><a href="{{route('empleado.eliminar', $fila->id)}}">Eliminar</a></td>
    @endforeach
</table>

<a href="/empleado/nueva"><button type="button">Nuevo empleado</button></a>
@endsection 