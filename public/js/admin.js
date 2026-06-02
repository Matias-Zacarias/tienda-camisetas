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

        console.log("respuesta de la ruta admin", data)

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

function initProductTabs() {

    const tabs = document.querySelectorAll('.tab');

    tabs.forEach(tab => {

        tab.addEventListener('click', () => {

            const target = tab.dataset.tab;

            changeProductTab(target);

        });

    });

}

function changeProductTab(tabId) {

    document
        .querySelectorAll('.tab')
        .forEach(tab => tab.classList.remove('active'));

    document
        .querySelector(`[data-tab="${tabId}"]`)
        ?.classList.add('active');

    document
        .querySelectorAll('.tab-content')
        .forEach(content => content.classList.remove('active'));

    document
        .getElementById(tabId)
        ?.classList.add('active');

}

function showAddProduct() {

    changeProductTab('add');

}




async function createProduct(event) {

    console.log('ENTRO A CREATE PRODUCT');

    event.preventDefault();

   

    const token = localStorage.getItem('token');

    const body = {
        name: document.getElementById('productName').value.trim(),
        price: Number(
            document.getElementById('productPrice').value
        ),
        discount_price: Number(
            document.getElementById('productDiscountPrice').value
        ) || null,
        featured:
            document.getElementById('productFeatured').value === 'Si',

        description:
            document.getElementById('productDescription').value.trim(),

        short_description:
            document.getElementById('productShortDescription').value.trim(),

        image:
            'https://res.cloudinary.com/dtqyrpgxv/image/upload/v1779310965/xpfcp22acsg3fdomsu75.webp'
    };

    try {

        const response = await fetch('/api/products', {

            method: 'POST',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },

            body: JSON.stringify(body)

        });

        const data = await response.json();

        console.log('Producto creado:', data);

        if (!response.ok) {
            throw new Error(
                data.message || 'Error al crear producto'
            );
        }

        alert('Producto creado correctamente');

        changeProductTab('list');

    } catch (error) {

        console.error(error);

        alert(error.message);

    }

}

function initProductForm() {

    const form = document.getElementById('productForm');

    console.log('form encontrado:', form);

    if (!form) return;

    form.addEventListener('submit', createProduct);

}