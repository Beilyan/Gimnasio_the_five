<form action="{{route('membresia.guardar')}}" method="POST">
    @csrf
    <label for="">Nombre</label> <br>
    <input type="text" name="nom_membresia" placeholder="Membresia..." required> <br>

    <label for="">Descripción</label> <br>
    <textarea name="descripcion" placeholder="Esta membresia cubre..." required rows="3"></textarea> <br>

    <label for="">Precio</label> <br>
    <input type="number" min="0"  placeholder="00.00" name="costo" required> <br>

    <label for="">Duracion en meses</label> <br>
    <input type="number" min="0" placeholder="3" name="duracion_meses" required> <br>

    <input type="submit" value="Guardar">
</form>