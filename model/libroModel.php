<?php
include("conexion.php");

function obtenerLibros() {
    global $conexion;
    $resultado = mysqli_query($conexion, "SELECT * FROM libros");
    if (!$resultado) die("Error al obtener libros: " . mysqli_error($conexion));
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function insertarLibro($titulo, $autor, $fecha_lectura = null, $terminado = 0, $ultimo_capitulo = null) {
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $fecha_lectura = $fecha_lectura ? "'".mysqli_real_escape_string($conexion, $fecha_lectura)."'" : "NULL";
    $ultimo_capitulo = $ultimo_capitulo ? "'".mysqli_real_escape_string($conexion, $ultimo_capitulo)."'" : "NULL";
    $terminado = intval($terminado);

    $query = "INSERT INTO libros (titulo, autor, fecha_lectura, terminado, ultimo_capitulo)
              VALUES ('$titulo', '$autor', $fecha_lectura, $terminado, $ultimo_capitulo)";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) die("Error al insertar libro: ".mysqli_error($conexion));
    return $resultado;
}

function actualizarLibro($id, $titulo, $autor, $fecha_lectura = null, $terminado = 0, $ultimo_capitulo = null) {
    global $conexion;
    $id = intval($id);
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $fecha_lectura = $fecha_lectura ? "'".mysqli_real_escape_string($conexion, $fecha_lectura)."'" : "NULL";
    $ultimo_capitulo = $ultimo_capitulo ? "'".mysqli_real_escape_string($conexion, $ultimo_capitulo)."'" : "NULL";
    $terminado = intval($terminado);

    $query = "UPDATE libros SET titulo='$titulo', autor='$autor', fecha_lectura=$fecha_lectura,
              terminado=$terminado, ultimo_capitulo=$ultimo_capitulo WHERE id=$id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) die("Error al actualizar libro: ".mysqli_error($conexion));
    return $resultado;
}

function obtenerLibro($id) {
    global $conexion;
    $id = intval($id);
    $resultado = mysqli_query($conexion, "SELECT * FROM libros WHERE id=$id");
    if (!$resultado) die("Error al obtener libro: ".mysqli_error($conexion));
    return mysqli_fetch_assoc($resultado);
}

function eliminarLibro($id) {
    global $conexion;
    $id = intval($id);
    $resultado = mysqli_query($conexion, "DELETE FROM libros WHERE id=$id");
    if (!$resultado) die("Error al eliminar libro: ".mysqli_error($conexion));
    return $resultado;
}
?>
