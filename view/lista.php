<?php
include("../model/conexion.php");
$resultado = mysqli_query($conexion, "SELECT * FROM libros");
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
        <table>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Fecha Lectura</th>
                <th>Estado</th>
                <th>Último Capítulo</th>
            </tr>
            <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $fila["id"]; ?></td>
                    <td><?php echo $fila["titulo"]; ?></td>
                    <td><?php echo $fila["fecha_lectura"] ?? "—"; ?></td>
                    <td><?php echo $fila["autor"]; ?></td>
                    <td><?php echo $fila["terminado"] ? "✅ Terminado" : "📖 En progreso"; ?></td>
                    <td><?php echo $fila["ultimo_capitulo"]; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
