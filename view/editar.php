<?php
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
    <header><h1>✏️ Editar Libro</h1></header>

    <section>
        <form action="../controller/libroController.php" method="POST">
            <input type="hidden" name="accion" value="editar">
            <input type="hidden" name="id" value="<?= $libro["id"] ?>">
            
            <label>Título:</label>
            <input type="text" name="titulo" value="<?= $libro["titulo"] ?>" required>
            
            <label>Autor:</label>
            <input type="text" name="autor" value="<?= $libro["autor"] ?>" required>
            
            <button type="submit">Actualizar</button>
        </form>
    </section>

    <footer>
        <a href="lista.php">⬅ Volver a la lista</a>
    </footer>
</body>
</html>
