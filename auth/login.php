<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if ($user === 'admin' && $pass === '123') {
    $_SESSION['user_name'] = 'Guillermo Calderón';
    header('Location: ../index.php');
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
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <form method="POST">
    <h2>Iniciar sesión</h2>
    <?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>
    <input type="text" name="username" placeholder="Usuario" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit" class="btn btn-yellow">Entrar</button>
  </form>
</body>
</html>