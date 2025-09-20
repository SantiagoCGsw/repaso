<?php
include("conexion.php");

$resultado = mysqli_query($conexion, "SELECT * FROM libros");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Libros</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>📚 Mis Libros</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Fecha de lectura</th>
            <th>Terminado</th>
            <th>Último capitulo</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila["id"]; ?></td>
                <td><?php echo $fila["titulo"]; ?></td>
                <td><?php echo $fila["fecha_lectura"]; ?></td>
                <td><?php echo $fila["terminado"] ? "✅ Sí" : "❌ No"; ?></td>
                <td><?php echo $fila["ultimo_capitulo"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
