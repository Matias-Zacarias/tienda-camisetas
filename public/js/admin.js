async function loadDashboard() {

    const token = localStorage.getItem('token');

    try {

        const response = await fetch(
            '/api/admin/dashboard',
            {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            }
        );

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.message || 'Error al cargar dashboard');
        }

        document.getElementById('totalVentas').textContent =
            `$${Number(data.totalVentas).toLocaleString()}`;

        document.getElementById('totalPedidos').textContent =
            data.totalPedidos;

        document.getElementById('totalProductos').textContent =
            data.totalProductos;

        document.getElementById('totalUsuarios').textContent =
            data.totalUsuarios;

        // TABLA DE PEDIDOS
        const tbody = document.getElementById(
            'ultimosPedidosBody'
        );

        tbody.innerHTML = '';

        data.ultimosPedidos.forEach(pedido => {

            tbody.innerHTML += `
                <tr>
                    <td>#ORD-${pedido.id}</td>
                    <td>${pedido.user?.name ?? 'Sin cliente'}</td>
                    <td>${pedido.detalles.length} productos</td>
                    <td>$${pedido.total}</td>
                    <td>
                        <span class="status ${getStatusClass(pedido.estado)}">
                            ${pedido.estado}
                        </span>
                    </td>
                    <td>
                        ${new Date(
                pedido.created_at
            ).toLocaleDateString('es-AR')}
                    </td>
                </tr>
            `;
        });

    } catch (error) {

        console.error(error);

    }
}