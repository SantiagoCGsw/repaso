<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $clave = $_POST["clave"] ?? "";

    // 🔑 Credenciales de prueba
    if ($usuario === "admin" && $clave === "1234") {
        $_SESSION["usuario"] = $usuario;
        header("Location: ../index.php");
        exit;
    } else {
        $error = "Usuario o clave incorrectos.";
    }
}
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
  <form method="POST" class="neon-box">
    <input type="text" name="usuario" placeholder="Usuario" required><br><br>
    <input type="password" name="clave" placeholder="Clave" required><br><br>
    <button type="submit" class="btn-neon">Entrar</button>
    <?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
  </form>
</body>
</html>
