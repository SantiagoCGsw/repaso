<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location: view/login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel - Sistema Libros</title>
  <link rel="stylesheet" href="public/estilos.css">
</head>
<body class="neon-body">
  <header>
    <h1 class="neon-text">Bienvenido, <?= $_SESSION["usuario"] ?> 🚀</h1>
  </header>
  <section class="neon-box">
    <p>Desde aquí puedes gestionar tus libros.</p>
    <a href="view/formulario.php" class="btn-neon">➕ Agregar Libro</a>
    <a href="view/lista.php" class="btn-neon">📋 Ver Lista</a>
    <a href="logout.php" class="btn-neon">🚪 Cerrar Sesión</a>
  </section>
</body>
</html>
