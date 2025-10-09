<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Recuperar cuenta - Arka</title>
  <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
  <form id="recuperarForm" method="POST">
    <img src="../assets/img/arka_logo.png" alt="Logo Arka" class="logo-top">
    <h2>Recuperar cuenta</h2>

    <div id="step-content">
      <input type="text" name="email" id="email" placeholder="Correo Electrónico" required>
    </div>

    <button type="button" id="nextBtn" class="btn btn-oscuro">Siguiente</button>

    <div class="logo-bottom-container">
      <p>Desarrollado por:</p>
      <img src="../assets/img/bugbusters.png" alt="Logo Empresa" class="logo-bottom">
    </div>
  </form>

<script>
  const stepContent = document.getElementById("step-content");
  const nextBtn = document.getElementById("nextBtn");
  let step = 1;

  nextBtn.addEventListener("click", () => {
    if (step === 1) {
      // Paso 1: ingresar correo
      const email = document.getElementById("email").value.trim();
      if (!email) {
        alert("Por favor, ingresa tu correo electrónico.");
        return;
      }
      // Simula envío de código (backend no implementado)
      stepContent.innerHTML = `
        <p>Se ha enviado un código de verificación a <strong>${email}</strong></p>
        <input type="text" id="codigo" name="codigo" placeholder="Código de verificación" required>
      `;
      nextBtn.textContent = "Verificar código";
      step = 2;
    } 
    else if (step === 2) {
      const codigo = document.getElementById("codigo").value.trim();
      if (!codigo) {
        alert("Por favor, ingresa el código de verificación.");
        return;
      }
      // Simula verificación de código
      stepContent.innerHTML = `
        <input type="password" id="nuevaPass" name="nuevaPass" placeholder="Nueva contraseña" required>
        <input type="password" id="confirmPass" name="confirmPass" placeholder="Confirmar contraseña" required>
      `;
      nextBtn.textContent = "Restablecer contraseña";
      step = 3;
    } 
    else if (step === 3) {
      const pass1 = document.getElementById("nuevaPass").value;
      const pass2 = document.getElementById("confirmPass").value;

      if (pass1.length < 5) {
        alert("La contraseña debe tener al menos 5 caracteres.");
        return;
      }
      if (pass1 !== pass2) {
        alert("Las contraseñas no coinciden.");
        return;
      }

      // Simula envío al backend
      console.log("Ejecutando controladorRecuperarCuenta.restablecerContraseña() ...");
      // controladorRecuperarCuenta.restablecerContraseña();

      alert("Tu contraseña ha sido restablecida correctamente.");
      window.location.href = "login.php";
    }
  });
</script>
</body>
</html>