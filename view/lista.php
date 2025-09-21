<?php
// Mostrar errores mientras depuramos
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
        <a href="formulario.php" class="btn-neon">➕ Agregar Libro</a>
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
            <?php if (!empty($libros)) : ?>
                <?php foreach($libros as $fila) : ?>
                <tr>
                    <td><?= $fila["id"] ?></td>
                    <td><?= htmlspecialchars($fila["titulo"]) ?></td>
                    <td><?= htmlspecialchars($fila["autor"]) ?></td>
                    <td><?= $fila["fecha_lectura"] ?? "—" ?></td>
                    <td><?= ($fila["terminado"]) ? "✅ Terminado" : "📖 En progreso" ?></td>
                    <td><?= $fila["ultimo_capitulo"] ?? "—" ?></td>
                    <td>
                        <a href="editar.php?id=<?= $fila["id"] ?>">✏️ Editar</a> |
                        <a href="../controller/libroController.php?eliminar=<?= $fila["id"] ?>" onclick="return confirm('¿Eliminar libro?')">🗑️ Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr><td colspan="7">No hay libros registrados.</td></tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>
