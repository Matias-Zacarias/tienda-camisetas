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
                    ${pedido.estado}
                    <span class="status ">
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
/* ${getStatusClass(pedido.estado)} */
function initProductTabs() {

    const tabs = document.querySelectorAll('.tab');

    tabs.forEach(tab => {

        tab.addEventListener('click', () => {

            const target = tab.dataset.tab;

            changeProductTab(target);

        });

    });

}

function initEditImagePreview() {

    const input =
        document.getElementById('editProductImage');

    const preview =
        document.getElementById('editImagePreview');

    if (!input || !preview) return;

    input.addEventListener('change', () => {

        const file = input.files[0];

        if (!file) return;

        preview.src =
            URL.createObjectURL(file);

    });

}

function initEditProductForm() {

    const form =
        document.getElementById(
            'editProductForm'
        );

    if (!form) return;

    form.addEventListener(
        'submit',
        updateProduct
    );

}

async function updateProduct(event) {

    const price = parseFloat(
        document
            .getElementById('editProductPrice')
            .value
            .replace(',', '.')
    );

    const discountPrice = parseFloat(
        document
            .getElementById('editProductDiscountPrice')
            .value
            .replace(',', '.')
    );

    event.preventDefault();

    const token =
        localStorage.getItem('token');

    const id =
        document.getElementById(
            'editProductId'
        ).value;

    try {

        let imageUrl = null;

        const imageFile =
            document.getElementById(
                'editProductImage'
            ).files[0];

        if (imageFile) {

            imageUrl =
                await uploadImageToCloudinary(
                    imageFile
                );

        }

        const response =
            await fetch(
                `/api/products/${id}`,
                {
                    method: 'PUT',

                    headers: {
                        'Accept':
                            'application/json',

                        'Content-Type':
                            'application/json',

                        'Authorization':
                            `Bearer ${token}`
                    },

                    body: JSON.stringify({

                        name:
                            document.getElementById(
                                'editProductName'
                            ).value,

                        price: price,

                        discount_price:
                            isNaN(discountPrice)
                                ? null
                                : discountPrice,

                        description:
                            document.getElementById(
                                'editProductDescription'
                            ).value,

                        short_description:
                            document.getElementById(
                                'editProductShortDescription'
                            ).value,

                        image:
                            imageUrl || window.currentProductImage

                    })

                }
            );

        const data =
            await response.json();

        if (!response.ok) {

            throw new Error(
                data.message ||
                'Error al actualizar producto'
            );

        }

        alert(
            'Producto actualizado correctamente'
        );

        closeProductModal();

        loadProducts();

    } catch (error) {

        console.error(error);

        alert(error.message);

    }

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

function initTalleForm() {

    const form =
        document.getElementById('talleForm');

    if (!form) return;

    form.addEventListener(
        'submit',
        createTalle
    );

}




async function createProduct(event) {

    event.preventDefault();
    const token = localStorage.getItem('token');

    try {

        const imageInput =
            document.getElementById('productImage');

        console.log('INPUT:', imageInput);

        console.log(
            'FILES:',
            imageInput?.files
        );

        const imageFile =
            imageInput?.files?.[0];

        console.log(
            'ARCHIVO:',
            imageFile
        );

        let imageUrl = null;

        if (imageFile) {

            console.log(
                'Subiendo imagen a Cloudinary...'
            );

            imageUrl =
                await uploadImageToCloudinary(
                    imageFile
                );

            console.log(
                'URL CLOUDINARY:',
                imageUrl
            );

        }

        const body = {
            name:
                document.getElementById('productName').value.trim(),

            price:
                Number(
                    document.getElementById('productPrice').value
                ),

            discount_price:
                Number(
                    document.getElementById('productDiscountPrice').value
                ) || null,

            featured:
                document.getElementById('productFeatured').value === 'Si',

            description:
                document.getElementById('productDescription').value.trim(),

            short_description:
                document.getElementById('productShortDescription').value.trim(),

            image:
                imageUrl
        };

        const response = await fetch(
            '/api/products',
            {
                method: 'POST',

                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },

                body: JSON.stringify(body)
            }
        );

        const data =
            await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al crear producto'
            );
        }

        alert(
            'Producto creado correctamente'
        );

        loadProducts();

        document
            .getElementById('productForm')
            .reset();

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

async function loadProducts() {

    const token = localStorage.getItem('token');

    try {

        const response = await fetch('/api/products', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`
            }
        });

        const products = await response.json();

        if (!response.ok) {
            throw new Error(
                products.message || 'Error al cargar productos'
            );
        }

        renderProducts(products);
        fillProductsSelect(products);

    } catch (error) {

        console.error(error);

    }

}

function renderProducts(products) {

    const container =
        document.getElementById('productsContainer');

    if (!container) return;

    container.innerHTML = '';

    products.forEach(product => {

        container.innerHTML += `
            <div class="product-card">

                <div class="product-image">
                    <img
                        src="${product.image}"
                        alt="${product.name}"
                        style="width:100%;height:100%;object-fit:cover;"
                    >
                </div>

                <div class="product-info">

                    <div class="product-name">
                        ${product.name}
                    </div>

                    <div class="product-price">
                        $${Number(product.price).toLocaleString('es-AR')}
                    </div>

                    <div class="product-meta">
                        <span>
                            ${product.is_featured ? '⭐ Destacado' : ''}
                        </span>
                    </div>

                    <div class="action-buttons">

                        <button
                            class="action-btn edit"
                            title="Editar"
                            onclick="editProduct(${product.id})"
                            ✏️
                        </button>

                        <button
                            class="action-btn view"
                            title="Ver">
                            👁️
                        </button>

                        <button
                            class="action-btn delete"
                            title="Eliminar"
                            onclick="deleteProduct(${product.id})">
                            🗑️
                        </button>

                    </div>

                </div>

            </div>
        `;

    });

}

function fillProductsSelect(products) {

    const select =
        document.getElementById('talleProduct');

    if (!select) return;

    select.innerHTML =
        '<option value="">Seleccione un producto</option>';

    products.forEach(product => {

        select.innerHTML += `
            <option value="${product.id}">
                ${product.name}
            </option>
        `;

    });

}

async function createTalle(event) {

    event.preventDefault();

    const token = localStorage.getItem('token');

    try {

        const response = await fetch('/api/talles', {

            method: 'POST',

            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${token}`
            },

            body: JSON.stringify({
                product_id:
                    Number(
                        document.getElementById('talleProduct').value
                    ),

                name:
                    document.getElementById('talleName').value,

                stock:
                    Number(
                        document.getElementById('talleStock').value
                    )
            })

        });

        const data = await response.json();

        console.log(data);

        if (!response.ok) {
            throw new Error(
                data.message || 'Error al crear talle'
            );
        }

        alert('Talle creado correctamente');

        document
            .getElementById('talleForm')
            .reset();

    } catch (error) {

        console.error(error);

        alert(error.message);

    }

}

async function uploadImageToCloudinary(file) {

    const formData = new FormData();

    formData.append('file', file);

    formData.append(
        'upload_preset',
        'products_unsigned'
    );

    const response = await fetch(
        'https://api.cloudinary.com/v1_1/dtqyrpgxv/image/upload',
        {
            method: 'POST',
            body: formData
        }
    );

    const data = await response.json();

    console.log(
        'RESPUESTA CLOUDINARY:',
        data
    );

    if (!response.ok) {
        throw new Error(
            data.error?.message ||
            'Error al subir imagen'
        );
    }

    return data.secure_url;
}

function initImagePreview() {

    const input =
        document.getElementById('productImage');

    const container =
        document.getElementById(
            'imagePreviewContainer'
        );

    if (!input || !container) return;

    input.addEventListener('change', () => {

        const file = input.files[0];

        if (!file) return;

        const reader = new FileReader();

        reader.onload = function (e) {

            container.innerHTML = `
                <div style="margin-top:15px">

                    <img
                        src="${e.target.result}"
                        alt="Preview"
                        style="
                            width:200px;
                            border-radius:8px;
                            display:block;
                        "
                    >

                    <p style="margin-top:8px">
                        ${file.name}
                    </p>

                </div>
            `;

        };

        reader.readAsDataURL(file);

    });

}

async function editProduct(id) {

    const token =
        localStorage.getItem('token');

    const response =
        await fetch(
            `/api/products/${id}`,
            {
                headers: {
                    Authorization:
                        `Bearer ${token}`
                }
            }
        );

    const product =
        await response.json();

    document.getElementById(
        'editProductId'
    ).value = product.id;

    document.getElementById(
        'editProductName'
    ).value = product.name ?? '';

    document.getElementById(
        'editProductPrice'
    ).value = product.price ?? '';

    document.getElementById(
        'editProductDiscountPrice'
    ).value = product.discount_price ?? '';

    document.getElementById(
        'editProductDescription'
    ).value = product.description ?? '';

    document.getElementById(
        'editProductShortDescription'
    ).value = product.short_description ?? '';

    document.getElementById('editImagePreview').src =
        product.image ?? '';

    document
        .getElementById('productModal')
        .classList.add('show');

}

function closeProductModal() {

    document
        .getElementById('productModal')
        .classList.remove('show');

}

function renderOrders(orders) {

    const tbody =
        document.getElementById(
            'ordersTableBody'
        );

    tbody.innerHTML = '';

    orders.forEach(order => {

        tbody.innerHTML += `
            <tr>

                <td>
                    <strong>#ORD-${order.id}</strong>
                </td>

                <td>
                    ${order.user?.name ?? 'Sin cliente'}
                    <br>
                    <small style="color:var(--text-secondary)">
                        ${order.user?.email ?? ''}
                    </small>
                </td>

                <td>
                    ${order.detalles.length} productos
                </td>

                <td>
                    <strong>
                        $${Number(order.total).toLocaleString('es-AR')}
                    </strong>
                </td>

                <td>

                    <select
                        class="form-select"
                        onchange="changeOrderStatus(
                            ${order.id},
                            this.value
                        )">

                        <option
                            value="Pendiente"
                            ${order.estado === 'Pendiente' ? 'selected' : ''}>
                            Pendiente
                        </option>

                        <option
                            value="En Proceso"
                            ${order.estado === 'En Proceso' ? 'selected' : ''}>
                            En Proceso
                        </option>

                        <option
                            value="Enviado"
                            ${order.estado === 'Enviado' ? 'selected' : ''}>
                            Enviado
                        </option>

                        <option
                            value="Completado"
                            ${order.estado === 'Completado' ? 'selected' : ''}>
                            Completado
                        </option>

                        <option
                            value="Cancelado"
                            ${order.estado === 'Cancelado' ? 'selected' : ''}>
                            Cancelado
                        </option>

                    </select>

                </td>

                <td>

                    ${new Date(
            order.created_at
        ).toLocaleDateString('es-AR')}

                </td>

                <td>

                    <button
                        class="action-btn view"
                        onclick="viewOrder(${order.id})">

                        👁️

                    </button>

                </td>

            </tr>
        `;

    });

}

async function viewOrder(id) {

    const token =
        localStorage.getItem('token');

    try {

        const response =
            await fetch(
                `/api/encabezados-pedidos/${id}`,
                {
                    headers: {
                        Authorization:
                            `Bearer ${token}`
                    }
                }
            );

        const order =
            await response.json();

        renderOrderDetail(order);

        document
            .getElementById('orderModal')
            .classList
            .add('show');

    } catch (error) {

        console.error(error);

    }

}

function closeOrderModal() {

    document
        .getElementById('orderModal')
        .classList
        .remove('show');

}

async function loadOrders() {

    const token = localStorage.getItem('token');

    try {

        const response = await fetch(
            '/api/encabezados-pedidos',
            {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            }
        );

        const orders = await response.json();

        if (!response.ok) {
            throw new Error(
                orders.message ||
                'Error al cargar pedidos'
            );
        }

        renderOrders(orders);

    } catch (error) {

        console.error(error);

        alert(error.message);

    }

}

function renderOrderDetail(order) {

    const container =
        document.getElementById(
            'orderDetailContent'
        );

    let productos = '';

    order.detalles.forEach(item => {

        productos += `
            <tr>
                <td>${item.producto_nombre}</td>
                <td>${item.talle_nombre}</td>
                <td>${item.cantidad}</td>
                <td>$${item.precio_unitario}</td>
                <td>$${item.subtotal}</td>
            </tr>
        `;

    });

    container.innerHTML = `

        <h4>
            Pedido #ORD-${order.id}
        </h4>

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

                ${productos}

            </tbody>

        </table>

        <hr>

        <p>
            <strong>Cliente:</strong>
            ${order.user?.name}
        </p>

        <p>
            <strong>Email:</strong>
            ${order.user?.email}
        </p>

        <p>
            <strong>Teléfono:</strong>
            ${order.cliente_telefono ?? '-'}
        </p>

        <p>
            <strong>Dirección:</strong>
            ${order.direccion_envio}
        </p>

        <p>
            <strong>Total:</strong>
            $${order.total}
        </p>

    `;

}
async function changeOrderStatus(id, estado) {

    const token = localStorage.getItem('token');

    try {

        const response = await fetch(
            `/api/encabezados-pedidos/${id}`,
            {
                method: 'PUT',

                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': `Bearer ${token}`
                },

                body: JSON.stringify({
                    estado
                })
            }
        );

        const data = await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al actualizar estado'
            );
        }

        await loadOrders();

    } catch (error) {

        console.error(error);

        alert(error.message);

    }

}