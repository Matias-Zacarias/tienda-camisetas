<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Contactá a GOLEADOR FC — dirección, teléfono, email y formulario de contacto." />
  <title>Contacto | GOLEADOR FC</title>

  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

  <!-- ================================================
       NAVBAR
  ================================================ -->
  <x-navbar />

  <!-- ================================================
       PAGE HEADER
  ================================================ -->
  <header class="page-header">
    <div class="container">

      <p class="page-header-eyebrow mt-2">Estamos para vos</p>
      <h1 class="section-title">Contactá<span class="text-red">nos</span></h1>
    </div>
  </header>

  <!-- ================================================
       CONTACTO PRINCIPAL
  ================================================ -->
  <section class="section-dark">
    <div class="container">
      <div class="row g-5">



        <!-- Formulario de contacto -->
        <div class="col-lg-7">
          <x-formulario />
        </div>
        <!-- Info de contacto -->
        <div class="col-lg-5">
          <p class="page-header-eyebrow">Información</p>
          <h2 class="section-title mb-4">¿Cómo llegar<br><span>a nosotros?</span></h2>

          <div class="d-flex flex-column gap-3 mb-4">

            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <p class="contact-info-label">Dirección</p>
                <p class="contact-info-value">Av. Cazadores Correntinos 3412</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Corrinetes Capital, Argentina</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <p class="contact-info-label">Email</p>
                <p class="contact-info-value">ventas@goleadorfc.com.ar</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Respondemos en menos de 24 hs</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div>
                <p class="contact-info-label">WhatsApp</p>
                <p class="contact-info-value">+54 9 11 2345-6789</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Respuesta inmediata en horario comercial
                </p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div>
                <p class="contact-info-label">Horarios de Atención</p>
                <p class="contact-info-value">Lunes a Viernes: 10:00 – 20:00</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Sábados: 10:00 – 16:00 · Domingos: cerrado
                </p>
              </div>
            </div>

          </div>

          <!-- Redes Sociales -->

        </div>

      </div>
    </div>
  </section>

  <!-- ================================================
       MAPA
  ================================================ -->
  <section class="section-surface pb-0">
    <div class="container">
      <div class="text-center mb-4">
        <p class="page-header-eyebrow">Cómo llegarnos</p>
        <h2 class="section-title" style="font-size:2rem">Nuestra <span>Ubicación</span></h2>
      </div>
    </div>
    <!-- Mapa Google Maps embebido (placeholder con Av. Corrientes, CABA) -->
    <div class="map-wrap" style="border-radius:0;border-left:none;border-right:none">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14156.863298350054!2d-58.79553656931151!3d-27.49366258716002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1777250981428!5m2!1ses-419!2sar"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" title="Ubicación de Goleador FC en Google Maps"
        aria-label="Mapa de ubicación de Goleador FC">
      </iframe>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
  <x-footer />
  <script>
    const form = document.getElementById('contact-form');
    const success = document.getElementById('form-success');

    // Reglas de validación
    const rules = {
      nombre: { required: true, label: 'El nombre es obligatorio' },
      apellido: { required: true, label: 'El apellido es obligatorio' },
      email: { required: true, label: 'El email es obligatorio', pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, patternMsg: 'Ingresá un email válido' },
      asunto: { required: true, label: 'Seleccioná un asunto' },
      mensaje: { required: true, label: 'El mensaje es obligatorio' },
    };

    function validateField(name, value) {
      const rule = rules[name];
      if (!rule) return null;
      if (rule.required && !value.trim()) return rule.label;
      if (rule.pattern && value && !rule.pattern.test(value)) return rule.patternMsg;
      return null;
    }

    function showError(name, msg) {
      const el = document.querySelector(`[data-field="${name}"]`);
      const input = document.getElementById(name);
      if (el) el.textContent = msg || '';
      if (input) input.classList.toggle('is-invalid', !!msg);
    }

    function resetForm() {
      form.reset();
      // Limpiar errores visuales
      document.querySelectorAll('.form-error').forEach(el => el.textContent = '');
      document.querySelectorAll('.form-control-gf').forEach(el => el.classList.remove('is-invalid'));
      // Mostrar formulario y ocultar éxito
      success.style.display = 'none';
      form.style.display = 'block';
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      let valid = true;

      // Validar cada campo con regla
      Object.keys(rules).forEach(name => {
        const input = document.getElementById(name);
        if (!input) return;
        const error = validateField(name, input.value);
        showError(name, error);
        if (error) valid = false;
      });

      if (!valid) return;

      // Todo OK → ocultar form y mostrar éxito
      form.style.display = 'none';
      success.style.display = 'block';

      // Scroll suave al mensaje
      success.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    // Validación en tiempo real al salir del campo
    Object.keys(rules).forEach(name => {
      const input = document.getElementById(name);
      if (!input) return;
      input.addEventListener('blur', () => {
        const error = validateField(name, input.value);
        showError(name, error);
      });
      input.addEventListener('input', () => {
        if (input.classList.contains('is-invalid')) {
          const error = validateField(name, input.value);
          showError(name, error);
        }
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>