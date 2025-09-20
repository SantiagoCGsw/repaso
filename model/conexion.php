<?php
$host = "sql205.infinityfree.com";   // MySQL Hostname
$user = "if0_39988467";              // MySQL Username
$pass = "XA8LPv736JNX";              // MySQL Password
$db   = "if0_39988467_XXX";          // Reemplaza XXX por el nombre exacto de tu BD

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
