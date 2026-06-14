@extends('layouts.panelAdmin')

@section('section')


    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
            <p class="page-subtitle">Resumen general de tu ecommerce</p>
        </div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon blue">💰</div>
                <!-- <div class="stat-change positive">↑ 12.5%</div> -->
            </div>
            <div class="stat-label">Ventas Totales</div>
            <div class="stat-value" id="totalVentas">$0</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon green">🛍️</div>
                <!-- <div class="stat-change positive">↑ 8.2%</div> -->
            </div>
            <div class="stat-label">Pedidos</div>
            <div class="stat-value" id="totalPedidos">0</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon orange">📦</div>
                <!--  <div class="stat-change negative">↓ 3.1%</div> -->
            </div>
            <div class="stat-label">Productos</div>
            <div class="stat-value" id="totalProductos">0</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon red">👥</div>
                <!-- <div class="stat-change positive">↑ 15.3%</div> -->
            </div>
            <div class="stat-label">Clientes</div>
            <div class="stat-value" id="totalUsuarios">0</div>
        </div>
    </div>

    <!-- <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ventas del Último Mes</h3>
                </div>
                <div class="chart-placeholder">
                    📊 Gráfico de ventas (integrar con librería de gráficos)
                </div>
            </div> -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Últimos Pedidos</h3>
            <a href="/panel-admin-pedidos" class="btn btn-secondary" data-section="orders">Ver todos</a>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Productos</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody id="ultimosPedidosBody">
                </tbody>
            </table>
        </div>
    </div>



@endsection

@push('scripts')
    <script>
        loadDashboard();
    </script>
@endpush