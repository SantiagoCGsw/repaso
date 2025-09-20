<?php
include("conexion.php");

// Recibir datos del formulario
$titulo = $_POST["titulo"];
$fecha_lectura = $_POST["fecha_lectura"];
$terminado = $_POST["terminado"];
$ultimo_capitulo = $_POST["ultimo_capitulo"];

// Preparar consulta
$query = "INSERT INTO libros (titulo, fecha_lectura, terminado, ultimo_capitulo) 
          VALUES ('$titulo', '$fecha_lectura', '$terminado', '$ultimo_capitulo')";

if (mysqli_query($conexion, $query)) {
    echo "✅ Libro registrado correctamente.";
    header("Location: listar.php"); // Redirige a la lista
    exit;
} else {
    echo "❌ Error: " . mysqli_error($conexion);
}
?>
