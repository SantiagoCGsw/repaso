<?php
// Mostrar errores mientras depuramos
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../model/libroModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"])) {
        if ($_POST["accion"] === "insertar") {
            $titulo = $_POST["titulo"] ?? '';
            $autor = $_POST["autor"] ?? '';
            if (!empty($titulo) && !empty($autor)) {
                insertarLibro($titulo, $autor);
            }
        } elseif ($_POST["accion"] === "editar") {
            $id = $_POST["id"] ?? '';
            $titulo = $_POST["titulo"] ?? '';
            $autor = $_POST["autor"] ?? '';
            if (!empty($id) && !empty($titulo) && !empty($autor)) {
                actualizarLibro($id, $titulo, $autor);
            }
        }
        header("Location: ../view/lista.php");
        exit();
    }
}

if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    if (!empty($id)) {
        eliminarLibro($id);
    }
    header("Location: ../view/lista.php");
    exit();
}
