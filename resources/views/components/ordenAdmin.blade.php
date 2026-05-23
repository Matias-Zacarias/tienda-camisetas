<section class="section" id="orders">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Pedidos</h1>
                    <p class="page-subtitle">Gestiona todos los pedidos de tu tienda</p>
                </div>
                <div class="action-buttons">
                    <button class="btn btn-secondary">Exportar</button>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Todos los Pedidos</h3>
                    <div style="display: flex; gap: 0.5rem;">
                        <select class="form-select" style="width: auto;">
                            <option>Todos los estados</option>
                            <option>Pendiente</option>
                            <option>En Proceso</option>
                            <option>Enviado</option>
                            <option>Completado</option>
                            <option>Cancelado</option>
                        </select>
                    </div>
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#ORD-1024</strong></td>
                                <td>María García<br><small style="color: var(--text-secondary);">maria@email.com</small>
                                </td>
                                <td>3 productos</td>
                                <td><strong>$189.90</strong></td>
                                <td>
                                    <select class="form-select status success"
                                        style="width: auto; padding: 0.4rem 0.6rem;">
                                        <option>Pendiente</option>
                                        <option>En Proceso</option>
                                        <option>Enviado</option>
                                        <option selected>Completado</option>
                                        <option>Cancelado</option>
                                    </select>
                                </td>
                                <td>20/05/2026<br><small style="color: var(--text-secondary);">10:30 AM</small></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view" title="Ver Detalles">👁️</button>
                                        <button class="action-btn edit" title="Editar">✏️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD-1023</strong></td>
                                <td>Carlos Ruiz<br><small style="color: var(--text-secondary);">carlos@email.com</small>
                                </td>
                                <td>1 producto</td>
                                <td><strong>$79.99</strong></td>
                                <td>
                                    <select class="form-select status warning"
                                        style="width: auto; padding: 0.4rem 0.6rem;">
                                        <option>Pendiente</option>
                                        <option selected>En Proceso</option>
                                        <option>Enviado</option>
                                        <option>Completado</option>
                                        <option>Cancelado</option>
                                    </select>
                                </td>
                                <td>20/05/2026<br><small style="color: var(--text-secondary);">09:15 AM</small></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view" title="Ver Detalles">👁️</button>
                                        <button class="action-btn edit" title="Editar">✏️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD-1022</strong></td>
                                <td>Ana López<br><small style="color: var(--text-secondary);">ana@email.com</small></td>
                                <td>5 productos</td>
                                <td><strong>$329.50</strong></td>
                                <td>
                                    <select class="form-select status info"
                                        style="width: auto; padding: 0.4rem 0.6rem;">
                                        <option>Pendiente</option>
                                        <option>En Proceso</option>
                                        <option selected>Enviado</option>
                                        <option>Completado</option>
                                        <option>Cancelado</option>
                                    </select>
                                </td>
                                <td>19/05/2026<br><small style="color: var(--text-secondary);">08:45 PM</small></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view" title="Ver Detalles">👁️</button>
                                        <button class="action-btn edit" title="Editar">✏️</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Order Details Card -->
            <div class="card" style="margin-top: 2rem;">
                <div class="card-header">
                    <h3 class="card-title">Detalles del Pedido #ORD-1024</h3>
                    <button class="btn btn-secondary">Cerrar</button>
                </div>

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
                    <div>
                        <h4 style="margin-bottom: 1rem; font-size: 1.1rem;">Productos</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Talle</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Remera Básica Blanca</td>
                                    <td>M</td>
                                    <td>2</td>
                                    <td>$29.99</td>
                                    <td>$59.98</td>
                                </tr>
                                <tr>
                                    <td>Jean Clásico</td>
                                    <td>32</td>
                                    <td>1</td>
                                    <td>$79.99</td>
                                    <td>$79.99</td>
                                </tr>
                                <tr>
                                    <td>Zapatillas Sport</td>
                                    <td>42</td>
                                    <td>1</td>
                                    <td>$49.93</td>
                                    <td>$49.93</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <h4 style="margin-bottom: 1rem; font-size: 1.1rem;">Resumen</h4>
                        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem;">
                                <span>Subtotal:</span>
                                <strong>$189.90</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.75rem;">
                                <span>Envío:</span>
                                <strong>$0.00</strong>
                            </div>
                            <div style="height: 1px; background: var(--border-color); margin: 1rem 0;"></div>
                            <div style="display: flex; justify-content: space-between; font-size: 1.2rem;">
                                <strong>Total:</strong>
                                <strong style="color: var(--accent-primary);">$189.90</strong>
                            </div>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.1rem;">Cliente</h4>
                        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 12px;">
                            <p style="margin-bottom: 0.5rem;"><strong>María García</strong></p>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 0.25rem;">
                                maria@email.com</p>
                            <p style="color: var(--text-secondary); font-size: 0.9rem;">+54 11 1234-5678</p>
                        </div>

                        <h4 style="margin: 1.5rem 0 1rem; font-size: 1.1rem;">Dirección de Envío</h4>
                        <div style="background: var(--bg-tertiary); padding: 1.5rem; border-radius: 12px;">
                            <p style="color: var(--text-secondary); font-size: 0.9rem; line-height: 1.6;">
                                Av. Corrientes 1234<br>
                                CABA, Buenos Aires<br>
                                CP: 1043<br>
                                Argentina
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>