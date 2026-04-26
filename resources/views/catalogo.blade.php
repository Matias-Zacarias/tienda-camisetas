<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Catálogo completo de camisetas de fútbol — GOLEADOR FC." />
  <title>Catálogo | GOLEADOR FC</title>

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
      
      <p class="page-header-eyebrow mt-2">Temporada 2024/25</p>
      <h1 class="section-title">Catálogo de <span class="text-red">Camisetas</span></h1>
    </div>
  </header>

  <!-- ================================================
       FILTROS (decorativos, sin funcionalidad)
  ================================================ -->
  <section class="section-surface py-3">
    <div class="container">
      <div class="d-flex flex-wrap gap-2 align-items-center">
        <span style="color:var(--color-muted);font-size:.85rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase">Filtrar por:</span>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem;background:var(--color-red);border-color:var(--color-red)" type="button">Todos</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Selecciones</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Clubes Europeos</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Clubes Locales</button>
        <button class="btn-ver-mas" style="width:auto;padding:.35rem 1rem;font-size:.85rem" type="button">Ofertas</button>
      </div>
    </div>
  </section>

  <!-- ================================================
       GRID DE PRODUCTOS
  ================================================ -->
  <section class="section-dark">
    <div class="container">

      <!-- Contador de resultados -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <p style="color:var(--color-muted);font-size:.88rem;margin:0">Mostrando <strong style="color:var(--color-white)">12 productos</strong></p>
        <p style="color:var(--color-muted);font-size:.82rem;margin:0">Temporada 2024/25</p>
      </div>

      <div class="row g-4">

        <!-- Producto 1 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Selección Argentina Titular 2024" loading="lazy" />
              <span class="product-badge">Nuevo</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Argentina</p>
              <h3 class="product-name">Argentina Titular 2024</h3>
              <div class="product-price">$29.999</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 2 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Real Madrid Titular 2024/25" loading="lazy" />
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
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1516117172878-fd2c41f4a759?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Brasil Titular 2024" loading="lazy" />
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
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Manchester City 2024/25" loading="lazy" />
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

        <!-- Producto 5 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1614632537423-1e6c2e7e0aab?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Barcelona Titular 2024/25" loading="lazy" />
              <span class="product-badge" style="background:#f0a500;color:#000">Oferta</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">La Liga · España</p>
              <h3 class="product-name">Barcelona Titular 24/25</h3>
              <div class="product-price">
                <span class="price-old">$32.000</span>$26.999
              </div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 6 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Boca Juniors Titular 2024" loading="lazy" />
            </div>
            <div class="product-card-body">
              <p class="product-league">Liga Profesional · Argentina</p>
              <h3 class="product-name">Boca Juniors Titular 2024</h3>
              <div class="product-price">$24.500</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 7 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta River Plate Titular 2024" loading="lazy" />
              <span class="product-badge">Nuevo</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Liga Profesional · Argentina</p>
              <h3 class="product-name">River Plate Titular 2024</h3>
              <div class="product-price">$24.500</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 8 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1606229365485-93a3b8ee0385?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Francia Titular 2024" loading="lazy" />
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Francia</p>
              <h3 class="product-name">Francia Titular 2024</h3>
              <div class="product-price">$30.000</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 9 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1509563268479-0f004cf3f58b?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Bayern Munich 2024/25" loading="lazy" />
              <span class="product-badge" style="background:#f0a500;color:#000">Oferta</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Bundesliga · Alemania</p>
              <h3 class="product-name">Bayern Munich 24/25</h3>
              <div class="product-price">
                <span class="price-old">$33.000</span>$27.999
              </div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 10 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Portugal Titular 2024" loading="lazy" />
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Portugal</p>
              <h3 class="product-name">Portugal Titular 2024</h3>
              <div class="product-price">$29.000</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 11 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Juventus 2024/25" loading="lazy" />
              <span class="product-badge">Nuevo</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Serie A · Italia</p>
              <h3 class="product-name">Juventus 2024/25</h3>
              <div class="product-price">$28.000</div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

        <!-- Producto 12 -->
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <article class="product-card">
            <div class="product-card-img-wrap">
              <img src="https://images.unsplash.com/photo-1560272564-c83b66b1ad12?w=600&auto=format&fit=crop&q=80"
                   alt="Camiseta Argentina Alternativa 2024" loading="lazy" />
              <span class="product-badge" style="background:#f0a500;color:#000">Oferta</span>
            </div>
            <div class="product-card-body">
              <p class="product-league">Selección Argentina</p>
              <h3 class="product-name">Argentina Alternativa 2024</h3>
              <div class="product-price">
                <span class="price-old">$29.999</span>$25.499
              </div>
              <button class="btn-ver-mas" type="button">Ver más</button>
            </div>
          </article>
        </div>

      </div><!-- /row -->

      <!-- Paginación decorativa -->
      <nav class="mt-5 d-flex justify-content-center" aria-label="Paginación">
        <ul class="pagination" style="gap:.5rem">
          <li class="page-item">
            <a class="page-link"
               style="background:var(--color-surface);border-color:var(--color-border);color:var(--color-muted);border-radius:var(--radius)"
               href="#">«</a>
          </li>
          <li class="page-item">
            <a class="page-link"
               style="background:var(--color-red);border-color:var(--color-red);color:#fff;border-radius:var(--radius)"
               href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link"
               style="background:var(--color-surface);border-color:var(--color-border);color:var(--color-muted);border-radius:var(--radius)"
               href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link"
               style="background:var(--color-surface);border-color:var(--color-border);color:var(--color-muted);border-radius:var(--radius)"
               href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link"
               style="background:var(--color-surface);border-color:var(--color-border);color:var(--color-muted);border-radius:var(--radius)"
               href="#">»</a>
          </li>
        </ul>
      </nav>

    </div>
  </section>

  <!-- CTA -->
  <section class="cta-banner" aria-label="Llamado a la acción">
    <div class="container position-relative" style="z-index:1">
      <h2>¿No encontrás lo que buscás?</h2>
      <p style="font-size:1.1rem;margin-bottom:2rem;opacity:.9">Consultanos y te buscamos el modelo específico.</p>
      <a href="/consultas" class="btn-outline-gf">Hacer una consulta</a>
    </div>
  </section>

  <!-- ================================================
       FOOTER
  ================================================ -->
   @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>