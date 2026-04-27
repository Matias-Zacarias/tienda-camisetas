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
  <x-header titulo="Estamos para vos" text1="Contactá" text2="nos" />


  <!-- ================================================
       CONTACTO PRINCIPAL
  ================================================ -->
  <x-contactoPrincipal />

  <!-- ================================================
       MAPA
  ================================================ -->
  <x-mapa />

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