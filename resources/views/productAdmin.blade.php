@extends('layouts.panelAdmin')

@section('section')


    <div class="page-header">
        <div>
            <h1 class="page-title">Productos</h1>
            <p class="page-subtitle">Administra tu catálogo de productos</p>
        </div>
        <!-- <button class="btn btn-primary" data-tab="add">
                        <span>+</span> Agregar Producto
                    </button> -->
    </div>

    <div class="tabs">
        <button class="tab active" data-tab="list">📋 Lista</button>
        <button class="tab" data-tab="add">➕ Agregar Producto</button>
        <button class="tab" data-tab="add-talle">➕ Agregar talle</button>
    </div>

    <!-- Product List -->
    <div class="tab-content active" id="list">
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">👕</div>
                <div class="product-info">
                    <div class="product-name">Remera Básica</div>
                    <div class="product-price">$29.99</div>
                    <div class="product-meta">
                        <span>Stock: 45</span>
                        <span>SKU: REM001</span>
                    </div>
                    <div class="action-buttons">
                        <button class="action-btn edit" title="Editar">✏️</button>
                        <button class="action-btn view" title="Ver">👁️</button>
                        <button class="action-btn delete" title="Eliminar">🗑️</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">👖</div>
                <div class="product-info">
                    <div class="product-name">Jean Clásico</div>
                    <div class="product-price">$79.99</div>
                    <div class="product-meta">
                        <span>Stock: 28</span>
                        <span>SKU: JEA001</span>
                    </div>
                    <div class="action-buttons">
                        <button class="action-btn edit" title="Editar">✏️</button>
                        <button class="action-btn view" title="Ver">👁️</button>
                        <button class="action-btn delete" title="Eliminar">🗑️</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">👟</div>
                <div class="product-info">
                    <div class="product-name">Zapatillas Sport</div>
                    <div class="product-price">$129.99</div>
                    <div class="product-meta">
                        <span>Stock: 15</span>
                        <span>SKU: ZAP001</span>
                    </div>
                    <div class="action-buttons">
                        <button class="action-btn edit" title="Editar">✏️</button>
                        <button class="action-btn view" title="Ver">👁️</button>
                        <button class="action-btn delete" title="Eliminar">🗑️</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Form -->

    
    <div class="tab-content" id="add">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Información del Producto</h3>
            </div>

            <form id="productForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Nombre del Producto</label>
                        <input id="productName" type="text" class="form-input" placeholder="Ej: Argentina Titular 2026">
                    </div>

                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Precio</label>
                        <input id="productPrice" type="number" class="form-input" placeholder="0.00" step="0.01">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Precio en descuento:</label>
                        <input id="productDiscountPrice" type="number" class="form-input" placeholder="0.00" step="0.01">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Producto destacado</label>
                        <select id="productFeatured" class="form-select">
                            <option>Si</option>
                            <option>no</option>

                        </select>
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Descripción</label>
                        <textarea id="productDescription" class="form-textarea"
                            placeholder="Describe el producto..."></textarea>
                    </div>
                    <div class="form-group">

                        <label class="form-label">Descripción corta</label>
                        <textarea id="productShortDescription" class="form-textarea"
                            placeholder="Describe el producto..."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Imágenes del Producto</label>
                    <div class="image-upload">
                        <div class="image-upload-icon">📷</div>
                        <p>Haz clic o arrastra imágenes aquí</p>
                        <input type="file" multiple accept="image/*" style="display: none;">
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    <!-- <button type="button" class="btn btn-secondary">Cancelar</button> -->
                </div>
            </form>
        </div>
    </div>


    <div class="tab-content" id="add-talle">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Información del Producto</h3>
            </div>

            <form>
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Producto</label>
                        <select class="form-select">
                            <option>argentina 2026</option>
                            <option>francia </option>
                            <option>españa</option>
                            <option>brasil</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">SLUG</label>
                        <input type="text" class="form-input" placeholder="ARGXL">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Stock:</label>
                        <input type="number" class="form-input" placeholder="0" step="0">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Talle</label>
                        <select class="form-select">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    </div>
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    initProductTabs();
    initProductForm();
</script>
@endpush