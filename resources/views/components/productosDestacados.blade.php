@php
    $productos = [
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
            'nombre' => 'España Titular 2026',
            'liga' => 'Selección España',
            'precio' => '$138',
            'imagen' => asset('Camisetas/españa.png'),
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
            'nombre' => 'Francia Titular 2026',
            'liga' => 'Selección Francia',
            'precio' => '$145',
            'imagen' => asset('Camisetas/francia.png'),
            'badge' => 'Nuevo',
            'badgeStyle' => '',
            'precioOld' => null,
        ],
    ]
@endphp

<section class="section-dark">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Productos <span>Destacados</span></h2>
            <hr class="section-divider">
        </div>

        <div class="row g-4">

            @foreach($productos as $p)
                <x-productCard :nombre="$p['nombre']" :liga="$p['liga']" :precio="$p['precio']" :imagen="$p['imagen']"
                    :badge="$p['badge'] ?? null" :precioOld="$p['precioOld'] ?? null" :badgeStyle="$p['badgeStyle'] ?? ''" />
            @endforeach

        </div>

        <!-- CTA ver catálogo -->
        <div class="text-center mt-5">
            <a href="/catalogo" class="btn-primary-gf">Ver catálogo completo</a>
        </div>

    </div>
</section>