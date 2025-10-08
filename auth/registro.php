<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Cuenta - Arka</title>
  <link rel="stylesheet" href="../assets/css/auth.css">
  <style>
    .registro-page {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      padding: 40px 0;
    }

    form {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 500px;
      max-width: 90%;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    section {
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      background-color: rgb(95, 122, 134);
      color: white;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: rgb(75, 102, 114);
    }

    .miembros-container {
      margin-top: 10px;
    }

    .miembro {
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .add-member {
      background: none;
      border: none;
      color: rgb(95, 122, 134);
      cursor: pointer;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .error {
      color: red;
      font-size: 14px;
      display: none;
    }
  </style>
</head>
<body class="registro-page">

  <form id="registroForm">
    <h2>Crear una nueva cuenta</h2>

    <section>
      <h3>Datos Generales</h3>
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required>

      <label for="telefono">Teléfono</label>
      <div style="display: flex;">
        <span style="padding:8px; background:#eee; border:1px solid #ccc; border-radius:5px 0 0 5px;">+51</span>
        <input type="tel" id="telefono" name="telefono" required style="border-radius:0 5px 5px 0; flex:1;">
      </div>
    </section>

    <section>
      <h3>Credenciales de acceso</h3>
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>
      <label for="confirmPassword">Confirmar contraseña</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
      <span id="passError" class="error">Las contraseñas no coinciden o no cumplen los requisitos.</span>
    </section>

    <section>
      <h3>Administrador</h3>
      <label for="adminNombre">Nombre</label>
      <input type="text" id="adminNombre" name="adminNombre" pattern="[A-Za-z ]+" required>

      <label for="adminNacimiento">Fecha de nacimiento</label>
      <input type="date" id="adminNacimiento" name="adminNacimiento" required>
    </section>

    <section>
      <h3>Miembros de la familia (opcional)</h3>
      <div id="miembrosContainer" class="miembros-container"></div>
      <button type="button" class="add-member" id="addMiembro">+ Añadir miembro</button>
    </section>

    <button type="submit" class="btn">Crear Cuenta</button>
  </form>

  <script>
    const addBtn = document.getElementById('addMiembro');
    const container = document.getElementById('miembrosContainer');

    addBtn.addEventListener('click', () => {
      const miembro = document.createElement('div');
      miembro.classList.add('miembro');
      miembro.innerHTML = `
        <label>Nombre</label>
        <input type="text" name="miembroNombre[]" pattern="[A-Za-z ]+" required>
        <label>Fecha de nacimiento</label>
        <input type="date" name="miembroNacimiento[]" required>
        <label>Rol</label>
        <select name="miembroRol[]">
          <option value="Administrador">Administrador</option>
          <option value="Miembro">Miembro</option>
        </select>
      `;
      container.appendChild(miembro);
    });

    document.getElementById('registroForm').addEventListener('submit', (e) => {
      e.preventDefault();
      const pass = document.getElementById('password').value;
      const confirm = document.getElementById('confirmPassword').value;
      const regex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[.,:\[\]+\/#$%&\/()=?¿¡!]).{5,}$/;

      const error = document.getElementById('passError');
      if (pass !== confirm || !regex.test(pass)) {
        error.style.display = 'block';
      } else {
        error.style.display = 'none';
        alert('Registro enviado (simulación, sin backend todavía)');
      }
    });
  </script>

</body>
</html>