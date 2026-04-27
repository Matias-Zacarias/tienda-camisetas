<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Hacé tu consulta a GOLEADOR FC sobre productos, tallas, disponibilidad y más." />
  <title>Consultas | GOLEADOR FC</title>

  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

  <x-navbar />

  <!-- 
       PAGE HEADER
   -->
  <header class="page-header">
    <div class="container">


      <p class="page-header-eyebrow mt-2">Te respondemos en el día</p>
      <h1 class="section-title">Hacé tu <span class="text-red">Consulta</span></h1>
    </div>
  </header>

  <!-- 
       CONSULTAS RÁPIDAS (FAQ)
   -->
  <section class="section-surface">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Preguntas frecuentes</p>
        <h2 class="section-title" style="font-size:2rem">¿Ya revisaste las <span>FAQ</span>?</h2>
        <hr class="section-divider">
      </div>

      <!-- Accordion Bootstrap 5 -->
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">

            <div class="accordion-item"
              style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq1">
                <button class="accordion-button collapsed"
                  style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1" aria-expanded="false"
                  aria-controls="faqBody1">
                  ¿Las camisetas son originales?
                </button>
              </h3>
              <div id="faqBody1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body" style="color:#b0b0b0;font-size:.92rem">
                  Si, todos nuestros productos son originales y de excelente calidad.
                  No comercializamos marcas registradas sin licencia. Todos nuestros productos están claramente
                  descritos y el precio refleja la calidad real del producto.
                </div>
              </div>
            </div>

            <div class="accordion-item"
              style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed"
                  style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="false"
                  aria-controls="faqBody2">
                  ¿Puedo pedir estampado personalizado con nombre y número?
                </button>
              </h3>
              <div id="faqBody2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body" style="color:#b0b0b0;font-size:.92rem">
                  ¡Sí! Ofrecemos el servicio de estampado con nombre y número a elección por un costo adicional.
                  Consultanos por WhatsApp o a través del formulario de esta página para coordinar los detalles.
                  El tiempo de producción con personalización es de 48 a 72 hs hábiles adicionales.
                </div>
              </div>
            </div>

            <div class="accordion-item"
              style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed"
                  style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false"
                  aria-controls="faqBody3">
                  ¿Cómo sé qué talle elegir?
                </button>
              </h3>
              <div id="faqBody3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body" style="color:#b0b0b0;font-size:.92rem">
                  Contamos con una guía de talles en cada producto. En general los modelos son talles estándar
                  europeos (S, M, L, XL, XXL). Si tenés dudas sobre el talle, te recomendamos consultar directamente
                  por WhatsApp y te asesoramos según tus medidas.
                </div>
              </div>
            </div>

            <div class="accordion-item"
              style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed"
                  style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false"
                  aria-controls="faqBody4">
                  ¿Hacen pedidos al por mayor o para empresas?
                </button>
              </h3>
              <div id="faqBody4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body" style="color:#b0b0b0;font-size:.92rem">
                  Sí, tenemos precios especiales para pedidos de 6 unidades o más. Contactanos por email a
                  ventas@goleadorfc.com.ar indicando la cantidad y modelos de interés. También trabajamos con
                  clubes, colegios y empresas para equipamiento de equipos.
                </div>
              </div>
            </div>

            <div class="accordion-item"
              style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq5">
                <button class="accordion-button collapsed"
                  style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                  type="button" data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false"
                  aria-controls="faqBody5">
                  ¿Cómo rastreo mi pedido?
                </button>
              </h3>
              <div id="faqBody5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body" style="color:#b0b0b0;font-size:.92rem">
                  Una vez despachado tu pedido, recibirás un email con el número de seguimiento de Correo
                  Argentino u OCA según corresponda. Con ese código podés rastrear el estado de tu envío
                  directamente en el sitio de la empresa de correos.
                </div>
              </div>
            </div>

          </div><!-- /accordion -->
        </div>
      </div>

    </div>
  </section>

  <!-- 
       FORMULARIO DE CONSULTA
   -->
  <section class="section-dark" id="formulario">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="text-center mb-5">
            <p class="page-header-eyebrow">No encontraste respuesta</p>
            <h2 class="section-title" style="font-size:2rem">Escribinos <span>directamente</span></h2>
            <hr class="section-divider">
            <p style="color:var(--color-muted);font-size:.92rem">
              Completá el formulario y te respondemos en menos de 24 horas hábiles.
            </p>
          </div>


          <x-formulario />


          <!-- Tiempo de respuesta -->
          <div class="row g-3 mt-3">
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">2 hs</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">Por
                WhatsApp</div>
            </div>
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">24 hs</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">Por
                Email / Form</div>
            </div>
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">5★</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">
                Atención al cliente</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- 
       FOOTER
   -->
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