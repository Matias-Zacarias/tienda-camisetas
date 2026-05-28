@extends('layouts.panelAdmin')

@section('section')

    <div class="page-header">
        <div>
            <h1 class="page-title">Estadísticas</h1>
            <p class="page-subtitle">Análisis detallado de tu ecommerce</p>
        </div>
        <select class="form-select" style="width: auto;">
            <option>Últimos 7 días</option>
            <option>Últimos 30 días</option>
            <option>Últimos 3 meses</option>
            <option>Último año</option>
        </select>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon blue">💵</div>
                <div class="stat-change positive">↑ 12.5%</div>
            </div>
            <div class="stat-label">Ingresos Totales</div>
            <div class="stat-value">$45,890</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon green">📦</div>
                <div class="stat-change positive">↑ 8.2%</div>
            </div>
            <div class="stat-label">Ventas Completadas</div>
            <div class="stat-value">328</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon orange">📊</div>
                <div class="stat-change positive">↑ 5.1%</div>
            </div>
            <div class="stat-label">Ticket Promedio</div>
            <div class="stat-value">$139.91</div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-icon red">🎯</div>
                <div class="stat-change positive">↑ 3.8%</div>
            </div>
            <div class="stat-label">Tasa de Conversión</div>
            <div class="stat-value">3.2%</div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ventas por Mes</h3>
            </div>
            <div class="chart-placeholder">
                📈 Gráfico de líneas - Ventas mensuales
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Top Productos</h3>
            </div>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Remera Básica</span>
                        <span style="color: var(--accent-primary); font-weight: 700;">145</span>
                    </div>
                    <div style="height: 8px; background: var(--bg-tertiary); border-radius: 4px; overflow: hidden;">
                        <div style="width: 90%; height: 100%; background: var(--accent-primary);"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Jean Clásico</span>
                        <span style="color: var(--accent-success); font-weight: 700;">98</span>
                    </div>
                    <div style="height: 8px; background: var(--bg-tertiary); border-radius: 4px; overflow: hidden;">
                        <div style="width: 60%; height: 100%; background: var(--accent-success);"></div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <span style="font-weight: 600;">Zapatillas Sport</span>
                        <span style="color: var(--accent-warning); font-weight: 700;">85</span>
                    </div>
                    <div style="height: 8px; background: var(--bg-tertiary); border-radius: 4px; overflow: hidden;">
                        <div style="width: 52%; height: 100%; background: var(--accent-warning);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ventas por Categoría</h3>
        </div>
        <div class="chart-placeholder">
            🥧 Gráfico de torta - Distribución por categorías
        </div>
    </div>


@endsection