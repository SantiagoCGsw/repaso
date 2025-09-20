<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../model/libroModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST["accion"] ?? "";
    if ($accion === "insertar") {
        insertarLibro(
            $_POST["titulo"],
            $_POST["autor"],
            $_POST["fecha_lectura"] ?? null,
            $_POST["terminado"] ?? 0,
            $_POST["ultimo_capitulo"] ?? null
        );
    } elseif ($accion === "editar") {
        actualizarLibro(
            $_POST["id"],
            $_POST["titulo"],
            $_POST["autor"],
            $_POST["fecha_lectura"] ?? null,
            $_POST["terminado"] ?? 0,
            $_POST["ultimo_capitulo"] ?? null
        );
    }
    header("Location: ../view/lista.php");
    exit();
}

if (isset($_GET["eliminar"])) {
    eliminarLibro($_GET["eliminar"]);
    header("Location: ../view/lista.php");
    exit();
}
?>
