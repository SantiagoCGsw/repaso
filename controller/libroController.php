<?php
include("../model/libroModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["accion"])) {
    if ($_POST["accion"] === "insertar") {
        insertarLibro(
            $_POST["titulo"],
            $_POST["autor"],
            $_POST["fecha_lectura"] ?? null,
            $_POST["terminado"] ?? 0,
            $_POST["ultimo_capitulo"] ?? null
        );
    } elseif ($_POST["accion"] === "editar") {
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
