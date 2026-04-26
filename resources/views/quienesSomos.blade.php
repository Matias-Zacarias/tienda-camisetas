<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Conocé la historia y el equipo detrás de GOLEADOR FC." />
  <title>Quiénes Somos | GOLEADOR FC</title>

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
      
      <p class="page-header-eyebrow mt-2">Nuestra empresa</p>
      <h1 class="section-title">Quiénes <span class="text-red">Somos</span></h1>
    </div>
  </header>

  <!-- ================================================
       HISTORIA
  ================================================ -->
  <section class="section-dark">
    <div class="container">
      <div class="row align-items-center g-5">

        <div class="col-lg-6">
          <p class="page-header-eyebrow">Nuestra historia</p>
          <h2 class="section-title mb-3">Una pasión que <span>se viste</span></h2>
          <hr class="section-divider left">
          <p style="color:#b0b0b0">
            Goleador FC nació en 2015 de la pasión de tres amigos futboleros que no encontraban
            camisetas de calidad a precios accesibles. Lo que empezó como un emprendimiento familiar
            en un garaje de Flores hoy es una de las tiendas de referencia en Argentina.
          </p>
          <p style="color:#b0b0b0">
            A lo largo de los años fuimos creciendo: sumamos proveedores internacionales, ampliamos el
            catálogo a más de 500 modelos y construimos una comunidad de más de 15.000 clientes fieles
            en todo el país. Cada camiseta que vendemos lleva consigo la emoción de representar a un
            equipo, una ciudad, una cultura.
          </p>
          <p style="color:#b0b0b0">
            Hoy operamos desde Buenos Aires con logística a todo el territorio nacional, y seguimos
            manteniendo el mismo espíritu de siempre: pasión, honestidad y calidad.
          </p>
        </div>

        <!-- Timeline -->
        <div class="col-lg-6">
          <div class="timeline">

            <div class="timeline-item">
              <div class="timeline-year">2015</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Los comienzos</h4>
              <p class="timeline-text">Nacemos como emprendimiento familiar en el barrio de Flores, Buenos Aires. Primeras 50 ventas por Instagram.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2017</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Primer local</h4>
              <p class="timeline-text">Inauguramos nuestro primer local en Av. Corrientes. Ampliamos el catálogo a más de 100 modelos.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2019</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Expansión nacional</h4>
              <p class="timeline-text">Lanzamos la tienda online y comenzamos envíos a todo el país. Llegamos a 5.000 clientes.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2022</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Boom post-Mundial</h4>
              <p class="timeline-text">Tras el Mundial de Qatar, multiplicamos las ventas x4 y superamos los 10.000 clientes registrados.</p>
            </div>

            <div class="timeline-item">
              <div class="timeline-year">2025</div>
              <h4 style="font-family:var(--font-display);font-size:1.1rem;margin-bottom:.3rem">Hoy</h4>
              <p class="timeline-text">+500 modelos, +15.000 clientes, nueva plataforma online y expansión a mercados de Latinoamérica.</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================================================
       OBJETIVOS / MISIÓN-VISIÓN
  ================================================ -->
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
              Acercar al hincha argentino las mejores camisetas de fútbol del mundo, con calidad
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

  <!-- ================================================
       EQUIPO
  ================================================ -->
  <section class="section-dark">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Las personas detrás</p>
        <h2 class="section-title">Nuestro <span>Equipo</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4 justify-content-center">

        <!-- Miembro 1 -->
        <div class="col-sm-6 col-lg-3">
          <article class="team-card">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&auto=format&fit=crop&q=80"
                 alt="Martín Rodríguez, fundador" loading="lazy" />
            <div class="team-card-body">
              <h3 class="team-name">Martín Rodríguez</h3>
              <p class="team-role">Co-Fundador & CEO</p>
              <p style="color:#777;font-size:.82rem;margin-top:.5rem">Hincha de River, fanático del calcio italiano y la logística.</p>
            </div>
          </article>
        </div>

        <!-- Miembro 2 -->
        <div class="col-sm-6 col-lg-3">
          <article class="team-card">
            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=400&auto=format&fit=crop&q=80"
                 alt="Laura Gómez, directora comercial" loading="lazy" />
            <div class="team-card-body">
              <h3 class="team-name">Laura Gómez</h3>
              <p class="team-role">Directora Comercial</p>
              <p style="color:#777;font-size:.82rem;margin-top:.5rem">Especialista en comercio exterior y negociación con proveedores.</p>
            </div>
          </article>
        </div>

        <!-- Miembro 3 -->
        <div class="col-sm-6 col-lg-3">
          <article class="team-card">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&auto=format&fit=crop&q=80"
                 alt="Diego Peralta, jefe de logística" loading="lazy" />
            <div class="team-card-body">
              <h3 class="team-name">Diego Peralta</h3>
              <p class="team-role">Jefe de Logística</p>
              <p style="color:#777;font-size:.82rem;margin-top:.5rem">Garantiza que cada pedido llegue en tiempo y forma.</p>
            </div>
          </article>
        </div>

        <!-- Miembro 4 -->
        <div class="col-sm-6 col-lg-3">
          <article class="team-card">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&auto=format&fit=crop&q=80"
                 alt="Sofía Torres, atención al cliente" loading="lazy" />
            <div class="team-card-body">
              <h3 class="team-name">Sofía Torres</h3>
              <p class="team-role">Atención al Cliente</p>
              <p style="color:#777;font-size:.82rem;margin-top:.5rem">La voz amigable que responde todas tus dudas al instante.</p>
            </div>
          </article>
        </div>

      </div>
    </div>
  </section>

  <!-- ================================================
       CTA BANNER
  ================================================ -->
  <section class="cta-banner" aria-label="Llamado a la acción">
    <div class="container position-relative" style="z-index:1">
      <h2>Formá parte de nuestra comunidad</h2>
      <p style="font-size:1.1rem;margin-bottom:2rem;opacity:.9">
        Más de 15.000 hinchas ya confían en nosotros. Unite al equipo.
      </p>
      <a href="/catalogo" class="btn-outline-gf">Ver catálogo</a>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
   @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>