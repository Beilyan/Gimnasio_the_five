<form action="{{route('persona.actualizar')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$personas->id}}">

    <label for="">Nombres</label>
    <input type="text" name="nom_persona" value="{{$personas->nom_persona}}" required> <br>

    <label for="">Apellido Paterno</label>
    <input type="text" name="apaterno" value="{{$personas->apaterno}}" required> <br>

    <label for="">Apellido Materno</label>
    <input type="text" name="amaterno" value="{{$personas->amaterno}}">  <br>

    <label for="">Fecha de nacimiento</label>
    <input type="date" name="fnac" value="{{$personas->fnac}}" required> <br>

    <label for="">Télefono</label>
    <input type="text" name="telefono" value="{{$personas->telefono}}" required> <br>


    <label for="">Correo electronico</label>
    <input type="text" name="correo" value="{{$personas->correo}}" required> <br>

    <label for="">Sexo</label>
    <select name="sexo" required>
        <option value="M" {{ $personas->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
        <option value="F" {{ $personas->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
    </select>
    <br>

    <input type="submit" value="Guardar">
</form>