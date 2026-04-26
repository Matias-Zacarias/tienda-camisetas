@php
$productos = [
  [
        'nombre'     => 'Argentina Titular 2026',
        'liga'       => 'Selección Argentina',
        'precio'     => '$135',
        'imagen'     => asset('Camisetas/argentina.png'),
        'badge'      => 'Oferta',
        'badgeStyle' => 'background:#f0a500;color:#000',
        'precioOld'  => '$149',
  ],
  [
        'nombre'     => 'España Titular 2026',
        'liga'       => 'Selección España',
        'precio'     => '$138',
        'imagen'     => asset('Camisetas/españa.png'),
        'badge'      => null,
        'badgeStyle' => '',
        'precioOld'  => null,
  ],
  [
        'nombre'     => 'Brasil Titular 2026',
        'liga'       => 'Selección Brasil',
        'precio'     => '$140',
        'imagen'     => asset('Camisetas/brasil.png'),
        'badge'      => 'Nuevo',
        'badgeStyle' => '',
        'precioOld'  => null,
  ],
  [
        'nombre'     => 'Francia Titular 2026',
        'liga'       => 'Selección Francia',
        'precio'     => '$145',
        'imagen'     => asset('Camisetas/francia.png'),
        'badge'      => 'Nuevo',
        'badgeStyle' => '',
        'precioOld'  => null,
  ],
]
@endphp



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GOLEADOR FC — La tienda online de camisetas de fútbol oficiales y alternativas." />
  <title>GOLEADOR FC | Tienda de Camisetas de Fútbol</title>


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

          <span class="hero-eyebrow">⚽ Temporada actual</span>

          <h1 class="hero-title">
            VISTE TU<br>
            <span class="line-red">PASIÓN</span><br>
            AL MÁXIMO
          </h1>

          <p class="hero-subtitle">
            Camisetas oficiales de todas las selecciones del mundo. Calidad premium, envío a todo el país.
          </p>

          <div class="mb-4">
            <span class="hero-badge">Envío gratis</span>
            <span class="hero-badge">Pago en cuotas</span>
            <span class="hero-badge">Stock permanente</span>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="/catalogo" class="btn-primary-gf">Ver catálogo</a>
            <a href="/consultas" class="btn-outline-gf">Hacer consulta</a>
          </div>

          <!-- Estadísticas rápidas -->
          <div class="hero-stats">
            <!-- <div>
              <div class="hero-stat-number">+500</div>
              <div class="hero-stat-label">Modelos</div>
            </div> -->
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

      <!--  -->

        <div class="col-lg-6">
          <p class="page-header-eyebrow">Sobre nosotros</p>
          <h2 class="section-title mb-3">La tienda de los <span>verdaderos hinchas</span></h2>
          <hr class="section-divider left">
          <p style="color:#b0b0b0">
            Desde 2015 somos la referencia en venta de camisetas de selecciones de fútbol en Argentina. Trabajamos con
            los mejores proveedores para ofrecerte productos de calidad superior.
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
        <!-- <p class="page-header-eyebrow">Temporada 2024/25</p> -->
        <h2 class="section-title">Productos <span>Destacados</span></h2>
        <hr class="section-divider">
      </div>

      <div class="row g-4">

        
          @foreach($productos as $p)
          <x-productCard
          :nombre="$p['nombre']"
          :liga="$p['liga']"
          :precio="$p['precio']"
          :imagen="$p['imagen']"
          :badge="$p['badge'] ?? null"
          :precioOld="$p['precioOld'] ?? null"
          :badgeStyle="$p['badgeStyle'] ?? ''"
          />
          @endforeach
          

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

  <x-banner
   titulo="¿No encontrás tu camiseta?"
   desc="Hacenos una consulta y buscamos el modelo que necesitás."
   href="/consultas"
   button-name="Consultar ahora"
/>

  <!-- ================================================
       FOOTER
  ================================================ -->
  @include('partials.footer')

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>