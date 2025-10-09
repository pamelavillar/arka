<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cuenta - Arka</title>
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body class="registro-page">
  <div class="registro-container">
    <div class="registro-logo-column">
      <img src="../assets/img/arka_logo.png" alt="Logo superior Arka" class="registro-logo1">
      <img src="../assets/img/bugbusters.png" alt="Logo inferior Arka" class="registro-logo2">
    </div>
    <form id="registroForm" class="registro-form">
      <h2>Crear una nueva cuenta</h2>

      <!-- DATOS GENERALES -->
      <div class="registro-grid">
        <div class="registro-group">
          <label for="email">Correo electrónico</label>
          <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
        </div>
        <div class="registro-group">
          <label for="telefono">Teléfono</label>
          <div class="registro-tel">
            <span class="registro-prefijo">+51</span>
            <input type="tel" id="telefono" name="telefono" placeholder="987654321" required>
          </div>
        </div>
      </div>

      <!-- CREDENCIALES -->
      <div class="registro-grid">
        <div class="registro-group">
          <label for="password">Contraseña</label>
          <div class="registro-password">
            <input type="password" id="password" name="password" placeholder="********" required>
            <button type="button" class="registro-toggle" onclick="togglePassword('password', this)">👁</button>
          </div>
        </div>
        <div class="registro-group">
          <label for="confirmPassword">Confirmar contraseña</label>
          <div class="registro-password">
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="********" required>
            <button type="button" class="registro-toggle" onclick="togglePassword('confirmPassword', this)">👁</button>
          </div>
        </div>
      </div>

      <!-- ADMINISTRADOR -->
      <div class="registro-grid">
        <div class="registro-group">
          <label for="adminNombre">Nombre del administrador</label>
          <input type="text" id="adminNombre" name="adminNombre" pattern="[A-Za-z ]+" placeholder="Nombre completo" required>
        </div>
        <div class="registro-group">
          <label for="adminNacimiento">Fecha de nacimiento</label>
          <input type="date" id="adminNacimiento" name="adminNacimiento" required>
        </div>
      </div>

      <!-- MIEMBROS -->
      <div class="registro-miembros">
        <h3>Miembros de la familia (opcional)</h3>
        <div id="miembrosContainer" class="registro-miembros-container"></div>
        <button type="button" id="addMiembro" class="registro-add-member">+ Añadir miembro</button>
      </div>

      <div class="registro-submit">
        <button type="submit" class="registro-btn">Crear Cuenta</button>
      </div>
    </form>
  </div>

  <script>
    // 👁 Mostrar / ocultar contraseñas
    function togglePassword(id, btn) {
      const input = document.getElementById(id);
      const isHidden = input.type === "password";
      input.type = isHidden ? "text" : "password";
      btn.textContent = isHidden ? "🙈" : "👁";
    }

    // ➕ Añadir miembro dinámicamente
    const addBtn = document.getElementById('addMiembro');
    const container = document.getElementById('miembrosContainer');
    addBtn.addEventListener('click', () => {
      const miembro = document.createElement('div');
      miembro.classList.add('registro-miembro');
      miembro.innerHTML = `
        <div class="registro-grid">
          <div class="registro-group">
            <label>Nombre</label>
            <input type="text" name="miembroNombre[]" pattern="[A-Za-z ]+" placeholder="Nombre completo" required>
          </div>
          <div class="registro-group">
            <label>Fecha de nacimiento</label>
            <input type="date" name="miembroNacimiento[]" required>
          </div>
        </div>
        <div class="registro-group">
          <label>Rol</label>
          <select name="miembroRol[]">
            <option value="Administrador">Administrador</option>
            <option value="Miembro">Miembro</option>
          </select>
        </div>
      `;
      container.appendChild(miembro);
    });

    // 🔧 Envío simulado al controlador
    document.getElementById('registroForm').addEventListener('submit', (e) => {
      e.preventDefault();
      console.log("Ejecutando controladorRegistro.registrarCuenta() ...");
      // controladorRegistro.registrarCuenta();

      // Redirigir al login después del registro (simulación)
      window.location.href = "login.php";
    });
  </script>
</body>
</html>