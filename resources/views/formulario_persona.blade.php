<form action="{{route('persona.guardar')}}" method="POST">
    @csrf
    <label for="">Nombres</label> <br>
    <input type="text" name="nom_persona" placeholder="Nombre o nombres" required> <br>

    <label for="">Apellido Paterno</label> <br>
    <input type="text" name="apaterno" placeholder="Primer apellido" required> <br>

    <label for="">Apellido Materno</label> <br>
    <input type="text" name="amaterno" placeholder="Segundo apellido">  <br>

    <label for="">Fecha de nacimiento</label> <br>
    <input type="date" name="fnac" required> <br>

    <label for="">Télefono</label> <br>
    <input type="text" name="telefono" placeholder="##-###-###-####" required> <br>

    <label for="">Correo electronico</label> <br>
    <input type="text" name="correo" placeholder="Correo@gmail.com" required> <br>

    <label for="">Sexo</label> <br>
    <select name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select> <br>

    <input type="submit" value="Guardar">
</form>