@php
  $productos = [
    [
      'nombre' => 'Alemania Titular 2026',
      'liga' => 'Selección Alemania',
      'precio' => '$129',
      'imagen' => asset('Camisetas/alemania.png'),
      'badge' => 'Nuevo',
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Argentina Titular 2026',
      'liga' => 'Selección Argentina',
      'precio' => '$135',
      'imagen' => asset('Camisetas/argentina.png'),
      'badge' => 'Oferta',
      'badgeStyle' => 'background:#f0a500;color:#000',
      'precioOld' => '$149',
    ],
    [
      'nombre' => 'Bélgica Titular 2026',
      'liga' => 'Selección Bélgica',
      'precio' => '$120',
      'imagen' => asset('Camisetas/belgica.png'),
      'badge' => null,
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Brasil Titular 2026',
      'liga' => 'Selección Brasil',
      'precio' => '$140',
      'imagen' => asset('Camisetas/brasil.png'),
      'badge' => 'Nuevo',
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Colombia Titular 2026',
      'liga' => 'Selección Colombia',
      'precio' => '$115',
      'imagen' => asset('Camisetas/colombia.png'),
      'badge' => 'Oferta',
      'badgeStyle' => 'background:#f0a500;color:#000',
      'precioOld' => '$135',
    ],
    [
      'nombre' => 'España Titular 2026',
      'liga' => 'Selección España',
      'precio' => '$138',
      'imagen' => asset('Camisetas/españa.png'),
      'badge' => null,
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Francia Titular 2026',
      'liga' => 'Selección Francia',
      'precio' => '$145',
      'imagen' => asset('Camisetas/francia.png'),
      'badge' => 'Nuevo',
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Inglaterra Titular 2026',
      'liga' => 'Selección Inglaterra',
      'precio' => '$142',
      'imagen' => asset('Camisetas/inglaterra.png'),
      'badge' => null,
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Italia Titular 2026',
      'liga' => 'Selección Italia',
      'precio' => '$132',
      'imagen' => asset('Camisetas/italia.png'),
      'badge' => 'Oferta',
      'badgeStyle' => 'background:#f0a500;color:#000',
      'precioOld' => '$148',
    ],
    [
      'nombre' => 'Japón Titular 2026',
      'liga' => 'Selección Japón',
      'precio' => '$118',
      'imagen' => asset('Camisetas/japon.png'),
      'badge' => null,
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'México Titular 2026',
      'liga' => 'Selección México',
      'precio' => '$122',
      'imagen' => asset('Camisetas/mexico.png'),
      'badge' => 'Nuevo',
      'badgeStyle' => '',
      'precioOld' => null,
    ],
    [
      'nombre' => 'Portugal Titular 2026',
      'liga' => 'Selección Portugal',
      'precio' => '$137',
      'imagen' => asset('Camisetas/portugal.png'),
      'badge' => 'Oferta',
      'badgeStyle' => 'background:#f0a500;color:#000',
      'precioOld' => '$150',
    ],
  ];
@endphp


<section class="section-dark">
  <div class="container">

    <!-- Contador de resultados -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <!-- <p style="color:var(--color-muted);font-size:.88rem;margin:0">Mostrando <strong
          style="color:var(--color-white)">12 productos</strong></p> -->
      <!-- <p style="color:var(--color-muted);font-size:.82rem;margin:0">Temporada 2024/25</p> -->
    </div>




    <div id="featured-products" class="row g-4"></div>





  </div>
</section>