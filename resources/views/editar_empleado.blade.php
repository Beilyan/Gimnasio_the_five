<form action="{{route('empleado.actualizar')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$empleado->id}}">

    <label for="">Codigo de empleado</label> <br>
    <input type="text" name="cod_empleado" value="{{$empleado->cod_empleado}}" placeholder="E001" required> <br>

    <label for="">Persona</label> <br>
    <select name="persona_id">
        @foreach ($persona as $item)
            <option {{$item->id == $empleado->persona_id ? 'selected' : ''}} value="{{$item->id}}">{{$item->nom_persona}}</option>
        @endforeach
    </select> <br>

    <label for="">Rol</label> <br>
    <select name="rol" required>
        <option value="Encargado" {{ $empleado->rol == 'Encargado' ? 'selected' : '' }}>Encargado</option>
        <option value="Entrenador" {{ $empleado->rol == 'Entrenador' ? 'selected' : '' }}>Entrenador</option>
    </select> <br>

    <input type="submit" value="Guardar">
</form>