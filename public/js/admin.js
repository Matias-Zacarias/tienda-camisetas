/* dashboard */

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

/* producto */

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

                        is_featured: document.getElementById('editProductFeatured').value === '1',

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

        console.log('Productos cargados:', products);

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
        onclick="editProduct(${product.id})">
        <i class="bi bi-pencil-square"></i>
    </button>

    <button
        class="action-btn status"
        title="${product.is_active ? 'Desactivar' : 'Activar'}"
        onclick="toggleProductStatus(${product.id}, ${product.is_active})">

        <i class="bi ${product.is_active
                ? 'bi-check-circle-fill'
                : 'bi-x-circle-fill'
            }"></i>

    </button>

</div>

                    </div>

                </div>

            </div>
        `;

    });

}

async function toggleProductStatus(id, isActive) {

    try {

        const token =
            localStorage.getItem('token');

        const response =
            await fetch(
                `/api/products/${id}`,
                {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    },
                    body: JSON.stringify({
                        is_active: !isActive
                    })
                }
            );

        const data =
            await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al actualizar el estado'
            );
        }

        await loadProducts();

    } catch (error) {

        console.error(
            'Error al cambiar estado:',
            error
        );

        alert(
            error.message ||
            'No se pudo actualizar el producto'
        );

    }
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



    document.getElementById('editProductFeatured').value = product.is_featured ? '1' : '0';

}

function closeProductModal() {

    document
        .getElementById('productModal')
        .classList.remove('show');

}

/* pedidos */

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

/* usuario */


let users = [];

document.addEventListener(
    'DOMContentLoaded',
    async () => {

        await loadUsers();

        document
            .getElementById('roleFilter')
            ?.addEventListener(
                'change',
                filterUsers
            );
    }
);

async function loadUsers() {
    try {

        const token =
            localStorage.getItem('token');

        const response =
            await fetch(
                '/api/users',
                {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                }
            );

        const data =
            await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al cargar usuarios'
            );
        }

        users = data;

        renderUsers(users);

    } catch (error) {

        console.error(error);

    }
}

function renderUsers(usersList) {
    const tbody =
        document.getElementById(
            'usersTableBody'
        );

    if (!tbody) return;

    tbody.innerHTML = '';

    usersList.forEach(user => {

        tbody.innerHTML += `
            <tr>

                <td>
                    ${user.name}
                </td>

                <td>
                    ${user.email}
                </td>

                <td>
    <select
        class="form-select form-select-sm"
        onchange="changeUserRole(
            ${user.id},
            this.value
        )"
    >
        <option
            value="user"
            ${user.role === 'user'
                ? 'selected'
                : ''
            }
        >
            Usuario
        </option>

        <option
            value="admin"
            ${user.role === 'admin'
                ? 'selected'
                : ''
            }
        >
            Administrador
        </option>

    </select>
</td>

                <td>
                    ${user.orders_count ?? 0}
                </td>

                <td>
                    ${formatDate(
                user.created_at
            )}
                </td>

                <td>

    <div class="action-buttons">

        ${user.role === 'user'
                ? `
                <button
                    class="action-btn delete"
                    title="Eliminar"
                    onclick="deleteUser(${user.id})">

                    <i class="bi bi-trash"></i>

                </button>
            `
                : ''
            }

    </div>

</td>

                    </div>

                </td>

            </tr>
        `;
    });
}

function filterUsers() {
    const role =
        document
            .getElementById(
                'roleFilter'
            )
            .value;

    if (!role) {

        renderUsers(users);

        return;
    }

    const filtered =
        users.filter(
            user =>
                user.role === role
        );

    renderUsers(filtered);
}

function formatDate(date) {
    return new Date(date)
        .toLocaleDateString(
            'es-AR'
        );
}

async function deleteUser(id) {
    try {

        if (
            !confirm(
                '¿Eliminar este usuario?'
            )
        ) {
            return;
        }

        const token =
            localStorage.getItem(
                'token'
            );

        const response =
            await fetch(
                `/api/users/${id}`,
                {
                    method: 'DELETE',
                    headers: {
                        'Accept':
                            'application/json',
                        'Authorization':
                            `Bearer ${token}`
                    }
                }
            );

        const data =
            await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al eliminar usuario'
            );
        }

        await loadUsers();

    } catch (error) {

        console.error(error);

        alert(
            error.message ||
            'No se pudo eliminar el usuario'
        );
    }
}
async function changeUserRole(
    userId,
    role
) {
    try {

        const token =
            localStorage.getItem(
                'token'
            );

        const response =
            await fetch(
                `/api/users/${userId}`,
                {
                    method: 'PUT',
                    headers: {
                        'Content-Type':
                            'application/json',
                        'Accept':
                            'application/json',
                        'Authorization':
                            `Bearer ${token}`
                    },
                    body: JSON.stringify({
                        role: role
                    })
                }
            );

        const data =
            await response.json();

        if (!response.ok) {
            throw new Error(
                data.message ||
                'Error al actualizar rol'
            );
        }

        await loadUsers();

    } catch (error) {

        console.error(
            'Error al cambiar rol:',
            error
        );

        alert(
            error.message ||
            'No se pudo actualizar el rol'
        );

        await loadUsers();
    }
}


/* stock */
// ── Estado ────────────────────────────────────────────────────
let productos = [];
let productoActivo = null;

// ── Init ──────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    loadProductos();
});

// ── Cargar productos ──────────────────────────────────────────
async function loadProductos() {
    const lista = document.getElementById('productos-lista');

    lista.innerHTML = `
        <div style="text-align:center;padding:3rem 0">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>`;

    try {
        const token = localStorage.getItem('token');

        const res = await fetch('/api/products', {
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`,
            }
        });

        const data = await res.json();

        if (!res.ok) throw new Error(data.message || 'Error al cargar productos');

        productos = data;
        renderProductos();

    } catch (error) {
        console.error('Error cargando productos:', error);
        lista.innerHTML = `
            <div class="card" style="text-align:center;padding:2rem;color:#e53e3e">
                <p>No se pudieron cargar los productos: ${error.message}</p>
            </div>`;
    }
}

// ── Render lista de productos ─────────────────────────────────
function renderProductos() {
    const lista = document.getElementById('productos-lista');

    if (!productos.length) {
        lista.innerHTML = `
            <div class="card" style="text-align:center;padding:2rem">
                <p>No hay productos cargados.</p>
            </div>`;
        return;
    }

    lista.innerHTML = `
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Productos</h3>
            <span style="font-size:.85rem;opacity:.6">${productos.length} producto${productos.length !== 1 ? 's' : ''}</span>
        </div>
        <div style="overflow-x:auto;margin:0 -1.75rem;padding:0 1.75rem">
            <table style="width:100%;border-collapse:collapse;min-width:600px">
                <thead>
                    <tr style="border-bottom:1px solid var(--border-color);text-align:left">
                        <th style="padding:.75rem 1rem;font-size:.8rem;opacity:.6;font-weight:600">PRODUCTO</th>
                        <th style="padding:.75rem 1rem;font-size:.8rem;opacity:.6;font-weight:600">PRECIO</th>
                        <th style="padding:.75rem 1rem;font-size:.8rem;opacity:.6;font-weight:600">TALLES</th>
                        <th style="padding:.75rem 1rem;font-size:.8rem;opacity:.6;font-weight:600">STOCK TOTAL</th>
                        <th style="padding:.75rem 1rem;font-size:.8rem;opacity:.6;font-weight:600"></th>
                    </tr>
                </thead>
                <tbody>
                    ${productos.map(p => renderProductoRow(p)).join('')}
                </tbody>
            </table>
        </div>
    </div>`;
}

function renderProductoRow(p) {
    const talles = p.talles ?? [];
    const stockTotal = talles.reduce((sum, t) => sum + (t.stock ?? 0), 0);
    const sinStock = talles.filter(t => (t.stock ?? 0) === 0).length;
    const bajStock = talles.filter(t => (t.stock ?? 0) > 0 && (t.stock ?? 0) <= 10).length;

    let statusBadge = `<span class="status success">OK</span>`;
    if (sinStock > 0) statusBadge = `<span class="status danger">${sinStock} sin stock</span>`;
    else if (bajStock) statusBadge = `<span class="status warning">${bajStock} bajo stock</span>`;

    return `
        <tr style="border-bottom:1px solid var(--border-color);transition:background .2s"
            onmouseover="this.style.background='rgba(255,255,255,.03)'"
            onmouseout="this.style.background=''">
            <td style="padding:.85rem 1rem;display:flex;align-items:center;gap:.75rem">
                <img src="${p.image ?? ''}" alt="${p.name}"
                    style="width:44px;height:44px;object-fit:cover;border-radius:6px;background:#333;flex-shrink:0">
                <div>
                    <div style="font-weight:600;font-size:.9rem">${p.name}</div>
                    <div style="font-size:.75rem;opacity:.5">${p.short_description ?? '—'}</div>
                </div>
            </td>
            <td style="padding:.85rem 1rem;font-size:.9rem">$${Number(p.price).toLocaleString('es-AR')}</td>
            <td style="padding:.85rem 1rem">
                <div style="display:flex;gap:.3rem;flex-wrap:wrap">
                    ${talles.map(t => `<span style="background:rgba(255,255,255,.08);border-radius:4px;padding:.15rem .5rem;font-size:.75rem">${t.name}</span>`).join('')}
                    ${!talles.length ? '<span style="opacity:.4;font-size:.8rem">Sin talles</span>' : ''}
                </div>
            </td>
            <td style="padding:.85rem 1rem">
                <div style="display:flex;align-items:center;gap:.6rem">
                    <span style="font-weight:700">${stockTotal}</span>
                    ${statusBadge}
                </div>
            </td>
            <td style="padding:.85rem 1rem;text-align:right">
                <button class="btn btn-primary" style="font-size:.8rem;padding:.4rem .9rem"
                    onclick="abrirStockPanel(${p.id})">
                    Gestionar Stock
                </button>
            </td>
        </tr>`;
}

// ── Abrir panel de stock ──────────────────────────────────────
function abrirStockPanel(id) {
    productoActivo = productos.find(p => p.id === id);
    if (!productoActivo) return;

    document.getElementById('stock-panel-titulo').textContent =
        `${productoActivo.name} — SKU #${String(productoActivo.id).padStart(4, '0')}`;

    renderTalles(productoActivo.talles ?? []);
    actualizarStats(productoActivo.talles ?? []);

    const panel = document.getElementById('stock-panel');
    panel.style.display = 'block';
    panel.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// ── Render talles en el panel ─────────────────────────────────
function renderTalles(talles) {
    const lista = document.getElementById('stock-talles-lista');

    if (!talles.length) {
        lista.innerHTML = `<p style="padding:1rem;opacity:.5">Este producto no tiene talles cargados.</p>`;
        return;
    }

    lista.innerHTML = talles.map(t => {
        const stock = t.stock ?? 0;
        const status = stock === 0
            ? { cls: 'danger', label: 'Sin Stock' }
            : stock <= 10
                ? { cls: 'warning', label: 'Bajo Stock' }
                : { cls: 'success', label: 'En Stock' };

        return `
            <div class="size-row" data-talle-id="${t.id}">
                <div class="form-group" style="margin:0">
                    <label class="form-label">Talle</label>
                    <input type="text" class="form-input" value="${t.name}" readonly>
                </div>
                <div class="form-group" style="margin:0">
                    <label class="form-label">Stock Disponible</label>
                    <input type="number" class="form-input stock-input" value="${stock}" min="0"
                        onchange="onStockChange(this, ${t.id})">
                </div>
                <div style="display:flex;align-items:flex-end">
                    <span class="status ${status.cls}" id="status-talle-${t.id}">${status.label}</span>
                </div>
            </div>`;
    }).join('');
}

// ── Actualizar badge de estado en tiempo real ─────────────────
function onStockChange(input, talleId) {
    const val = parseInt(input.value) || 0;
    const badge = document.getElementById(`status-talle-${talleId}`);
    const status = val === 0
        ? { cls: 'danger', label: 'Sin Stock' }
        : val <= 10
            ? { cls: 'warning', label: 'Bajo Stock' }
            : { cls: 'success', label: 'En Stock' };

    badge.className = `status ${status.cls}`;
    badge.textContent = status.label;

    // actualizar stats en vivo
    const tallesActuales = getTallesDesdeInputs();
    actualizarStats(tallesActuales);
}

// ── Guardar stock ─────────────────────────────────────────────
async function guardarStock() {
    const token = localStorage.getItem('token');
    const rows = document.querySelectorAll('#stock-talles-lista .size-row');
    const updates = [];

    rows.forEach(row => {
        const talleId = row.dataset.talleId;
        const stock = parseInt(row.querySelector('.stock-input').value) || 0;
        updates.push({ id: talleId, stock });
    });

    try {
        await Promise.all(updates.map(u =>
            fetch(`/api/talles/${u.id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`,
                },
                body: JSON.stringify({ stock: u.stock }),
            })
        ));

        // reflejar cambios en el array local
        updates.forEach(u => {
            const talle = productoActivo.talles.find(t => t.id == u.id);
            if (talle) talle.stock = u.stock;
        });

        // re-renderizar la fila del producto en la tabla
        const row = document.querySelector(`[onclick="abrirStockPanel(${productoActivo.id})"]`)?.closest('tr');
        if (row) row.outerHTML = renderProductoRow(productoActivo);

        alert('Stock actualizado correctamente.');

    } catch (error) {
        console.error('Error guardando stock:', error);
        alert('Ocurrió un error al guardar. Revisá la consola.');
    }
}

// ── Cerrar panel ──────────────────────────────────────────────
function cerrarStockPanel() {
    document.getElementById('stock-panel').style.display = 'none';
    productoActivo = null;
}

// ── Stats ─────────────────────────────────────────────────────
function actualizarStats(talles) {
    const total = talles.reduce((sum, t) => sum + (parseInt(t.stock) || 0), 0);
    const bajo = talles.filter(t => (parseInt(t.stock) || 0) > 0 && (parseInt(t.stock) || 0) <= 10).length;
    const sin = talles.filter(t => (parseInt(t.stock) || 0) === 0).length;

    document.getElementById('stat-total').textContent = total;
    document.getElementById('stat-bajo').textContent = bajo;
    document.getElementById('stat-sin').textContent = sin;
}

function getTallesDesdeInputs() {
    const rows = document.querySelectorAll('#stock-talles-lista .size-row');
    return Array.from(rows).map(row => ({
        stock: parseInt(row.querySelector('.stock-input').value) || 0
    }));
}