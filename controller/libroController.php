<?php
include("../model/libroModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"]) && $_POST["accion"] === "insertar") {
        insertarLibro($_POST["titulo"], $_POST["autor"]);
        header("Location: ../view/lista.php");
    } elseif (isset($_POST["accion"]) && $_POST["accion"] === "editar") {
        actualizarLibro($_POST["id"], $_POST["titulo"], $_POST["autor"]);
        header("Location: ../view/lista.php");
    }
}

if (isset($_GET["eliminar"])) {
    eliminarLibro($_GET["eliminar"]);
    header("Location: ../view/lista.php");
}
?>
