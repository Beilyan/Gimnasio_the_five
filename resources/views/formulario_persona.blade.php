<form action="" method="POST">
    @csrf
    <label for="">Nombres</label>
    <input type="text" name="nom_persona" required> <br>

    <label for="">Apellido Paterno</label>
    <input type="text" name="apaterno" required> <br>

    <label for="">Apellido Materno</label>
    <input type="text" name="amaterno"> <br>

    <label for="">Fecha de nacimiento</label>
    <input type="date" name="fnac" required> <br>

    <label for="">Correo electronico</label>
    <input type="text" name="correo" required> <br>

    <label for="">Sexo</label>
    <select name="sexo" required>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select> <br>

    <input type="submit" value="Guardar">
</form>