<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GOLEADOR FC — La tienda online de camisetas de fútbol oficiales y alternativas." />
  <title>GOLEADOR FC | Tienda de Camisetas de Fútbol</title>
  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="/css/estilos.css">

</head>

<body>
  <x-navbar />
  <!--  HERO -->
  <x-hero />
  <!--  PRESENTACIÓN-->
  <x-presentacion />
  <!--  PRODUCTOS DESTACADOS -->
  <x-productosDestacados />
  <!-- BANNER  -->
  <x-banner titulo="¿No encontrás tu camiseta?" desc="Hacenos una consulta y buscamos el modelo que necesitás."
    href="/consultas" button-name="Consultar ahora" />
  <x-footer />
  <script>
    const elements = document.querySelectorAll('.reveal, .reveal2');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, {
      threshold: 0.3
    });

    elements.forEach(el => observer.observe(el));
  </script>
  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>