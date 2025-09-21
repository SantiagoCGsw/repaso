<?php
// Mostrar errores mientras depuramos
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
            <input type="hidden" name="accion" value="insertar">
            <label>Título:</label>
            <input type="text" name="titulo" placeholder="Título del libro" required>

            <label>Autor:</label>
            <input type="text" name="autor" placeholder="Autor del libro" required>

            <label>Fecha Lectura:</label>
            <input type="date" name="fecha_lectura">

            <label>Estado:</label>
            <select name="terminado">
                <option value="0">En progreso</option>
                <option value="1">Terminado</option>
            </select>

            <label>Último Capítulo:</label>
            <input type="text" name="ultimo_capitulo" placeholder="Último capítulo leído">

            <button type="submit">Registrar Libro</button>
        </form>
        <br>
        <a href="lista.php">⬅ Volver a la lista</a>
    </div>
</body>
</html>
