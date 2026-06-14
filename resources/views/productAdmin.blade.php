@extends('layouts.panelAdmin')

@section('section')

    <div class="page-header">
        <div>
            <h1 class="page-title">Productos</h1>
            <p class="page-subtitle">Administra tu catálogo de productos</p>
        </div>

    </div>

    <div class="tabs">
        <button class="tab active" data-tab="list">📋 Lista</button>
        <button class="tab" data-tab="add">➕ Agregar Producto</button>
        <button class="tab" data-tab="add-talle">➕ Agregar talle</button>
    </div>

    <!-- Product List -->
    <div class="tab-content active" id="list">
        <div id="productsContainer" class="product-grid">

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

                <div class="form-grid">

                    <label for="productImage" class="image-upload">
                        <div class="image-upload-icon">📷</div>
                        <p>Haz clic o arrastra imágenes aquí</p>
                    </label>
                    <input id="productImage" type="file" accept="image/*" style="display:none;">



                    <div id="imagePreviewContainer"></div>

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

            <form id="talleForm">
                <div class="form-grid">
                    <div class="form-group">
                        <label class="form-label">Producto</label>
                        <select id="talleProduct" class="form-select">
                            <option value="">Seleccione un producto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Talle</label>
                        <select id="talleName" class="form-select">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    </div>

                </div>


                <div class="form-group">
                    <label class="form-label">Stock:</label>
                    <input id="talleStock" type="number" class="form-input" placeholder="0" step="0">
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    <!-- <button type="button" class="btn btn-secondary">Cancelar</button> -->
                </div>
            </form>
        </div>
    </div>


    <div id="productModal" class="custom-modal">

        <div class="custom-modal-content">

            <div class="custom-modal-header">

                <h3>Editar Producto</h3>

                <button type="button" onclick="closeProductModal()">
                    ✖
                </button>
            </div>

            <form id="editProductForm">

                <input type="hidden" id="editProductId">

                <div class="form-group">
                    <label>Nombre</label>

                    <input id="editProductName" class="form-input">
                </div>
                <div class="form-grid">


                    <div class="form-group">
                        <label>Precio</label>

                        <input id="editProductPrice" type="text" class="form-input">
                    </div>

                    <div class="form-group">
                        <label>Descuento</label>
                        <input id="editProductDiscountPrice" type="text" class="form-input">

                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">

                        <label>Descripción</label>

                        <textarea id="editProductDescription" class="form-textarea"></textarea>

                    </div>

                    <div class="form-group">

                        <label>Descripción corta</label>

                        <textarea id="editProductShortDescription" class="form-textarea"></textarea>

                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">

                        <label>Imagen actual</label>

                        <img id="editImagePreview"
                            style=" width:200px;display:block;margin-bottom:10px;border-radius:8px; ">

                        <input id="editProductImage" type="file" accept="image/*" class="form-input">

                    </div>
                </div>
                <div class="action-buttons">

                    <button type="submit" class="btn btn-primary">

                        Guardar Cambios

                    </button>

                </div>

            </form>

        </div>

    </div>



@endsection

@push('scripts')
    <script>
        initProductTabs();
        initProductForm();
        initEditProductForm();
        initTalleForm();
        initImagePreview();
        initEditImagePreview();
        loadProducts();
    </script>
@endpush