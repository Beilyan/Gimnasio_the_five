@extends('layouts.app')
@section('content')
<h1>Proveedor</h1>
<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($proveedor as $fila) 
        <tr>
            <td>{{$fila->nom_proveedor}}</td>
            <td>{{$fila->telefono}}</td>
            <td>{{$fila->correo}}</td>
            <td>{{$fila->descripcion}}</td>
            <td><a href="{{route('proveedor.editar', $fila->id)}}">Editar</a></td>
            <td><a href="{{route('proveedor.eliminar', $fila->id)}}">Eliminar</a></td>
    @endforeach
</table>

<a href="/proveedor/nueva"><button type="button">Nuevo proveedor</button></a>
@endsection 