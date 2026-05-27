<nav class="navbar navbar-expand-lg navbar-gf fixed-top" aria-label="Navegación principal">
  <div class="container">

    {{-- Marca --}}
    <div class="navbar-brand-gf">
      <i class="bi bi-dribbble"></i>
      GOLEADOR<span class="brand-accent">FC</span>
    </div>

    {{-- Mobile: carrito + toggler (siempre visibles) --}}
    <div class="d-flex align-items-center gap-2 d-lg-none">

      <button class="navbar-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas"
        aria-label="Ver carrito">
        <i class="bi bi-bag"></i>
        <span class="cart-badge" id="cart-badge-mobile">0</span>
      </button>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="Menú">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>

    {{-- Links --}}
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav gap-1 align-items-lg-center mt-3 mt-lg-0">

        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('/') ? 'active' : '' }}" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('about') ? 'active' : '' }}" href="/about">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('catalogo') ? 'active' : '' }}" href="/catalogo">Catálogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('comercializacion') ? 'active' : '' }}"
            href="/comercializacion">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('consultas') ? 'active' : '' }}" href="/consultas">Consultas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-gf {{ request()->is('contacto') ? 'active' : '' }}" href="/contacto">Contacto</a>
        </li>

        {{-- Desktop: carrito al final de los links --}}
        <li class="nav-item d-none d-lg-flex align-items-center ms-2">
          <button class="navbar-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas"
            aria-label="Ver carrito">
            <i class="bi bi-bag"></i>
            <span class="cart-badge" id="cart-badge-desktop">0</span>
          </button>
        </li>

      </ul>
    </div>
  </div>
</nav>

{{-- ================================================
OFFCANVAS — Panel del carrito
================================================ --}}
<div class="offcanvas offcanvas-end cart-offcanvas" tabindex="-1" id="cartOffcanvas"
  aria-labelledby="cartOffcanvasLabel">

  {{-- Header --}}
  <div class="offcanvas-header cart-offcanvas-header">
    <h5 class="offcanvas-title cart-offcanvas-title" id="cartOffcanvasLabel">
      <i class="bi bi-bag me-2 text-red"></i>Mi Carrito
    </h5>
    <button type="button" class="cart-close-btn" data-bs-dismiss="offcanvas" aria-label="Cerrar">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  {{-- Body --}}
  <div class="offcanvas-body cart-offcanvas-body">

    {{-- Lista de items --}}
    <div id="cart-items">
      {{-- Estado vacío (por defecto) --}}
      <div id="cart-empty" class="cart-empty">
        <i class="bi bi-bag-x"></i>
        <p>Tu carrito está vacío</p>
        <small>Agregá productos desde el catálogo</small>
      </div>

      {{-- Items se renderizan acá con JS --}}
      <ul id="cart-list" class="cart-list" style="display:none"></ul>
    </div>

  </div>

  {{-- Footer con total --}}
  <div class="cart-offcanvas-footer" id="cart-footer" style="display:none">
    <div class="cart-total">
      <span>Total</span>
      <span class="cart-total-price" id="cart-total">$0</span>
    </div>
    <button class="btn-primary-gf w-100 mt-3" type="button" style="text-align:center">
      <i class="bi bi-lock me-2"></i>Finalizar compra
      <small style="display:block;font-size:.7rem;opacity:.7;font-family:var(--font-body);letter-spacing:0">Próximamente
        disponible</small>
    </button>
  </div>

</div>