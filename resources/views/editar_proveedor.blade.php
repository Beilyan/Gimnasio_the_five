<form action="{{route('proveedor.actualizar')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$proveedor->id}}">

    <label for="">Nombre</label> <br>
    <input type="text" name="nom_proveedor" value="{{$proveedor->nom_proveedor}}"  required> <br>

    <label for="">Teléfono</label> <br>
    <input type="text" name="telefono" value="{{$proveedor->telefono}}" required> <br>

    <label for="">Correo</label> <br>
    <input type="text" name="correo" value="{{$proveedor->correo}}" required> <br>

    <label for="">Descripción</label> <br>
    <textarea name="descripcion" required rows="3">{{$proveedor->descripcion}}</textarea> <br>

    <input type="submit" value="Guardar">
</form>