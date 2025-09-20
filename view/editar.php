<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location: login.php");

include("../model/libroModel.php");
$libro = obtenerLibro($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
<div class="container">
    <h1>✏️ Editar Libro</h1>
    <form action="../controller/libroController.php" method="POST">
        <input type="hidden" name="accion" value="editar">
        <input type="hidden" name="id" value="<?= $libro["id"] ?>">

        <input type="text" name="titulo" value="<?= $libro["titulo"] ?>" required>
        <input type="text" name="autor" value="<?= $libro["autor"] ?>" required>
        <input type="date" name="fecha_lectura" value="<?= $libro["fecha_lectura"] ?>">
        <select name="terminado">
            <option value="0" <?= $libro["terminado"]==0?'selected':'' ?>>En progreso</option>
            <option value="1" <?= $libro["terminado"]==1?'selected':'' ?>>Terminado</option>
        </select>
        <input type="text" name="ultimo_capitulo" value="<?= $libro["ultimo_capitulo"] ?>">
        <button type="submit">Actualizar</button>
    </form>
    <a href="lista.php">⬅ Volver a la lista</a>
</div>
</body>
</html>
