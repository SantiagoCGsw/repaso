function insertarLibro($titulo, $autor, $fecha_lectura, $terminado, $ultimo_capitulo) {
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $autor = mysqli_real_escape_string($conexion, $autor);
    $fecha_lectura = mysqli_real_escape_string($conexion, $fecha_lectura);
    $terminado = intval($terminado);
    $ultimo_capitulo = mysqli_real_escape_string($conexion, $ultimo_capitulo);

    $query = "INSERT INTO libros (titulo, autor, fecha_lectura, terminado, ultimo_capitulo)
              VALUES ('$titulo','$autor','$fecha_lectura',$terminado,'$ultimo_capitulo')";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) die("Error al insertar libro: " . mysqli_error($conexion));
    return $resultado;
}
