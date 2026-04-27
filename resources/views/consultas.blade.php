<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Hacé tu consulta a GOLEADOR FC sobre productos, tallas, disponibilidad y más." />
  <title>Consultas | GOLEADOR FC</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>

  <!-- ================================================
       NAVBAR
  ================================================ -->
  @include('partials.navbar')

  <!-- ================================================
       PAGE HEADER
  ================================================ -->
  <header class="page-header">
    <div class="container">
      
      
      <p class="page-header-eyebrow mt-2">Te respondemos en el día</p>
      <h1 class="section-title">Hacé tu <span class="text-red">Consulta</span></h1>
    </div>
  </header>

  <!-- ================================================
       CONSULTAS RÁPIDAS (FAQ)
  ================================================ -->
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

            <div class="accordion-item" style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq1">
                <button class="accordion-button collapsed"
                        style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
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

            <div class="accordion-item" style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed"
                        style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="false" aria-controls="faqBody2">
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

            <div class="accordion-item" style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed"
                        style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3">
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

            <div class="accordion-item" style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed"
                        style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false" aria-controls="faqBody4">
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

            <div class="accordion-item" style="background:var(--color-surface);border:1px solid var(--color-border);border-radius:var(--radius-lg)!important;margin-bottom:.75rem;overflow:hidden">
              <h3 class="accordion-header" id="faq5">
                <button class="accordion-button collapsed"
                        style="background:var(--color-surface);color:var(--color-white);font-family:var(--font-display);font-size:1rem;letter-spacing:.04em;border:none;box-shadow:none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false" aria-controls="faqBody5">
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

  <!-- ================================================
       FORMULARIO DE CONSULTA
  ================================================ -->
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

          <div class="feature-card">
            <form action="#" method="POST" novalidate>

              <div class="row g-4">

                <div class="col-sm-6">
                  <label class="form-label-gf" for="nombre">Nombre *</label>
                  <input class="form-control-gf" type="text" id="nombre" name="nombre"
                         placeholder="Tu nombre completo" autocomplete="name" required />
                </div>

                <div class="col-sm-6">
                  <label class="form-label-gf" for="email">Email *</label>
                  <input class="form-control-gf" type="email" id="email" name="email"
                         placeholder="tu@email.com" autocomplete="email" required />
                </div>

                <div class="col-12">
                  <label class="form-label-gf" for="tipo">Tipo de consulta</label>
                  <select class="form-control-gf" id="tipo" name="tipo">
                    <option value="" disabled selected>¿Sobre qué querés consultar?</option>
                    <option value="producto">Disponibilidad de producto</option>
                    <option value="talle">Guía de talles</option>
                    <option value="personalizado">Camiseta personalizada</option>
                    <option value="mayorista">Pedido mayorista</option>
                    <option value="pedido">Estado de mi pedido</option>
                    <option value="cambio">Cambio o devolución</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label-gf" for="mensaje">Mensaje *</label>
                  <textarea class="form-control-gf" id="mensaje" name="mensaje"
                            placeholder="Describí tu consulta con el mayor detalle posible. Si preguntás por un producto específico, indicá el nombre, modelo y talle que buscás." required></textarea>
                </div>

                <!-- Canales alternativos -->
                <div class="col-12">
                  <div class="p-3 rounded" style="background:var(--color-surface2);border:1px solid var(--color-border)">
                    <p style="font-size:.82rem;color:var(--color-muted);margin-bottom:.5rem">
                      <i class="bi bi-lightning-charge-fill text-red me-1"></i>
                      <strong style="color:var(--color-white)">¿Necesitás respuesta inmediata?</strong>
                    </p>
                    <p style="font-size:.82rem;color:var(--color-muted);margin:0">
                      Escribinos por WhatsApp al
                      <strong style="color:var(--color-white)">+54 9 11 2345-6789</strong>
                      y te respondemos al instante en horario comercial.
                    </p>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn-primary-gf w-100" style="text-align:center;padding:1rem">
                    <i class="bi bi-send-fill me-2"></i>Enviar consulta
                  </button>
                </div>

              </div>
            </form>
          </div>

          <!-- Tiempo de respuesta -->
          <div class="row g-3 mt-3">
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">2 hs</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">Por WhatsApp</div>
            </div>
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">24 hs</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">Por Email / Form</div>
            </div>
            <div class="col-4 text-center">
              <div style="font-family:var(--font-display);font-size:1.8rem;color:var(--color-red)">5★</div>
              <div style="font-size:.78rem;color:var(--color-muted);text-transform:uppercase;letter-spacing:.1em">Atención al cliente</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>