@extends('layouts.panelAdmin')

@section('section')

    <div class="page-header">
        <div>
            <h1 class="page-title">Stock de Talles</h1>
            <p class="page-subtitle">Gestioná el inventario por talle</p>
        </div>
    </div>

    {{-- Lista de productos --}}
    <div id="productos-lista">
        {{-- Renderizado por JS --}}
    </div>

    {{-- Panel de stock (se muestra al seleccionar un producto) --}}
    <div id="stock-panel" style="display:none; margin-top:2rem;">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title" id="stock-panel-titulo">—</h3>
                <button class="btn btn-secondary" onclick="cerrarStockPanel()">Cerrar</button>
            </div>

            <div class="size-stock" id="stock-talles-lista">
                {{-- Talles renderizados por JS --}}
            </div>

            <div style="margin-top:2rem;padding-top:1.5rem;border-top:1px solid var(--border-color);">
                <button class="btn btn-primary" onclick="guardarStock()">Guardar Cambios</button>
                <button class="btn btn-secondary" onclick="cerrarStockPanel()">Cancelar</button>
            </div>
        </div>

        <div class="stats-grid" style="margin-top:2rem;">
            <div class="stat-card">
                <div class="stat-icon green">✅</div>
                <div class="stat-label">Total en Stock</div>
                <div class="stat-value" id="stat-total">0</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon orange">⚠️</div>
                <div class="stat-label">Bajo Stock</div>
                <div class="stat-value" id="stat-bajo">0</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon red">❌</div>
                <div class="stat-label">Sin Stock</div>
                <div class="stat-value" id="stat-sin">0</div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script></script>
@endpush