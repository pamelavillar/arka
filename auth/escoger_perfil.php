

<?php
session_start();

// PROVISIONAL
$profiles = [
  ['name' => 'Guillermo', 'icon' => '../assets/img/icono_usuario2.png', 'color' => '#5F7A86'],
  ['name' => 'Lucía', 'icon' => '../assets/img/icono_usuario1.png', 'color' => '#8E6C88'],
  ['name' => 'Carlos', 'icon' => '../assets/img/icono_usuario2.png', 'color' => '#6C8E7B'],
];

// perfil corresponde a $_SESSION['user_name']
if (isset($_GET['profile'])) {
  $_SESSION['user_name'] = $_GET['profile'];
  header('Location: ../index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Escoger perfil - Arka</title>
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body class="perfil-page">
  <h1>¿Quién está usando Arka?</h1>
  <div class="perfil-container">
    <?php foreach ($profiles as $p): ?>
      <a class="perfil-card" href="?profile=<?= urlencode($p['name']) ?>" style="background-color: <?= $p['color'] ?>;">
        <img class="perfil-icon" src="<?= $p['icon'] ?>" alt="Icono de <?= htmlspecialchars($p['name']) ?>">
        <div class="perfil-name"><?= htmlspecialchars($p['name']) ?></div>
      </a>
    <?php endforeach; ?>
  </div>
</body>
</html>