<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Métodos de pago, formas de envío y tiempos de entrega — GOLEADOR FC." />
  <title>Comercialización | GOLEADOR FC</title>

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
    
      <p class="page-header-eyebrow mt-2">Comprá con confianza</p>
      <h1 class="section-title">Cómo <span class="text-red">Comprarnos</span></h1>
    </div>
  </header>

  <!-- ================================================
       MÉTODOS DE PAGO
  ================================================ -->
  <section class="section-dark" id="pagos">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Pagá como quieras</p>
        <h2 class="section-title">Métodos de <span>Pago</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4">

        <div class="col-md-6 col-lg-3">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-credit-card-2-front"></i></div>
            <h3 class="feature-title">Tarjeta de Crédito</h3>
            <p style="color:#888;font-size:.9rem">
              Visa, Mastercard, American Express y Naranja X.
              Pagá en hasta <strong style="color:var(--color-white)">12 cuotas sin interés</strong> con bancos seleccionados.
            </p>
            <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap">
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">VISA</span>
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">MC</span>
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">AMEX</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-credit-card"></i></div>
            <h3 class="feature-title">Tarjeta de Débito</h3>
            <p style="color:#888;font-size:.9rem">
              Pagá de forma inmediata con tu tarjeta de débito.
              Sin cargos adicionales, <strong style="color:var(--color-white)">pago en una sola cuota</strong>.
            </p>
            <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap">
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">VISA Débito</span>
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">Maestro</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-bank"></i></div>
            <h3 class="feature-title">Transferencia Bancaria</h3>
            <p style="color:#888;font-size:.9rem">
              Transferencia o depósito bancario. Te enviamos el CBU / CVU una vez confirmado el pedido.
              <strong style="color:var(--color-white)">5% de descuento</strong> por este método.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto"><i class="bi bi-phone"></i></div>
            <h3 class="feature-title">Billeteras Virtuales</h3>
            <p style="color:#888;font-size:.9rem">
              MercadoPago, Ualá, Brubank y Naranja X. Rápido, seguro y sin complicaciones.
              <strong style="color:var(--color-white)">Acreditación inmediata</strong>.
            </p>
            <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap">
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">MercadoPago</span>
              <span style="background:var(--color-surface2);border:1px solid var(--color-border);border-radius:4px;padding:.3rem .7rem;font-size:.75rem;color:var(--color-muted)">Ualá</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Alerta cuotas -->
      <div class="mt-4 p-4 rounded"
           style="background:rgba(217,4,41,0.08);border:1px solid rgba(217,4,41,0.25)">
        <div class="d-flex gap-3 align-items-start">
          <i class="bi bi-info-circle-fill text-red" style="font-size:1.3rem;flex-shrink:0;margin-top:.15rem"></i>
          <div>
            <strong>Cuotas sin interés:</strong>
            <span style="color:#b0b0b0;font-size:.92rem">
              Los planes de cuotas están sujetos a acuerdos vigentes con cada banco.
              Consultanos por WhatsApp para conocer los planes disponibles en tu tarjeta al momento de la compra.
            </span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ================================================
       FORMAS DE ENVÍO
  ================================================ -->
  <section class="section-surface" id="envios">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Llegamos a todo el país</p>
        <h2 class="section-title">Formas de <span>Envío</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4 align-items-start">

        <div class="col-lg-8">
          <div class="row g-4">

            <div class="col-sm-6">
              <div class="feature-card h-100">
                <div class="feature-icon"><i class="bi bi-truck"></i></div>
                <h3 class="feature-title">Correo Argentino</h3>
                <p style="color:#888;font-size:.9rem;margin-bottom:.75rem">
                  Envíos a domicilio o retiro en sucursal. Cobertura en todo el territorio nacional.
                </p>
                <ul style="color:#888;font-size:.85rem;padding-left:1.2rem;margin:0">
                  <li>A domicilio: 5 a 10 días hábiles</li>
                  <li>En sucursal: 3 a 7 días hábiles</li>
                  <li>Seguimiento online incluido</li>
                </ul>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="feature-card h-100">
                <div class="feature-icon"><i class="bi bi-box-seam"></i></div>
                <h3 class="feature-title">OCA</h3>
                <p style="color:#888;font-size:.9rem;margin-bottom:.75rem">
                  Servicio express con mayor velocidad. Ideal para el interior del país.
                </p>
                <ul style="color:#888;font-size:.85rem;padding-left:1.2rem;margin:0">
                  <li>A domicilio: 2 a 5 días hábiles</li>
                  <li>En sucursal: 1 a 3 días hábiles</li>
                  <li>Seguimiento en tiempo real</li>
                </ul>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="feature-card h-100">
                <div class="feature-icon"><i class="bi bi-person-walking"></i></div>
                <h3 class="feature-title">Retiro en Local</h3>
                <p style="color:#888;font-size:.9rem;margin-bottom:.75rem">
                  Retirá sin cargo en nuestro local de Av. Corrientes 1234, Buenos Aires.
                </p>
                <ul style="color:#888;font-size:.85rem;padding-left:1.2rem;margin:0">
                  <li>Lunes a Sábados 10 hs – 20 hs</li>
                  <li>Listo en 24 hs hábiles</li>
                  <li><strong style="color:var(--color-white)">Sin costo de envío</strong></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="feature-card h-100">
                <div class="feature-icon"><i class="bi bi-lightning-charge"></i></div>
                <h3 class="feature-title">Envío Express CABA</h3>
                <p style="color:#888;font-size:.9rem;margin-bottom:.75rem">
                  Entrega el mismo día o día siguiente dentro de Capital Federal y GBA.
                </p>
                <ul style="color:#888;font-size:.85rem;padding-left:1.2rem;margin:0">
                  <li>Pedidos antes de las 14 hs</li>
                  <li>Entrega: mismo día hábil</li>
                  <li>Cargo adicional: $2.500</li>
                </ul>
              </div>
            </div>

          </div>
        </div>

        <!-- Tabla de costos -->
        <div class="col-lg-4">
          <div class="feature-card">
            <h3 class="feature-title" style="margin-bottom:1.25rem">
              <i class="bi bi-currency-dollar text-red me-2"></i>
              Costos de Envío
            </h3>
            <table style="width:100%;border-collapse:collapse">
              <thead>
                <tr style="border-bottom:1px solid var(--color-border)">
                  <th style="padding:.5rem 0;font-size:.8rem;color:var(--color-muted);text-align:left;font-weight:600;letter-spacing:.08em;text-transform:uppercase">Zona</th>
                  <th style="padding:.5rem 0;font-size:.8rem;color:var(--color-muted);text-align:right;font-weight:600;letter-spacing:.08em;text-transform:uppercase">Costo</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid var(--color-border)">
                  <td style="padding:.7rem 0;font-size:.9rem;color:#ccc">CABA y GBA</td>
                  <td style="padding:.7rem 0;font-size:.9rem;color:var(--color-red);text-align:right;font-weight:700">$1.800</td>
                </tr>
                <tr style="border-bottom:1px solid var(--color-border)">
                  <td style="padding:.7rem 0;font-size:.9rem;color:#ccc">Interior provincia Bs.As.</td>
                  <td style="padding:.7rem 0;font-size:.9rem;color:var(--color-red);text-align:right;font-weight:700">$2.800</td>
                </tr>
                <tr style="border-bottom:1px solid var(--color-border)">
                  <td style="padding:.7rem 0;font-size:.9rem;color:#ccc">Resto del país</td>
                  <td style="padding:.7rem 0;font-size:.9rem;color:var(--color-red);text-align:right;font-weight:700">$3.500</td>
                </tr>
                <tr>
                  <td style="padding:.7rem 0;font-size:.9rem;color:#ccc">Patagonia / NOA / NEA</td>
                  <td style="padding:.7rem 0;font-size:.9rem;color:var(--color-red);text-align:right;font-weight:700">$4.500</td>
                </tr>
              </tbody>
            </table>

            <div class="mt-3 p-3 rounded" style="background:rgba(217,4,41,0.08);border:1px solid rgba(217,4,41,0.2)">
              <p style="font-size:.82rem;color:#b0b0b0;margin:0">
                <i class="bi bi-gift-fill text-red me-1"></i>
                <strong style="color:var(--color-white)">Envío gratis</strong> en compras mayores a $30.000 (excepto express).
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================================================
       TIEMPOS DE ENTREGA
  ================================================ -->
  <section class="section-dark" id="tiempos">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Siempre a tiempo</p>
        <h2 class="section-title">Tiempos de <span>Entrega</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto" style="font-size:1.8rem;width:70px;height:70px">
              <span style="font-family:var(--font-display);font-size:2rem;color:var(--color-red)">1</span>
            </div>
            <h3 class="feature-title">Confirmación del Pedido</h3>
            <p style="color:#888;font-size:.9rem">
              Una vez acreditado el pago, confirmamos el pedido por email o WhatsApp en un plazo máximo de
              <strong style="color:var(--color-white)">2 horas hábiles</strong>.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto" style="font-size:1.8rem;width:70px;height:70px">
              <span style="font-family:var(--font-display);font-size:2rem;color:var(--color-red)">2</span>
            </div>
            <h3 class="feature-title">Preparación y Despacho</h3>
            <p style="color:#888;font-size:.9rem">
              Preparamos tu pedido con el mayor cuidado. El despacho se realiza dentro de las
              <strong style="color:var(--color-white)">24 hs hábiles</strong> posteriores a la confirmación.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100 text-center">
            <div class="feature-icon mx-auto" style="font-size:1.8rem;width:70px;height:70px">
              <span style="font-family:var(--font-display);font-size:2rem;color:var(--color-red)">3</span>
            </div>
            <h3 class="feature-title">Entrega en tu Domicilio</h3>
            <p style="color:#888;font-size:.9rem">
              Recibís el número de seguimiento y podés rastrear tu pedido. El tiempo de entrega depende de
              la <strong style="color:var(--color-white)">zona geográfica y el servicio elegido</strong>.
            </p>
          </div>
        </div>

      </div>

      <!-- Tabla resumen -->
      <div class="mt-5 feature-card">
        <h3 class="feature-title mb-4"><i class="bi bi-calendar-check text-red me-2"></i>Resumen de Tiempos</h3>
        <div class="table-responsive">
          <table class="table" style="color:#b0b0b0;border-color:var(--color-border)">
            <thead>
              <tr style="border-color:var(--color-border)">
                <th style="color:var(--color-muted);font-weight:600;font-size:.82rem;letter-spacing:.08em;text-transform:uppercase;border-color:var(--color-border)">Servicio</th>
                <th style="color:var(--color-muted);font-weight:600;font-size:.82rem;letter-spacing:.08em;text-transform:uppercase;border-color:var(--color-border)">CABA / GBA</th>
                <th style="color:var(--color-muted);font-weight:600;font-size:.82rem;letter-spacing:.08em;text-transform:uppercase;border-color:var(--color-border)">Provincia</th>
                <th style="color:var(--color-muted);font-weight:600;font-size:.82rem;letter-spacing:.08em;text-transform:uppercase;border-color:var(--color-border)">Resto del país</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-color:var(--color-border)">
                <td style="border-color:var(--color-border)">Express (mismo día)</td>
                <td style="border-color:var(--color-border);color:var(--color-red);font-weight:700">Mismo día</td>
                <td style="border-color:var(--color-border)">No disponible</td>
                <td style="border-color:var(--color-border)">No disponible</td>
              </tr>
              <tr style="border-color:var(--color-border)">
                <td style="border-color:var(--color-border)">OCA</td>
                <td style="border-color:var(--color-border);color:var(--color-red);font-weight:700">1–2 días hábiles</td>
                <td style="border-color:var(--color-border)">2–4 días hábiles</td>
                <td style="border-color:var(--color-border)">4–7 días hábiles</td>
              </tr>
              <tr style="border-color:var(--color-border)">
                <td style="border-color:var(--color-border)">Correo Argentino</td>
                <td style="border-color:var(--color-border)">3–5 días hábiles</td>
                <td style="border-color:var(--color-border)">5–8 días hábiles</td>
                <td style="border-color:var(--color-border)">7–12 días hábiles</td>
              </tr>
              <tr style="border-color:var(--color-border)">
                <td style="border-color:var(--color-border)">Retiro en local</td>
                <td style="border-color:var(--color-border);color:var(--color-red);font-weight:700">24 hs hábiles</td>
                <td style="border-color:var(--color-border)">N/A</td>
                <td style="border-color:var(--color-border)">N/A</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p style="color:#666;font-size:.8rem;margin:0"><i class="bi bi-info-circle me-1"></i>Los tiempos son estimados y pueden variar por condiciones del servicio postal. Días hábiles no incluyen sábados, domingos ni feriados.</p>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner" aria-label="Llamado a la acción">
    <div class="container position-relative" style="z-index:1">
      <h2>¿Tenés alguna duda sobre tu pedido?</h2>
      <p style="font-size:1.1rem;margin-bottom:2rem;opacity:.9">Nuestro equipo responde en menos de 2 horas.</p>
      <a href="/contacto" class="btn-outline-gf">Contactanos</a>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
   @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>