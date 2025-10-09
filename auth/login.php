<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if ($user === 'admin' && $pass === '123') {
    $_SESSION['user_name'] = 'Guillermo Calderón';
    header('Location: escoger_perfil.php');
    exit();
  } else {
    $error = "Usuario o contraseña incorrectos.";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - Arka</title>
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
  <form method="POST">
    <img src="../assets/img/arka_logo.png" alt="Logo Arka" class="logo-top">
    <h2>Iniciar sesión</h2>
    <?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
    <input type="text" name="username" placeholder="Usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <a href="recuperar_cuenta.php" class="link-reset">¿Olvidaste tu contraseña?</a>
    <button type="submit" class="btn btn-oscuro">Entrar</button>
    <p>¿No tienes una cuenta? <a href="registro.php" class="btn-create">Crea una nueva aquí!</a></p>
    <div class="logo-bottom-container">
      <p>Desarrollado por:</p>
      <img src="../assets/img/bugbusters.png" alt="Logo Empresa" class="logo-bottom">
    </div>
  </form>
</body>
</html>