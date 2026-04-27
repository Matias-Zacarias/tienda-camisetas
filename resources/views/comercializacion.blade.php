<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Métodos de pago, formas de envío y tiempos de entrega — GOLEADOR FC." />
  <title>Comercialización | GOLEADOR FC</title>

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
  <x-header titulo="Comprá con confianza" text1="Cómo " text2="Comprarnos" />
  <!-- 
       MÉTODOS DE PAGO
   -->
  <x-metodosPago />

  <!-- 
       FORMAS DE ENVÍO
   -->
  <x-formasDeEnvio />

  <!-- 
       TIEMPOS DE ENTREGA
   -->
  <x-tiemposEntrega />

  <!-- BANNER -->

  <x-banner titulo="¿Tenés alguna duda sobre tu pedido?" desc="Nuestro equipo responde en menos de 2 horas."
    href="/contacto" button-name="Contactanos" />

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>