<div class="user-card">
  <i class="fa-solid fa-circle-user user-icon"></i>
  <h3>Bienvenido de vuelta, <?= htmlspecialchars($_SESSION['user_name']); ?></h3>
  <div class="user-actions">
    <i class="fa-solid fa-pen-to-square"></i>
    <div class="notification-wrapper">
      <i class="fa-solid fa-bell"></i>
      <span class="notification-count">2</span>
      <div class="notifications-panel"></div>
    </div>
  </div>
</div>