<?php
session_start();
include("../model/usuarioModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? '';
    $clave = $_POST["clave"] ?? '';

    $datos = verificarUsuario($usuario, $clave);

    if ($datos) {
        $_SESSION["usuario"] = $datos["usuario"];
        header("Location: ../public/index.php");
        exit();
    } else {
        header("Location: ../view/login.php?error=1");
        exit();
    }
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: ../view/login.php");
    exit();
}
?>
