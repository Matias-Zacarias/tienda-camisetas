 <section class="section" id="stock">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Stock de Talles</h1>
                    <p class="page-subtitle">Gestiona el inventario por talle</p>
                </div>
                <button class="btn btn-primary">Actualizar Stock</button>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Remera Básica Blanca - SKU: REM001</h3>
                    <div style="display: flex; gap: 0.5rem;">
                        <button class="btn btn-secondary">Ver Producto</button>
                    </div>
                </div>

                <div class="size-stock">
                    <div class="size-row">
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Talle</label>
                            <input type="text" class="form-input" value="XS" readonly>
                        </div>
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Stock Disponible</label>
                            <input type="number" class="form-input" value="15" min="0">
                        </div>
                        <div style="display: flex; align-items: flex-end;">
                            <span class="status success">En Stock</span>
                        </div>
                    </div>

                    <div class="size-row">
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Talle</label>
                            <input type="text" class="form-input" value="S" readonly>
                        </div>
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Stock Disponible</label>
                            <input type="number" class="form-input" value="28" min="0">
                        </div>
                        <div style="display: flex; align-items: flex-end;">
                            <span class="status success">En Stock</span>
                        </div>
                    </div>

                    <div class="size-row">
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Talle</label>
                            <input type="text" class="form-input" value="M" readonly>
                        </div>
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Stock Disponible</label>
                            <input type="number" class="form-input" value="42" min="0">
                        </div>
                        <div style="display: flex; align-items: flex-end;">
                            <span class="status success">En Stock</span>
                        </div>
                    </div>

                    <div class="size-row">
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Talle</label>
                            <input type="text" class="form-input" value="L" readonly>
                        </div>
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Stock Disponible</label>
                            <input type="number" class="form-input" value="8" min="0">
                        </div>
                        <div style="display: flex; align-items: flex-end;">
                            <span class="status warning">Bajo Stock</span>
                        </div>
                    </div>

                    <div class="size-row">
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Talle</label>
                            <input type="text" class="form-input" value="XL" readonly>
                        </div>
                        <div class="form-group" style="margin: 0;">
                            <label class="form-label">Stock Disponible</label>
                            <input type="number" class="form-input" value="0" min="0">
                        </div>
                        <div style="display: flex; align-items: flex-end;">
                            <span class="status danger">Sin Stock</span>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border-color);">
                    <button class="btn btn-primary">Guardar Cambios</button>
                    <button class="btn btn-secondary">Cancelar</button>
                </div>
            </div>

            <!-- Stock Summary -->
            <div class="stats-grid" style="margin-top: 2rem;">
                <div class="stat-card">
                    <div class="stat-icon green">✅</div>
                    <div class="stat-label">Total en Stock</div>
                    <div class="stat-value">93</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon orange">⚠️</div>
                    <div class="stat-label">Bajo Stock</div>
                    <div class="stat-value">8</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon red">❌</div>
                    <div class="stat-label">Sin Stock</div>
                    <div class="stat-value">1</div>
                </div>
            </div>
        </section>
