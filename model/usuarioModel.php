<?php
include("conexion.php");

function verificarUsuario($usuario, $clave) {
    global $conexion;
    $usuario = mysqli_real_escape_string($conexion, $usuario);
    $clave = md5($clave); // Considerar password_hash en producción
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
    $resultado = mysqli_query($conexion, $query);
    return mysqli_fetch_assoc($resultado);
}
?>
