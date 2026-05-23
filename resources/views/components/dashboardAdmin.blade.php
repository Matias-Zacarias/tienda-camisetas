<section class="section" id="dashboard">
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
                        <div class="stat-change positive">↑ 12.5%</div>
                    </div>
                    <div class="stat-label">Ventas Totales</div>
                    <div class="stat-value">$45,890</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon green">🛍️</div>
                        <div class="stat-change positive">↑ 8.2%</div>
                    </div>
                    <div class="stat-label">Pedidos</div>
                    <div class="stat-value">328</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon orange">📦</div>
                        <div class="stat-change negative">↓ 3.1%</div>
                    </div>
                    <div class="stat-label">Productos</div>
                    <div class="stat-value">156</div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="stat-icon red">👥</div>
                        <div class="stat-change positive">↑ 15.3%</div>
                    </div>
                    <div class="stat-label">Clientes</div>
                    <div class="stat-value">2,847</div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ventas del Último Mes</h3>
                </div>
                <div class="chart-placeholder">
                    📊 Gráfico de ventas (integrar con librería de gráficos)
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Últimos Pedidos</h3>
                    <a href="#" class="btn btn-secondary" data-section="orders">Ver todos</a>
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
                        <tbody>
                            <tr>
                                <td>#ORD-1024</td>
                                <td>María García</td>
                                <td>3 productos</td>
                                <td>$189.90</td>
                                <td><span class="status success">Completado</span></td>
                                <td>20/05/2026</td>
                            </tr>
                            <tr>
                                <td>#ORD-1023</td>
                                <td>Carlos Ruiz</td>
                                <td>1 producto</td>
                                <td>$79.99</td>
                                <td><span class="status warning">En Proceso</span></td>
                                <td>20/05/2026</td>
                            </tr>
                            <tr>
                                <td>#ORD-1022</td>
                                <td>Ana López</td>
                                <td>5 productos</td>
                                <td>$329.50</td>
                                <td><span class="status info">Enviado</span></td>
                                <td>19/05/2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>