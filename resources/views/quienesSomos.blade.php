<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Conocé la historia y el equipo detrás de GOLEADOR FC." />
  <title>Quiénes Somos | GOLEADOR FC</title>

  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

  <x-navbar />

  <!--  PAGE HEADER -->
  <header class="page-header">
    <div class="container">
      <p class="page-header-eyebrow mt-2">Nuestra empresa</p>
      <h1 class="section-title">Quiénes <span class="text-red">Somos</span></h1>
    </div>
  </header>

  <!-- HISTORIA-->
  <section class="section-dark">
    <div class="container">
      <div class="row align-items-center g-5">

        <div class="col-lg-6">
          <p class="page-header-eyebrow">Nuestra historia</p>
          <h2 class="section-title mb-3">Una pasión que <span>se viste</span></h2>
          <hr class="section-divider left">
          <p style="color:#b0b0b0">
            Goleador FC nació en 2015 de la pasión de dos amigos futboleros que no encontraban
            camisetas de calidad a precios accesibles. Lo que empezó como un emprendimiento familiar
            en un garaje de Corrientes hoy es una de las tiendas de referencia en Argentina.
          </p>
          <p style="color:#b0b0b0">
            A lo largo de los años fuimos creciendo: sumamos proveedores internacionales, ampliamos el
            catálogo con distintas variedad de modelos y construimos una comunidad de más de 15.000 clientes fieles
            en todo el país. Cada camiseta que vendemos lleva consigo la emoción de representar a una
            selección, una ciudad, una cultura.
          </p>
          <p style="color:#b0b0b0">
            Hoy operamos desde Corrientes Capital con logística a todo el territorio nacional, y seguimos
            manteniendo el mismo espíritu de siempre: pasión, honestidad y calidad.
          </p>
        </div>

        <!-- Timeline -->
        <div class="col-lg-6">
          <div class="timeline">

            <div class="timeline-item">
              <div class="timeline-year">2015</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Los comienzos</h4>
              <p class="timeline-text">Nacemos como emprendimiento familiar en el barrio Laguna Seca, Corrientes,
                Capital. Primeras 50 ventas por Instagram.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2017</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Primer local</h4>
              <p class="timeline-text">Inauguramos nuestro primer local en Av. Cazadores Correntinos. Ampliamos el
                catálogo agregando más modelos.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2019</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Expansión nacional</h4>
              <p class="timeline-text">Lanzamos la tienda online y comenzamos envíos a todo el país. Llegamos a 5.000
                clientes.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2022</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Boom post-Mundial</h4>
              <p class="timeline-text">Tras el Mundial de Qatar, multiplicamos las ventas x4 y superamos los 10.000
                clientes registrados.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2026</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Hoy</h4>
              <p class="timeline-text">+15.000 clientes, nueva plataforma online y expansión a mercados de
                Latinoamérica.</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--  OBJETIVOS / MISIÓN-VISIÓN -->
  <section class="section-surface">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Lo que nos mueve</p>
        <h2 class="section-title">Misión, Visión <span>y Valores</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="bi bi-bullseye"></i></div>
            <h3 class="feature-title">Nuestra Misión</h3>
            <p style="color:#888;font-size:.92rem">
              Poder acercarte con las mejores camisetas de fútbol del mundo, con calidad
              garantizada, precios justos y una experiencia de compra simple y confiable.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="bi bi-binoculars"></i></div>
            <h3 class="feature-title">Nuestra Visión</h3>
            <p style="color:#888;font-size:.92rem">
              Convertirnos en la plataforma líder de venta de indumentaria deportiva en Argentina y
              expandirnos a toda Latinoamérica, siendo sinónimo de confianza y pasión por el fútbol.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-card h-100">
            <div class="feature-icon"><i class="bi bi-gem"></i></div>
            <h3 class="feature-title">Nuestros Valores</h3>
            <ul style="color:#888;font-size:.92rem;padding-left:1.2rem;margin:0">
              <li>Pasión por el fútbol</li>
              <li>Honestidad y transparencia</li>
              <li>Calidad sin compromiso</li>
              <li>Atención personalizada</li>
              <li>Compromiso con el cliente</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- BANNER -->
  <x-banner titulo="Formá parte de nuestra comunidad"
    desc="Más de 15.000 usuarios ya confían en nosotros. Unite al equipo." href="/catalogo"
    button-name="Ver catálogo" />

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>