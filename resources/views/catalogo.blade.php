@php
$productos = [
    [
        'nombre'  => 'Alemania Titular 2026',
        'liga'    => 'Selección Alemania',
        'precio'  => '$129',
        'imagen'  => asset('Camisetas/alemania.png'),
        'badge'   => 'Nuevo',
        'badgeStyle' => '',
        'precioOld'  => null,
    ],
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
        'nombre'     => 'Bélgica Titular 2026',
        'liga'       => 'Selección Bélgica',
        'precio'     => '$120',
        'imagen'     => asset('Camisetas/belgica.png'),
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
        'nombre'     => 'Colombia Titular 2026',
        'liga'       => 'Selección Colombia',
        'precio'     => '$115',
        'imagen'     => asset('Camisetas/colombia.png'),
        'badge'      => 'Oferta',
        'badgeStyle' => 'background:#f0a500;color:#000',
        'precioOld'  => '$135',
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
        'nombre'     => 'Francia Titular 2026',
        'liga'       => 'Selección Francia',
        'precio'     => '$145',
        'imagen'     => asset('Camisetas/francia.png'),
        'badge'      => 'Nuevo',
        'badgeStyle' => '',
        'precioOld'  => null,
    ],
    [
        'nombre'     => 'Inglaterra Titular 2026',
        'liga'       => 'Selección Inglaterra',
        'precio'     => '$142',
        'imagen'     => asset('Camisetas/inglaterra.png'),
        'badge'      => null,
        'badgeStyle' => '',
        'precioOld'  => null,
    ],
    [
        'nombre'     => 'Italia Titular 2026',
        'liga'       => 'Selección Italia',
        'precio'     => '$132',
        'imagen'     => asset('Camisetas/italia.png'),
        'badge'      => 'Oferta',
        'badgeStyle' => 'background:#f0a500;color:#000',
        'precioOld'  => '$148',
    ],
    [
        'nombre'     => 'Japón Titular 2026',
        'liga'       => 'Selección Japón',
        'precio'     => '$118',
        'imagen'     => asset('Camisetas/japon.png'),
        'badge'      => null,
        'badgeStyle' => '',
        'precioOld'  => null,
    ],
    [
        'nombre'     => 'México Titular 2026',
        'liga'       => 'Selección México',
        'precio'     => '$122',
        'imagen'     => asset('Camisetas/mexico.png'),
        'badge'      => 'Nuevo',
        'badgeStyle' => '',
        'precioOld'  => null,
    ],
    [
        'nombre'     => 'Portugal Titular 2026',
        'liga'       => 'Selección Portugal',
        'precio'     => '$137',
        'imagen'     => asset('Camisetas/portugal.png'),
        'badge'      => 'Oferta',
        'badgeStyle' => 'background:#f0a500;color:#000',
        'precioOld'  => '$150',
    ],
];
@endphp


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
      
      <p class="page-header-eyebrow mt-2">Temporada actual</p>
      <h1 class="section-title">Catálogo de <span class="text-red">Camisetas</span></h1>
    </div>
  </header>

  <!-- ================================================
       FILTROS (decorativos, sin funcionalidad)
  ================================================ -->
 <!--  <section class="section-surface py-3">
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
  </section> -->

  <!-- ================================================
       GRID DE PRODUCTOS
  ================================================ -->
  <section class="section-dark">
    <div class="container">

      <!-- Contador de resultados -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <p style="color:var(--color-muted);font-size:.88rem;margin:0">Mostrando <strong style="color:var(--color-white)">12 productos</strong></p>
        <!-- <p style="color:var(--color-muted);font-size:.82rem;margin:0">Temporada 2024/25</p> -->
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

      <!-- Paginación decorativa -->
      <!-- <nav class="mt-5 d-flex justify-content-center" aria-label="Paginación">
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
      </nav> -->

    </div>
  </section>

  <!-- CTA -->
   <x-banner
   titulo="¿No encontrás lo que buscás?"
   desc="Consultanos y te buscamos el modelo específico."
   href="/consultas"
   button-name="Hacer una consulta"
/>
  <!-- ================================================
       FOOTER
  ================================================ -->
   @include('partials.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>