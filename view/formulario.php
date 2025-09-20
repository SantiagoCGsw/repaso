<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<div class="container">
    <h1>📚 Registrar Libro</h1>
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
    <a href="lista.php">⬅ Volver a la lista</a>
</div>
</body>
</html>
