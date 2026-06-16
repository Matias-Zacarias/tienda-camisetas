@extends('layouts.app')

@section('title', 'Confirmar Compra | GOLEADOR FC')

@section('content')

    <section class="section-dark" style="min-height: 80vh">
        <div class="container">

            {{-- Header --}}
            <div class="mb-5">
                <p class="page-header-eyebrow">Último paso</p>
                <h1 class="section-title">Confirmar <span>Compra</span></h1>
                <hr class="section-divider left">
            </div>

            <div class="row g-4 align-items-start">

                {{-- COLUMNA IZQUIERDA — Formulario --}}
                <div class="col-lg-7">

                    {{-- Datos de envío --}}
                    <div class="checkout-card mb-4">
                        <div class="checkout-card-header">

                            <h2 class="checkout-card-title">1 - Datos de Envío</h2>
                        </div>

                        <div class="row g-3">



                            <div class="col-12">
                                <label class="form-label-gf" for="co-telefono">Teléfono</label>
                                <div style="position:relative">
                                    <span class="checkout-input-icon"><i class="bi bi-telephone"></i></span>
                                    <input class="form-control-gf" style="padding-left:2.5rem" type="tel" id="co-telefono"
                                        placeholder="+54 11 1234-5678" autocomplete="tel" />
                                </div>
                                <span class="form-error" data-field="co-telefono"></span>
                            </div>



                            <div class="col-12">
                                <label class="form-label-gf" for="co-direccion">Dirección</label>
                                <div style="position:relative">
                                    <span class="checkout-input-icon"><i class="bi bi-geo-alt"></i></span>
                                    <input class="form-control-gf" style="padding-left:2.5rem" type="text" id="co-direccion"
                                        placeholder="Calle 1234, Piso 2, Dpto B" autocomplete="street-address" />
                                </div>
                                <span class="form-error" data-field="co-direccion"></span>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label-gf" for="co-ciudad">Ciudad</label>
                                <input class="form-control-gf" type="text" id="co-ciudad" placeholder="Buenos Aires"
                                    autocomplete="address-level2" />
                                <span class="form-error" data-field="co-ciudad"></span>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label-gf" for="co-provincia">Provincia</label>
                                <select class="form-control-gf" id="co-provincia">
                                    <option value="" disabled selected>Seleccioná</option>
                                    <option>Buenos Aires</option>
                                    <option>CABA</option>
                                    <option>Córdoba</option>
                                    <option>Santa Fe</option>
                                    <option>Mendoza</option>
                                    <option>Tucumán</option>
                                    <option>Salta</option>
                                    <option>Entre Ríos</option>
                                    <option>Misiones</option>
                                    <option>Chaco</option>
                                    <option>Corrientes</option>
                                    <option>Santiago del Estero</option>
                                    <option>San Juan</option>
                                    <option>Jujuy</option>
                                    <option>Río Negro</option>
                                    <option>Neuquén</option>
                                    <option>Formosa</option>
                                    <option>Chubut</option>
                                    <option>San Luis</option>
                                    <option>Catamarca</option>
                                    <option>La Rioja</option>
                                    <option>La Pampa</option>
                                    <option>Santa Cruz</option>
                                    <option>Tierra del Fuego</option>
                                </select>
                                <span class="form-error" data-field="co-provincia"></span>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label-gf" for="co-cp">Código Postal</label>
                                <input class="form-control-gf" type="text" id="co-cp" placeholder="1043"
                                    autocomplete="postal-code" />
                                <span class="form-error" data-field="co-cp"></span>
                            </div>

                        </div>
                    </div>

                    {{-- Método de envío --}}
                    <div class="checkout-card mb-4">
                        <div class="checkout-card-header">
                            <h2 class="checkout-card-title">2 - Método de Envío</h2>
                        </div>

                        <div class="d-flex flex-column gap-2">

                            <label class="envio-option" id="envio-oca">
                                <input type="radio" name="envio" value="oca" checked />
                                <div class="envio-option-body">
                                    <div class="envio-option-nombre">
                                        <i class="bi bi-box-seam text-red"></i> OCA
                                    </div>
                                    <div class="envio-option-desc">2 a 5 días hábiles</div>
                                </div>
                                <div class="envio-option-precio">$10</div>
                            </label>

                            <label class="envio-option" id="envio-correo">
                                <input type="radio" name="envio" value="correo" />
                                <div class="envio-option-body">
                                    <div class="envio-option-nombre">
                                        <i class="bi bi-truck text-red"></i> Correo Argentino
                                    </div>
                                    <div class="envio-option-desc">5 a 10 días hábiles</div>
                                </div>
                                <div class="envio-option-precio">$3</div>
                            </label>

                            <label class="envio-option" id="envio-retiro">
                                <input type="radio" name="envio" value="retiro" />
                                <div class="envio-option-body">
                                    <div class="envio-option-nombre">
                                        <i class="bi bi-shop text-red"></i> Retiro en local
                                    </div>
                                    <div class="envio-option-desc">Av. Corrientes 1234 — Lun a Sáb 10-20 hs</div>
                                </div>
                                <div class="envio-option-precio" style="color:#22c55e">Gratis</div>
                            </label>

                        </div>
                    </div>

                    {{-- Observaciones --}}
                    <div class="checkout-card mb-4">
                        <div class="checkout-card-header">
                            <h2 class="checkout-card-title">
                                3 - Observaciones
                                <span class="checkout-opcional">opcional</span>
                            </h2>
                        </div>
                        <textarea class="form-control-gf" id="co-obs" rows="3"
                            placeholder="Indicaciones especiales para el envío, horarios de entrega, aclaraciones del pedido..."></textarea>
                    </div>

                </div>

                {{-- COLUMNA DERECHA — Resumen del pedido --}}
                <div class="col-lg-5">
                    <div class="checkout-summary" id="checkout-summary">

                        <div class="checkout-card-header" style="padding:0 0 1rem">
                            <span class="checkout-step-num">📋</span>
                            <h2 class="checkout-card-title">Tu Pedido</h2>
                        </div>

                        {{-- Items (se renderizan con JS desde localStorage) --}}
                        <ul class="checkout-items-list" id="checkout-items"></ul>

                        {{-- Líneas de costo --}}
                        <div class="checkout-cost-lines">
                            <div class="checkout-cost-line">
                                <span>Subtotal</span>
                                <span id="checkout-subtotal">$0</span>
                            </div>
                            <div class="checkout-cost-line">
                                <span>Envío</span>
                                <span id="checkout-envio-costo">$2.800</span>
                            </div>
                            <div class="checkout-cost-line checkout-total-line">
                                <span>Total</span>
                                <span id="checkout-total">$0</span>
                            </div>
                        </div>

                        {{-- Botón confirmar --}}
                        <button type="button" class="detail-add-btn mt-3" onclick="confirmarPedido()">
                            <i class="bi bi-check-circle"></i> Confirmar pedido
                        </button>

                        {{-- Garantías --}}
                        <div class="checkout-garantias">
                            <div class="checkout-garantia-item">
                                <i class="bi bi-shield-check"></i>
                                <span>Compra 100% segura</span>
                            </div>
                            <div class="checkout-garantia-item">
                                <i class="bi bi-arrow-repeat"></i>
                                <span>Cambio de talle gratis</span>
                            </div>
                            <div class="checkout-garantia-item">
                                <i class="bi bi-headset"></i>
                                <span>Soporte en todo momento</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>{{-- /row --}}

            {{-- Modal éxito --}}
            <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="checkout-success-modal modal-content" data-bs-theme="dark">
                        <div class="modal-body text-center p-5">

                            <div class="checkout-success-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <h2
                                style="font-family:var(--font-display);font-size:2rem;letter-spacing:.06em;margin-bottom:.5rem;color:var(--color-white)">
                                ¡Pedido confirmado!
                            </h2>

                            <p style="color:var(--color-muted);margin-bottom:.5rem">
                                Te contactamos en menos de 24 hs hábiles para coordinar el pago y el envío.
                            </p>

                            <p style="color:var(--color-muted);font-size:.85rem;margin-bottom:2rem">
                                Ante cualquier duda escribinos por WhatsApp al
                                <strong style="color:var(--color-white)">+54 9 11 2345-6789</strong>
                            </p>

                            <a href="/" class="btn-primary-gf">Volver al inicio</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
    </script>
@endpush