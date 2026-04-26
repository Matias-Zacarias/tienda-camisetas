<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GOLEADOR FC — La tienda online de camisetas de fútbol oficiales y alternativas." />
  <title>GOLEADOR FC | Tienda de Camisetas de Fútbol</title>


  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="/css/estilos.css">

</head>
<body>

  <!-- ================================================
       NAVBAR
  ================================================ -->
  @include('partials.navbar')

  <!-- ================================================
       HERO
  ================================================ -->
  <section class="hero" aria-label="Sección principal">
    <div class="hero-bg" role="img" aria-label="Estadio de fútbol"></div>

    <div class="container hero-content">
      <div class="row">
        <div class="col-lg-7 col-xl-6">

          <span class="hero-eyebrow">⚽ Temporada 2024/25</span>

          <h1 class="hero-title">
            VISTE TU<br>
            <span class="line-red">PASIÓN</span><br>
            AL MÁXIMO
          </h1>

          <p class="hero-subtitle">
            Camisetas oficiales y alternativas de los mejores clubes y selecciones del mundo. Calidad premium, envío a todo el país.
          </p>

          <div class="mb-4">
            <span class="hero-badge">Envío gratis +$30.000</span>
            <span class="hero-badge">Pago en cuotas</span>
            <span class="hero-badge">Stock permanente</span>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="/catalogo" class="btn-primary-gf">Ver catálogo</a>
            <a href="/consultas" class="btn-outline-gf">Hacer consulta</a>
          </div>

          <!-- Estadísticas rápidas -->
          <div class="hero-stats">
            <div>
              <div class="hero-stat-number">+500</div>
              <div class="hero-stat-label">Modelos</div>
            </div>
            <div>
              <div class="hero-stat-number">+15K</div>
              <div class="hero-stat-label">Clientes</div>
            </div>
            <div>
              <div class="hero-stat-number">5★</div>
              <div class="hero-stat-label">Valoración</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ================================================
       PRESENTACIÓN
  ================================================ -->
  <section class="section-surface">
    <div class="container">
      <div class="row align-items-center g-5">

        <div class="col-lg-6">
          <p class="page-header-eyebrow">Sobre nosotros</p>
          <h2 class="section-title mb-3">La tienda de los <span>verdaderos hinchas</span></h2>
          <hr class="section-divider left">
          <p style="color:#b0b0b0">
            Desde 2015 somos la referencia en venta de camisetas de fútbol en Argentina. Trabajamos con
            los mejores proveedores para ofrecerte productos de calidad superior: desde la camiseta de tu
            club local hasta las de las ligas más exigentes del mundo.
          </p>
          <p style="color:#b0b0b0" class="mb-4">
            Nuestro compromiso es simple: calidad real, precio justo y atención personalizada.
            Cada camiseta pasa por un control de calidad antes de llegar a tus manos.
          </p>
          <a href="/about" class="btn-outline-gf">Conocé nuestra historia</a>
        </div>

        <div class="col-lg-6">
          <div class="row g-3">
            <!-- tarjetas de propuesta de valor -->
            <div class="col-6">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                <div class="feature-title">Calidad Garantizada</div>
                <p style="color:#888;font-size:.88rem;margin:0">Material premium con todos los detalles originales.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-truck"></i></div>
                <div class="feature-title">Envío a Todo el País</div>
                <p style="color:#888;font-size:.88rem;margin:0">Correo Argentino y OCA. Llegamos donde estés.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-credit-card"></i></div>
                <div class="feature-title">Pago en Cuotas</div>
                <p style="color:#888;font-size:.88rem;margin:0">Tarjetas de crédito, débito y transferencia.</p>
              </div>
            </div>
            <div class="col-6">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-headset"></i></div>
                <div class="feature-title">Soporte 24/7</div>
                <p style="color:#888;font-size:.88rem;margin:0">WhatsApp e Instagram siempre activos.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================================================
       PRODUCTOS DESTACADOS
  ================================================ -->
  <section class="section-dark">
    <div class="container">

      <div class="text-center mb-5">
        <p class="page-header-eyebrow">Temporada 2024/25</p>
        <h2 class="section-title">Productos <span>Destacados</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4">

        <!-- Producto 1 -->
        <div class="col-sm-6 col-lg-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Argentina 2024" loading="lazy" />
              <span class="product-badge">Nuevo</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Argentina</p>
              <h3 class="product-name">Camiseta Argentina 2024</h3>
              <div class="product-price">$29.999</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 2 -->
        <div class="col-sm-6 col-lg-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Real Madrid 2024" loading="lazy" />
              <span class="product-badge" style="background:#f0a500;color:#000">Oferta</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">La Liga · España</p>
              <h3 class="product-name">Real Madrid 2024/25</h3>
              <div class="product-price">
                <span class="price-old">$34.000</span>$27.499
              </div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 3 -->
        <div class="col-sm-6 col-lg-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Brasil 2024" loading="lazy" />
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Brasil</p>
              <h3 class="product-name">Brasil Titular 2024</h3>
              <div class="product-price">$28.500</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 4 -->
        <div class="col-sm-6 col-lg-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Manchester City 2024" loading="lazy" />
              <span class="product-badge">Nuevo</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Premier League · Inglaterra</p>
              <h3 class="product-name">Manchester City 24/25</h3>
              <div class="product-price">$31.000</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

      </div>

      <!-- CTA ver catálogo -->
      <div class="text-center mt-5">
        <a href="/catalogo" class="btn-primary-gf">Ver catálogo completo</a>
      </div>

    </div>
  </section>

  <!-- ================================================
       BANNER CTA
  ================================================ -->
  <section class="cta-banner" aria-label="Llamado a la acción">
    <div class="container position-relative" style="z-index:1">
      <h2>¿No encontrás tu camiseta?</h2>
      <p style="font-size:1.1rem;margin-bottom:2rem;opacity:.9">
        Hacenos una consulta y buscamos el modelo que necesitás.
      </p>
      <a href="/consultas" class="btn-outline-gf">Consultar ahora</a>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
  @include('partials.footer')

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>