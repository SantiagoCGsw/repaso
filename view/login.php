<?php
session_start();
$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../public/estilos.css">
</head>
<body class="neon-body">
  <h2 class="neon-text">🔑 Iniciar Sesión</h2>
  <form method="POST" action="../controller/usuarioController.php" class="neon-box">
    <input type="text" name="usuario" placeholder="Usuario" required><br><br>
    <input type="password" name="clave" placeholder="Clave" required><br><br>
    <button type="submit" class="btn-neon">Entrar</button>
    <?php if ($error) echo "<p style='color:red'>Usuario o clave incorrectos.</p>"; ?>
  </form>
</body>
</html>
