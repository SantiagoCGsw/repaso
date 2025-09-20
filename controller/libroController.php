<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../model/libroModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"])) {
        if ($_POST["accion"] === "insertar") {
            insertarLibro($_POST["titulo"], $_POST["autor"]);
        } elseif ($_POST["accion"] === "editar") {
            actualizarLibro($_POST["id"], $_POST["titulo"], $_POST["autor"]);
        }
        header("Location: ../view/lista.php");
        exit();
    }
}

if (isset($_GET["eliminar"])) {
    eliminarLibro($_GET["eliminar"]);
    header("Location: ../view/lista.php");
    exit();
}
?>
