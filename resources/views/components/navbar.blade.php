<nav class="navbar navbar-expand-lg navbar-gf fixed-top" aria-label="Navegación principal">
  <div class="container">

    <!-- Marca -->
    <div class="navbar-brand-gf">
      <i class="bi bi-dribbble"></i>
      GOLEADOR<span class="brand-accent">FC</span>
    </div>

    <!-- Toggler mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
      aria-controls="navMenu" aria-expanded="false" aria-label="Menú">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav gap-1 align-items-lg-center mt-3 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('/') ? 'active' : '' }}" href="/">
            Inicio
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('about') ? 'active' : '' }}" href="/about">
            Quiénes Somos
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('catalogo') ? 'active' : '' }}" href="/catalogo">
            Catálogo
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('comercializacion') ? 'active' : '' }}" href="/comercializacion">
            Comercialización
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('consultas') ? 'active' : '' }}" href="/consultas">
            Consultas
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('contacto') ? 'active' : '' }}" href="/contacto">
            Contacto
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>