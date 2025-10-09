<div class="tabs">
  <div class="tab active">Gastos</div>
  <div class="tab">Ingresos</div>
</div>

<div class="content-area">
  <div class="conceptos">
    <div class="concepto"><i class="fa-solid fa-basket-shopping"></i>Mercado</div>
    <div class="concepto"><i class="fa-solid fa-shirt"></i>Ropa</div>
    <div class="concepto"><i class="fa-solid fa-utensils"></i>Restaurante</div>
    <div class="concepto"><i class="fa-solid fa-heart-pulse"></i>Salud</div>
    <div class="concepto"><i class="fa-solid fa-graduation-cap"></i>Educación</div>
    <div class="concepto"><i class="fa-solid fa-gamepad"></i>Entreteni.</div>
    <div class="concepto"><i class="fa-solid fa-lightbulb"></i>Servicios</div>
    <div class="concepto"><i class="fa-solid fa-car"></i>Movilidad</div>
    <div class="concepto nuevo"><i class="fa-solid fa-plus"></i>Nuevo</div>
  </div>

  <div class="sidebar-right">
    <h3>Crear Concepto</h3>
    <div class="form-group">
      <label>Nombre del Concepto</label>
      <input type="text" placeholder="Ej: Transporte">
    </div>

    <div class="form-group">
      <label>Ícono</label>
      <div class="concepto"><i class="fa-solid fa-basket-shopping"></i>Mercado</div>
    </div>

    <div class="form-group">
      <label>Color</label>
      <div class="color-picker">
        <input type="radio" name="color" id="color1" value="#FF6B6B">
        <label for="color1" style="background-color: #FF6B6B;"></label>
    
        <input type="radio" name="color" id="color2" value="#FFD84D">
        <label for="color2" style="background-color: #FFD84D;"></label>
    
        <input type="radio" name="color" id="color3" value="#8CCB5E">
        <label for="color3" style="background-color: #8CCB5E;"></label>
    
        <input type="radio" name="color" id="color4" value="#4DA3FF">
        <label for="color4" style="background-color: #4DA3FF;"></label>
    
        <input type="radio" name="color" id="color5" value="#A66BFF">
        <label for="color5" style="background-color: #A66BFF;"></label>
      </div>
    </div>

    <div class="section-title">Configuración Personal</div>

    <!-- Desembolso -->
    <div class="form-group2">
      <label>Desembolso planificado</label>
      <input type="number" placeholder="S/. 0">
      <select class="frecuencia">
        <option value="diario">Diario</option>
        <option value="semanal">Semanal</option>
        <option value="mensual">Mensual</option>
      </select>
    </div>

    <!-- Límite -->
    <div class="form-group2">
      <label>Establecer límite</label>
      <input type="number" placeholder="S/. 0">
      <select class="frecuencia">
        <option value="diario">Diario</option>
        <option value="semanal">Semanal</option>
        <option value="mensual">Mensual</option>
      </select>
    </div>

    <div class="actions">
      <button class="btn btn-red">Deshabilitar</button>
      <button class="btn btn-yellow">Guardar</button>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="modalCalendario" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Selecciona la fecha</h3>
    <input type="date" id="calendarInput">
    <button id="guardarFecha" class="btn btn-yellow">Guardar</button>
  </div>
</div>