<?php
include("../model/libroModel.php");
$libros = obtenerLibros();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="../public/estilos.css">
</head>
<body>
    <div class="container">
        <h1>📖 Lista de Libros</h1>
        <?php if (count($libros) > 0) : ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Fecha Lectura</th>
                <th>Estado</th>
                <th>Último Capítulo</th>
                <th>Acciones</th>
            </tr>
            <?php foreach($libros as $fila) : ?>
                <tr>
                    <td><?= $fila["id"] ?></td>
                    <td><?= $fila["titulo"] ?></td>
                    <td><?= $fila["autor"] ?></td>
                    <td><?= $fila["fecha_lectura"] ?? "—" ?></td>
                    <td><?= $fila["terminado"] ? "✅ Terminado" : "📖 En progreso" ?></td>
                    <td><?= $fila["ultimo_capitulo"] ?? "—" ?></td>
                    <td>
                        <a href="editar.php?id=<?= $fila['id'] ?>">✏️ Editar</a> |
                        <a href="../controller/libroController.php?eliminar=<?= $fila['id'] ?>" onclick="return confirm('¿Eliminar este libro?')">🗑️ Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php else : ?>
            <p>No hay libros registrados.</p>
        <?php endif; ?>
    </div>
</body>
</html>
