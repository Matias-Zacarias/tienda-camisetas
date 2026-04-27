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
  <x-header titulo="Nuestra empresa" text1="Quiénes " text2="Somos" />


  <!-- HISTORIA-->
  <x-historia />

  <!--  OBJETIVOS / MISIÓN-VISIÓN -->
  <x-objetivosMision />>

  <!-- BANNER -->
  <x-banner titulo="Formá parte de nuestra comunidad"
    desc="Más de 15.000 usuarios ya confían en nosotros. Unite al equipo." href="/catalogo"
    button-name="Ver catálogo" />

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>