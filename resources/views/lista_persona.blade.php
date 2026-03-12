@extends('layouts.app')
@section('content')
<table>
    <tr>
        <th>Nombres</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Fecha de nacimiento</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Sexo</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($personas as $fila) 
        <tr>
            <td>{{$fila->nom_persona}}</td>
            <td>{{$fila->apaterno}}</td>
            <td>{{$fila->amaterno}}</td>
            <td>{{$fila->fnac}}</td>
            <td>{{$fila->telefono}}</td>
            <td>{{$fila->correo}}</td>
            <td>{{$fila->sexo}}</td>
            <td><a href="{{route('persona.editar', $fila->id)}}">Editar</a></td>
    @endforeach
</table>

<a href="/persona/nueva"><button type="button">Nueva persona</button></a>
@endsection 