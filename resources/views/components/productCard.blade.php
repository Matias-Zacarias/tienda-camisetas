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
      <button
  class="btn-ver-mas"
  type="button"
  
  disabled
>
  Ver más
</button>
<span class="btn-tooltip">Disponible próximamente</span>
</div>
    </div>
  </article>
</div>