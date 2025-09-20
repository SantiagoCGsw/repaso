<?php include("../model/conexion.php"); ?>
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
            <input type="text" name="titulo" placeholder="Título del libro" required>
            <input type="date" name="fecha_lectura">
            <select name="terminado">
                <option value="0">En progreso</option>
                <option value="1">Terminado</option>
            </select>
            <input type="text" name="ultimo_capitulo" placeholder="Último capítulo leído">
            <input type="submit" name="registrar" value="Registrar Libro">
        </form>
    </div>
</body>
</html>
