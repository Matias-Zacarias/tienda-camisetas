<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Contactá a GOLEADOR FC — dirección, teléfono, email y formulario de contacto." />
  <title>Contacto | GOLEADOR FC</title>

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
          <div class="feature-card">
            <p class="page-header-eyebrow">Formulario</p>
            <h2 class="section-title mb-4" style="font-size:1.8rem">Envianos un <span>mensaje</span></h2>

            <form action="#" method="POST" novalidate>

              <div class="row g-3">

                <div class="col-sm-6">
                  <label class="form-label-gf" for="nombre">Nombre</label>
                  <input class="form-control-gf" type="text" id="nombre" name="nombre"
                         placeholder="Tu nombre" autocomplete="given-name" />
                </div>

                <div class="col-sm-6">
                  <label class="form-label-gf" for="apellido">Apellido</label>
                  <input class="form-control-gf" type="text" id="apellido" name="apellido"
                         placeholder="Tu apellido" autocomplete="family-name" />
                </div>

                <div class="col-sm-6">
                  <label class="form-label-gf" for="email">Email</label>
                  <input class="form-control-gf" type="email" id="email" name="email"
                         placeholder="tu@email.com" autocomplete="email" />
                </div>

                <div class="col-sm-6">
                  <label class="form-label-gf" for="telefono">Teléfono (opcional)</label>
                  <input class="form-control-gf" type="tel" id="telefono" name="telefono"
                         placeholder="+54 11 ..." autocomplete="tel" />
                </div>

                <div class="col-12">
                  <label class="form-label-gf" for="asunto">Asunto</label>
                  <select class="form-control-gf" id="asunto" name="asunto">
                    <option value="" disabled selected>Seleccioná un asunto</option>
                    <option value="pedido">Consulta sobre pedido</option>
                    <option value="producto">Consulta sobre producto</option>
                    <option value="envio">Información de envío</option>
                    <option value="devolucion">Devolución / cambio</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label-gf" for="mensaje">Mensaje</label>
                  <textarea class="form-control-gf" id="mensaje" name="mensaje"
                            placeholder="Escribí tu mensaje acá..."></textarea>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn-primary-gf w-100" style="text-align:center">
                    <i class="bi bi-send me-2"></i>Enviar mensaje
                  </button>
                </div>

              </div>
            </form>
          </div>
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
                <p class="contact-info-value">Av. Corrientes 1234, Piso 2</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">CABA, Buenos Aires, Argentina</p>
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
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Respuesta inmediata en horario comercial</p>
              </div>
            </div>

            <div class="contact-info-card">
              <div class="contact-info-icon">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div>
                <p class="contact-info-label">Horarios de Atención</p>
                <p class="contact-info-value">Lunes a Viernes: 10:00 – 20:00</p>
                <p style="color:var(--color-muted);font-size:.85rem;margin:0">Sábados: 10:00 – 16:00 · Domingos: cerrado</p>
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
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0168878895345!2d-58.38375842423646!3d-34.60373537295459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac630121623%3A0x53386f2ac88991a9!2sAv.%20Corrientes%201234%2C%20C1043%20CABA!5e0!3m2!1ses!2sar!4v1716998000000!5m2!1ses!2sar"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Ubicación de Goleador FC en Google Maps"
        aria-label="Mapa de ubicación de Goleador FC">
      </iframe>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
  @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>