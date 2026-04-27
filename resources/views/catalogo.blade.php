<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Catálogo completo de camisetas de fútbol — GOLEADOR FC." />
  <title>Catálogo | GOLEADOR FC</title>

  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

  <x-navbar />

  <!-- 
       PAGE HEADER
   -->
  <x-header titulo="Temporada actual" text1="Catálogo de " text2="Camisetas" />

  <!-- 
       FILTROS (PROXIMANENTE)
   -->
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

  <!-- 
       GRID DE PRODUCTOS
   -->
  <x-gridProductos />


  <!-- BANNER -->
  <x-banner titulo="¿No encontrás lo que buscás?" desc="Consultanos y te buscamos el modelo específico."
    href="/consultas" button-name="Hacer una consulta" />

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>