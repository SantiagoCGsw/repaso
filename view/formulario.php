<form action="../controller/libroController.php" method="POST">
    <input type="hidden" name="accion" value="insertar">
    <input type="text" name="titulo" placeholder="Título del libro" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="date" name="fecha_lectura">
    <select name="terminado">
        <option value="0">En progreso</option>
        <option value="1">Terminado</option>
    </select>
    <input type="text" name="ultimo_capitulo" placeholder="Último capítulo leído">
    <button type="submit">Registrar Libro</button>
</form>
