<?php
$host = "sql205.infinityfree.com";   // Host de InfinityFree
$user = "if0_39988467";              // Usuario MySQL
$pass = "XA8LPv736JNX";              // Contraseña MySQL
$db   = "if0_39988467_libros";       // Nombre exacto de la BD

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
} else {
    // echo "✅ Conexión exitosa"; // puedes descomentar para probar
}
?>
