<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Términos y Condiciones, política de privacidad y garantías — GOLEADOR FC." />
  <title>Términos y Condiciones | GOLEADOR FC</title>

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
     
      <p class="page-header-eyebrow mt-2">Documentación legal</p>
      <h1 class="section-title">Términos y <span class="text-red">Condiciones</span></h1>
      <p style="color:var(--color-muted);font-size:.85rem;margin-top:.75rem">
        Última actualización: 1 de enero de 2025
      </p>
    </div>
  </header>

  <!-- ================================================
       CONTENIDO LEGAL
  ================================================ -->
  <section class="section-dark">
    <div class="container">
      <div class="row">

        <!-- Índice lateral -->
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="feature-card" style="position:sticky;top:100px">
            <h4 style="font-family:var(--font-display);font-size:1rem;letter-spacing:.08em;margin-bottom:1rem">Índice</h4>
            <nav>
              <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.5rem">
                <li><a href="#condiciones" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">1. Condiciones de Uso</a></li>
                <li><a href="#privacidad" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">2. Política de Privacidad</a></li>
                <li><a href="#garantias" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">3. Garantías</a></li>
                <li><a href="#envios-terminos" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">4. Política de Envíos</a></li>
                <li><a href="#devoluciones" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">5. Cambios y Devoluciones</a></li>
                <li><a href="#propiedad" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">6. Propiedad Intelectual</a></li>
                <li><a href="#contacto-legal" style="color:var(--color-muted);font-size:.88rem;transition:color .2s" onmouseover="this.style.color='var(--color-red)'" onmouseout="this.style.color='var(--color-muted)'">7. Contacto Legal</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Contenido -->
        <div class="col-lg-9">
          <article class="terms-section feature-card">

            <!-- Introducción -->
            <p style="color:#b0b0b0;font-size:.95rem;margin-bottom:2rem">
              Al acceder y utilizar el sitio web de <strong style="color:var(--color-white)">Goleador FC</strong>
              (en adelante "la tienda" o "la empresa"), el usuario acepta de manera plena y sin reservas los
              presentes Términos y Condiciones. Si no está de acuerdo con alguno de los puntos aquí detallados,
              le rogamos que no utilice nuestros servicios.
            </p>

            <!-- 1. Condiciones de Uso -->
            <section id="condiciones">
              <h3><i class="bi bi-file-text me-2"></i>1. Condiciones de Uso</h3>
              <p>
                El uso de este sitio web está sujeto a las siguientes condiciones. Al navegar por él, el usuario declara:
              </p>
              <ul>
                <li>Ser mayor de 18 años o contar con la supervisión de un adulto responsable para realizar compras.</li>
                <li>Proporcionar datos verídicos y actualizados al momento de crear una cuenta o realizar un pedido.</li>
                <li>No utilizar el sitio con fines fraudulentos o ilegales.</li>
                <li>No intentar vulnerar la seguridad del sitio web ni realizar accesos no autorizados.</li>
                <li>No reproducir, copiar ni explotar el contenido del sitio sin autorización expresa.</li>
              </ul>
              <p>
                Goleador FC se reserva el derecho de modificar, suspender o discontinuar el acceso al sitio,
                temporal o permanentemente, en cualquier momento y sin previo aviso.
              </p>
              <p>
                Los precios publicados en el sitio están expresados en pesos argentinos (ARS) e incluyen el
                IVA correspondiente. Goleador FC se reserva el derecho de modificar los precios sin previo
                aviso, aunque los pedidos confirmados mantendrán el precio original.
              </p>
            </section>

            <!-- 2. Política de Privacidad -->
            <section id="privacidad">
              <h3><i class="bi bi-shield-lock me-2"></i>2. Política de Privacidad</h3>
              <p>
                La privacidad de nuestros usuarios es fundamental. Todos los datos personales recopilados a
                través de este sitio son tratados de conformidad con la
                <strong style="color:var(--color-white)">Ley 25.326 de Protección de Datos Personales</strong> de Argentina.
              </p>

              <h4 style="font-family:var(--font-body);font-size:1rem;color:var(--color-white);margin:1.25rem 0 .5rem">Datos que recopilamos</h4>
              <ul>
                <li>Nombre completo, dirección de email y número de teléfono.</li>
                <li>Dirección de entrega para procesar envíos.</li>
                <li>Datos de pago (procesados de forma segura a través de plataformas certificadas PCI-DSS).</li>
                <li>Información de navegación (cookies, IP, dispositivo) para mejorar la experiencia de uso.</li>
              </ul>

              <h4 style="font-family:var(--font-body);font-size:1rem;color:var(--color-white);margin:1.25rem 0 .5rem">Uso de los datos</h4>
              <ul>
                <li>Procesar y gestionar pedidos.</li>
                <li>Enviar confirmaciones de compra y actualizaciones de estado de envío.</li>
                <li>Comunicar promociones y novedades (con opción de baja en cualquier momento).</li>
                <li>Mejorar nuestros productos y servicios.</li>
              </ul>

              <h4 style="font-family:var(--font-body);font-size:1rem;color:var(--color-white);margin:1.25rem 0 .5rem">Tus derechos</h4>
              <p>
                En cualquier momento podés solicitar el acceso, rectificación, supresión u oposición al
                tratamiento de tus datos personales escribiendo a
                <strong style="color:var(--color-white)">privacidad@goleadorfc.com.ar</strong>.
                Respondemos en un plazo máximo de 10 días hábiles.
              </p>

              <p>
                No compartimos tus datos personales con terceros salvo para el cumplimiento del servicio
                (empresas de logística, plataformas de pago) y en los casos requeridos por la ley.
              </p>
            </section>

            <!-- 3. Garantías -->
            <section id="garantias">
              <h3><i class="bi bi-patch-check me-2"></i>3. Garantías</h3>
              <p>
                Todos los productos comercializados por Goleador FC cuentan con garantía de calidad.
                Nos comprometemos a que cada camiseta enviada cumple con las especificaciones detalladas en su descripción.
              </p>

              <h4 style="font-family:var(--font-body);font-size:1rem;color:var(--color-white);margin:1.25rem 0 .5rem">Alcance de la garantía</h4>
              <ul>
                <li><strong style="color:var(--color-white)">30 días</strong> de garantía por defectos de fabricación (costuras, estampado, material).</li>
                <li>El producto debe presentarse sin signos de uso, lavado ni alteración.</li>
                <li>Incluye defectos en bordados, serigrafía o fallas en el tejido.</li>
              </ul>

              <h4 style="font-family:var(--font-body);font-size:1rem;color:var(--color-white);margin:1.25rem 0 .5rem">Exclusiones de garantía</h4>
              <ul>
                <li>Desgaste normal por uso.</li>
                <li>Daños causados por mal uso, lavado incorrecto o exposición a productos químicos.</li>
                <li>Productos con signos evidentes de uso o alteración.</li>
                <li>Diferencias mínimas de tonalidad entre pantalla y producto físico.</li>
              </ul>

              <p>
                Para hacer válida la garantía, contactanos por email o WhatsApp adjuntando fotos del
                defecto y el número de pedido. Evaluamos cada caso en un plazo de 48 hs hábiles.
              </p>
            </section>

            <!-- 4. Política de Envíos -->
            <section id="envios-terminos">
              <h3><i class="bi bi-truck me-2"></i>4. Política de Envíos</h3>
              <p>
                Los envíos se realizan a través de Correo Argentino y OCA a todo el territorio nacional.
                Los tiempos de entrega son estimados y pueden verse afectados por factores externos ajenos
                a nuestra operación (feriados, demoras del servicio postal, etc.).
              </p>
              <ul>
                <li>Los pedidos se procesan en un plazo de <strong style="color:var(--color-white)">24 a 48 hs hábiles</strong> luego de confirmado el pago.</li>
                <li>El costo de envío se calcula según la zona de destino y se informa antes de confirmar la compra.</li>
                <li>Los envíos superiores a <strong style="color:var(--color-white)">$30.000</strong> son gratuitos (excluye envío express).</li>
                <li>Una vez despachado el pedido, se envía el número de seguimiento al email registrado.</li>
                <li>En caso de pérdida o extravío por parte de la empresa de correos, Goleador FC gestionará el reclamo correspondiente.</li>
              </ul>
            </section>

            <!-- 5. Cambios y Devoluciones -->
            <section id="devoluciones">
              <h3><i class="bi bi-arrow-repeat me-2"></i>5. Cambios y Devoluciones</h3>
              <p>
                Aceptamos cambios y devoluciones dentro de los <strong style="color:var(--color-white)">10 días corridos</strong>
                desde la recepción del producto, siempre que se cumplan las siguientes condiciones:
              </p>
              <ul>
                <li>El producto debe estar sin uso, sin lavado y con sus etiquetas originales.</li>
                <li>El embalaje original debe estar en buen estado.</li>
                <li>Se debe presentar el comprobante de compra (número de pedido).</li>
              </ul>
              <p>
                Los <strong style="color:var(--color-white)">cambios de talle</strong> están disponibles sujetos a stock.
                El costo del envío de devolución está a cargo del comprador, salvo cuando el motivo sea un
                defecto de fabricación o un error en el pedido de nuestra parte.
              </p>
              <p>
                Para iniciar un proceso de cambio o devolución, contactanos por email a
                <strong style="color:var(--color-white)">cambios@goleadorfc.com.ar</strong>.
              </p>
            </section>

            <!-- 6. Propiedad Intelectual -->
            <section id="propiedad">
              <h3><i class="bi bi-c-circle me-2"></i>6. Propiedad Intelectual</h3>
              <p>
                Todos los contenidos del sitio web de Goleador FC —incluyendo textos, imágenes, logotipos,
                diseños y código fuente— son propiedad de Goleador FC o cuentan con licencia de uso,
                y están protegidos por las leyes de propiedad intelectual argentinas e internacionales.
              </p>
              <p>
                Queda prohibida su reproducción total o parcial sin autorización expresa y por escrito de
                Goleador FC. El uso no autorizado de estos contenidos podrá dar lugar a acciones legales.
              </p>
            </section>

            <!-- 7. Contacto Legal -->
            <section id="contacto-legal">
              <h3><i class="bi bi-envelope me-2"></i>7. Contacto Legal</h3>
              <p>
                Para cualquier consulta relacionada con estos Términos y Condiciones o con el tratamiento
                de tus datos personales, podés contactarnos en:
              </p>
              <ul>
                <li><strong style="color:var(--color-white)">Email:</strong> legal@goleadorfc.com.ar</li>
                <li><strong style="color:var(--color-white)">Dirección:</strong> Av. Corrientes 1234, Piso 2, CABA, Argentina</li>
                <li><strong style="color:var(--color-white)">Teléfono:</strong> +54 11 1234-5678</li>
              </ul>
              <p style="font-size:.88rem">
                Goleador FC se reserva el derecho de modificar estos términos en cualquier momento.
                Los cambios serán publicados en esta página con indicación de la fecha de actualización.
                El uso continuado del sitio implica la aceptación de los términos vigentes.
              </p>
            </section>

          </article>
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