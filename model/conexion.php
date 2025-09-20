<?php
$host = "sql205.infinityfree.com";
$user = "if0_39988467";
$pass = "XA8LPv736JNX";
$db   = "if0_39988467_libros";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
}
?>
