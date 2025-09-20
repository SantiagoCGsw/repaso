<?php
include("conexion.php");

function obtenerLibros() {
    global $conexion;
    $resultado = mysqli_query($conexion, "SELECT * FROM libros");
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function insertarLibro($titulo, $autor) {
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $query = "INSERT INTO libros (titulo, autor) VALUES ('$titulo','$autor')";
    return mysqli_query($conexion, $query);
}

function obtenerLibro($id) {
    global $conexion;
    $query = "SELECT * FROM libros WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    return mysqli_fetch_assoc($resultado);
}

function actualizarLibro($id, $titulo, $autor) {
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $query = "UPDATE libros SET titulo='$titulo', autor='$autor' WHERE id=$id";
    return mysqli_query($conexion, $query);
}

function eliminarLibro($id) {
    global $conexion;
    $query = "DELETE FROM libros WHERE id=$id";
    return mysqli_query($conexion, $query);
}
?>
