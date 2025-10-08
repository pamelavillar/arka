<?php
session_start();

if (!isset($_SESSION['user_name'])) {
  $_SESSION['user_name'] = 'Guillermo Calderón';
}

$page = $_GET['page'] ?? 'conceptos'; 
$valid_pages = ['entrada_diaria', 'conceptos', 'balance', 'perfiles'];

if (!in_array($page, $valid_pages)) {
  $page = 'conceptos';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arka</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <?php include 'includes/sidebar.php'; ?>

  <div class="main">
    <?php include 'includes/user-card.php'; ?>
    <?php include "pages/$page.php"; ?>
  </div>

  <script src="assets/js/main.js"></script>
</body>
</html>