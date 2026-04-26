<!DOCTYPE html>
<html lang="es">
<head>
  ...
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<!-- Activación global de tooltips -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltips.forEach(el => new bootstrap.Tooltip(el));
  });
</script>
<body>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>