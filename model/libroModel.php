<?php
include("conexion.php");

// Mostrar errores (temporal)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function obtenerLibros() {
    global $conexion;
    $resultado = mysqli_query($conexion, "SELECT * FROM libros");
    if (!$resultado) {
        die("Error al obtener libros: " . mysqli_error($conexion));
    }
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function insertarLibro($titulo, $autor) {
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $query = "INSERT INTO libros (titulo, autor) VALUES ('$titulo','$autor')";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Error al insertar libro: " . mysqli_error($conexion));
    }
    return $resultado;
}

function obtenerLibro($id) {
    global $conexion;
    $id = intval($id); // asegurar que sea número
    $query = "SELECT * FROM libros WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Error al obtener libro: " . mysqli_error($conexion));
    }
    return mysqli_fetch_assoc($resultado);
}

function actualizarLibro($id, $titulo, $autor) {
    global $conexion;
    $id = intval($id);
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $query = "UPDATE libros SET titulo='$titulo', autor='$autor' WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Error al actualizar libro: " . mysqli_error($conexion));
    }
    return $resultado;
}

function eliminarLibro($id) {
    global $conexion;
    $id = intval($id);
    $query = "DELETE FROM libros WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Error al eliminar libro: " . mysqli_error($conexion));
    }
    return $resultado;
}
?>
