<?php
$conexion = mysqli_connect("localhost", "root", "Swolt", "biblioteca", 3307);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
