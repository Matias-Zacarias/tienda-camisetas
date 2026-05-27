<div class="{{ $colClass ?? 'col-sm-6 col-lg-3' }}">
  <article class="product-card">
    <div class="product-card-img-wrap">
      <img src="{{ $imagen }}" alt="{{ $nombre }}" loading="lazy" />
      @if($badge ?? false)
        <span class="product-badge" style="{{ $badgeStyle ?? '' }}">{{ $badge }}</span>
      @endif
    </div>
    <div class="product-card-body">
      <p class="product-league">{{ $liga }}</p>
      <h3 class="product-name">{{ $nombre }}</h3>
      <div class="product-price">
        @if($precioOld ?? false)
          <span class="price-old">{{ $precioOld }}</span>
        @endif
        {{ $precio }}
      </div>
      <div class="btn-wrapper">
        <!-- <span class="btn-tooltip">Disponible próximamente</span> -->
        <button class="btn-ver-mas" type="button" onclick="addToCart({
      nombre: '{{ $nombre }}',
      liga:   '{{ $liga }}',
      precio: '{{ $precio }}',
      imagen: '{{ $imagen }}'
    })">
          <i class="bi bi-bag-plus me-1"></i> Agregar
        </button>
      </div>
    </div>
  </article>
</div>