<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Duracion en meses</th>
        <th>Acciones</th>
    </tr> 
    @foreach ($membresia as $fila) 
        <tr>
            <td>{{$fila->nom_membresia}}</td>
            <td>{{$fila->descripcion}}</td>
            <td>{{$fila->costo}}</td>
            <td>{{$fila->duracion_meses}}</td>
            <td><a href="{{route('membresia.editar', $fila->id)}}">Editar</a></td>
    @endforeach
</table>

<a href="/membresia/nueva"><button type="button">Nueva membresia</button></a>