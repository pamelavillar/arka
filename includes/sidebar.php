<?php
  $current_page = isset($_GET['page']) ? $_GET['page'] : 'conceptos';
?>
<div class="sidebar">
  <img src="assets/img/arka_logo.png" class="card-img" alt="arka_logo"> 
  <ul>
    <li><a href="index.php?page=entrada_diaria" class="<?= $current_page == 'entrada_diaria' ? 'active' : '' ?>"><i class="fa-regular fa-calendar-plus"></i>Entrada diaria</a></li>   
    <li><a href="index.php?page=conceptos" class="<?= $current_page == 'conceptos' ? 'active' : '' ?>"><i class="fa-solid fa-list"></i>Conceptos</a></li>
    <li><a href="index.php?page=balance" class="<?= $current_page == 'balance' ? 'active' : '' ?>"><i class="fa-solid fa-chart-simple"></i>Balance</a></li>
    <li><a href="auth/logout.php" class="<?= $current_page == 'logout' ? 'active' : '' ?>"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a></li>
    <li class="bottom"><a href="index.php?page=perfiles" class="<?= $current_page == 'perfiles' ? 'active' : '' ?>"><i class="fa-regular fa-user"></i>Perfiles</a></li>
  </ul>
</div>