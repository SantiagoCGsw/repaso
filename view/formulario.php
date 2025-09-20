<?php
// formulario.php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
    <div class="container">
        <h1>📚 Registrar Libro</h1>
        <form action="../controller/libroController.php" method="POST">
            <!-- IMPORTANTE: hidden para que el controller sepa que es insertar -->
            <input type="hidden" name="accion" value="insertar">

            <label>Título:</label>
            <input type="text" name="titulo" placeholder="Título del libro" required>

            <label>Autor:</label>
            <input type="text" name="autor" placeholder="Autor del libro" required>

            <label>Fecha de lectura:</label>
            <input type="date" name="fecha_lectura">

            <label>Estado:</label>
            <select name="terminado">
                <option value="0">En progreso</option>
                <option value="1">Terminado</option>
            </select>

            <label>Último capítulo:</label>
            <input type="text" name="ultimo_capitulo" placeholder="Último capítulo leído">

            <button type="submit">Registrar Libro</button>
        </form>
        <br>
        <a href="lista.php">⬅ Volver a la lista</a>
    </div>
</body>
</html>
