@extends('layouts.app')

@section('content')


    <section class="section-dark">
        <div class="container">


            <div class="detail-wrap">
                <div class="row g-0">

                    {{-- IMAGEN --}}
                    <div class="col-lg-5">
                        <div class="detail-img-wrap">

                            <img id="detail-main-img" src="" alt="" />

                            <span id="detail-badge" class="detail-badge" style="display:none">
                            </span>

                        </div>
                    </div>
                    {{-- INFO --}}
                    <div class="col-lg-7">
                        <div class="detail-info">

                            <p id="detail-short-description" class="detail-liga">
                            </p>

                            <h1 id="detail-name" class="detail-nombre">
                            </h1>

                            <p id="detail-description" class="detail-desc">
                            </p>

                            {{-- Precio --}}
                            <div class="detail-precio-wrap">
                                <span class="detail-precio-old" id="detail-old-price" style="display:none"></span>

                                <span class="detail-precio" id="detail-price"></span>

                            </div>

                            <div class="detail-label">
                                Talle
                                <span id="talle-seleccionado">— Seleccioná un talle</span>
                            </div>

                            <div class="talle-grid" id="talles-container">
                            </div>

                            {{-- Indicador de stock (se actualiza con JS) --}}
                            <div class="stock-indicator" id="stock-indicator" style="opacity:0">
                                <span class="stock-dot" id="stock-dot"></span>
                                <span class="stock-text" id="stock-text"></span>
                            </div>

                            <div class="detail-label mt-4">
                                Cantidad
                            </div>

                            <div class="quantity-selector">

                                <button type="button" onclick="changeQuantity(-1)">
                                    -
                                </button>

                                <input type="number" id="product-quantity" value="1" min="1" readonly>

                                <button type="button" onclick="changeQuantity(1)">
                                    +
                                </button>

                            </div>

                        </div>
                    </div>

                    {{-- Selector de talles --}}




                    {{-- Botón agregar al carrito --}}
                    <button class="detail-add-btn" type="button" id="btn-agregar" disabled onclick="addToCart()">
                        <i class="bi bi-bag-plus"></i>
                        Agregar al carrito
                    </button>



                </div>{{-- /detail-info --}}
            </div>

        </div>{{-- /row --}}
        </div>{{-- /detail-wrap --}}

        </div>
    </section>


@endsection

{{-- Script de la sección --}}
@push('scripts')
    <script>
        getProductId()
        loadProductDetail()

    </script>
@endpush