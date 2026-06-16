async function loadFeaturedProducts() {

    try {

        const response = await fetch(
            '/api/products/destacados',
            {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',

                }
            }
        );

        const products = await response.json();

        if (!response.ok) {
            throw new Error(
                products.message ||
                'Error al cargar productos destacados'
            );
        }

        renderProducts(products);

    } catch (error) {

        console.error(error);

        const container =
            document.getElementById(
                'featured-products'
            );

        if (container) {

            container.innerHTML = `
                <div class="col-12 text-center">
                    Error al cargar productos destacados
                </div>
            `;

        }

    }

}

async function loadProducts() {

    try {

        const response = await fetch(
            '/api/catalog/products',
            {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',

                }
            }
        );

        const products = await response.json();

        if (!response.ok) {
            throw new Error(
                products.message ||
                'Error al cargar productos destacados'
            );
        }

        renderProducts(products);

    } catch (error) {

        console.error(error);

        const container =
            document.getElementById(
                'featured-products'
            );

        if (container) {

            container.innerHTML = `
                <div class="col-12 text-center">
                    Error al cargar productos destacados
                </div>
            `;

        }

    }

}

function renderProducts(products) {

    const container =
        document.getElementById(
            'featured-products'
        );

    if (!container) return;

    container.innerHTML =
        products.map(product => `

        <div class="col-sm-6 col-lg-3">

            <article class="product-card">

                <div class="product-card-img-wrap">

                    <img
                        src="${product.image}"
                        alt="${product.name}"
                        loading="lazy"
                    />

                </div>

                <div class="product-card-body">

                    <p class="product-league">
                        ${product.brand ?? ''}
                    </p>

                    <h3 class="product-name">
                        ${product.name}
                    </h3>

                    <div class="product-price">

                        ${product.discount_price ? `
                            <span class="price-old">
                                $${product.price}
                            </span>
                        ` : ''}

                        $${product.discount_price ?? product.price}

                    </div>

                    <div class="btn-wrapper">

                        <button
                            class="btn-ver-mas"
                            type="button"
                            onclick="window.location.href='/detalle/${product.id}'"
                        >
                            <i class="bi bi-bag-plus me-1"></i>
                            Ver más
                        </button>

                    </div>

                </div>

            </article>

        </div>

    `).join('');

}

let talleActual = null;
let stockActual = 0;
let productoDetalle = null;

document.addEventListener(
    'DOMContentLoaded',
    () => {
        loadProductDetail();
    }
);

function getProductId() {

    const segments =
        window.location.pathname.split('/');

    return segments[segments.length - 1];

}

async function loadProductDetail() {

    try {

        const productId =
            getProductId();

        const response =
            await fetch(
                `/api/products/${productId}`
            );

        const product =
            await response.json();

        console.log(product);

        if (!response.ok) {
            throw new Error(
                product.message ||
                'Error al cargar producto'
            );
        }

        renderProductDetail(
            product
        );

    } catch (error) {

        console.error(error);

    }

}
function renderTalles(talles) {

    const container =
        document.getElementById(
            'talles-container'
        );

    container.innerHTML =
        talles.map(talle => `

        <button
            class="talle-btn ${talle.stock === 0 ? 'sin-stock' : ''}"
            type="button"
            data-id="${talle.id}"
            data-talle="${talle.name}"
            data-stock="${talle.stock}"
            ${talle.stock === 0 ? 'disabled' : ''}
            onclick="seleccionarTalle(this)"
        >
            ${talle.name}
        </button>

    `).join('');
}

function renderProductDetail(product) {

    productoDetalle = {
        product_id: product.id,
        talle_id: null,
        talle: null,
        cantidad: 1,
        stock: 0,

        nombre: product.name,
        liga: product.short_description,
        precio: product.discount_price ?? product.price,
        imagen: product.image
    };

    document.getElementById(
        'detail-name'
    ).textContent = product.name;

    document.getElementById(
        'detail-short-description'
    ).textContent = product.short_description ?? '';

    document.getElementById(
        'detail-description'
    ).textContent = product.description ?? '';

    document.getElementById(
        'detail-main-img'
    ).src = product.image;

    document.getElementById(
        'detail-main-img'
    ).alt = product.name;

    document.getElementById(
        'detail-price'
    ).textContent =
        `$${product.discount_price ?? product.price}`;

    const oldPrice =
        document.getElementById(
            'detail-old-price'
        );

    if (product.discount_price) {

        oldPrice.textContent =
            `$${product.price}`;

        oldPrice.style.display =
            'inline';

    } else {

        oldPrice.style.display =
            'none';
    }

    renderTalles(
        product.talles
    );
}
function seleccionarTalle(btn) {

    document
        .querySelectorAll('.talle-btn')
        .forEach(
            b => b.classList.remove(
                'selected'
            )
        );

    btn.classList.add(
        'selected'
    );

    productoDetalle.talle_id =
        Number(
            btn.dataset.id
        );

    productoDetalle.talle =
        btn.dataset.talle;

    productoDetalle.stock =
        Number(
            btn.dataset.stock
        );

    document.getElementById(
        'talle-seleccionado'
    ).textContent =
        productoDetalle.talle;

    const dot =
        document.getElementById(
            'stock-dot'
        );

    const text =
        document.getElementById(
            'stock-text'
        );

    const indicator =
        document.getElementById(
            'stock-indicator'
        );

    dot.className =
        'stock-dot';

    text.className =
        'stock-text';

    if (productoDetalle.stock >= 10) {

        dot.classList.add(
            'alto'
        );

        text.classList.add(
            'alto'
        );

        text.textContent =
            `Stock disponible (${productoDetalle.stock} unidades)`;

    } else if (productoDetalle.stock >= 1) {

        dot.classList.add(
            'bajo'
        );

        text.classList.add(
            'bajo'
        );

        text.textContent =
            `¡Últimas unidades! Solo quedan ${productoDetalle.stock}`;

    }

    indicator.style.opacity =
        '1';

    document.getElementById(
        'btn-agregar'
    ).disabled = false;

    if (
        productoDetalle.cantidad >
        productoDetalle.stock
    ) {

        productoDetalle.cantidad =
            productoDetalle.stock;

        document.getElementById(
            'product-quantity'
        ).value =
            productoDetalle.cantidad;
    }
}

let quantity = 1;

function changeQuantity(value) {



    const input =
        document.getElementById(
            'product-quantity'
        );

    productoDetalle.cantidad += value;

    if (productoDetalle.cantidad < 1) {

        productoDetalle.cantidad = 1;

    }

    if (
        productoDetalle.stock > 0 &&
        productoDetalle.cantidad > productoDetalle.stock
    ) {

        productoDetalle.cantidad =
            productoDetalle.stock;

    }

    input.value =
        productoDetalle.cantidad;
}

/* CONFIRMAR PEDIDO */

// ── Cargar items del carrito en el resumen ──────────────────
// ── Estado global ────────────────────────────────────────────
let cartItemsConfirmar = [];
let envioSeleccionado = 'oca';

const costoEnvio = { oca: 10, correo: 3, retiro: 0 };
const labelEnvio = { oca: 'OCA', correo: 'Correo Argentino', retiro: 'Retiro en local' };

function formatPrice(n) {
    return '$' + Number(n).toLocaleString('es-AR');
}

function getToken() {
    return localStorage.getItem('token');
}

// ── Init ─────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', async () => {

    await loadCartConfirmar();

    // Listeners de envío
    document.querySelectorAll('input[name="envio"]').forEach(radio => {
        radio.addEventListener('change', function () {
            envioSeleccionado = this.value;
            updateTotalsConfirmar();
            document.querySelectorAll('.envio-option').forEach(el => el.classList.remove('selected'));
            this.closest('.envio-option').classList.add('selected');
        });
    });

    // Marcar OCA por defecto
    document.getElementById('envio-oca').classList.add('selected');

});

// ── Cargar carrito desde API ─────────────────────────────────
async function loadCartConfirmar() {
    try {

        const token =
            localStorage.getItem(
                'token'
            );

        const response = await fetch('/api/carrito-items', {
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`
            }
        });

        const data = await response.json();

        if (!response.ok) throw new Error(data.message || 'Error al cargar carrito');

        cartItemsConfirmar = data;

        console.log('Carrito cargado:', cartItemsConfirmar);

        renderCheckoutItems();
        updateTotalsConfirmar();

    } catch (error) {
        console.error('Error cargando carrito:', error);
    }
}

// ── Render items ─────────────────────────────────────────────
function renderCheckoutItems() {
    const list = document.getElementById('checkout-items');

    if (!cartItemsConfirmar.length) {
        list.innerHTML = `
            <li style="color:var(--color-muted);font-size:.9rem;padding:1rem 0;text-align:center">
                Tu carrito está vacío.<br>
                <a href="/catalogo" class="text-red">Ver catálogo</a>
            </li>`;
        return;
    }

    list.innerHTML = cartItemsConfirmar.map(item => `
        <li class="checkout-item">
            <img src="${item.product?.image ?? ''}" alt="${item.product?.name ?? ''}">
            <div class="checkout-item-info">
                <div class="checkout-item-nombre">${item.product?.name ?? '—'}</div>
                <div class="checkout-item-meta">Talle: ${item.talle?.name ?? '—'} · x${item.cantidad}</div>
            </div>
            <div class="checkout-item-precio">
                ${formatPrice(Number(item.product?.price ?? 0) * item.cantidad)}
            </div>
        </li>
    `).join('');
}

// ── Actualizar totales ────────────────────────────────────────
function updateTotalsConfirmar() {
    const subtotal = cartItemsConfirmar.reduce(
        (sum, item) => sum + Number(item.product?.price ?? 0) * item.cantidad, 0
    );
    const envio = costoEnvio[envioSeleccionado] ?? 0;
    const total = subtotal + envio;

    document.getElementById('checkout-subtotal').textContent = formatPrice(subtotal);
    document.getElementById('checkout-envio-costo').textContent = envio === 0 ? 'Gratis' : formatPrice(envio);
    document.getElementById('checkout-total').textContent = formatPrice(total);
}

// ── Validación ───────────────────────────────────────────────
const camposRequeridos = {
    'co-telefono': 'El teléfono es obligatorio',
    'co-direccion': 'La dirección es obligatoria',
    'co-ciudad': 'La ciudad es obligatoria',
    'co-provincia': 'Seleccioná una provincia',
    'co-cp': 'El código postal es obligatorio',
};

function showError(id, msg) {
    const el = document.querySelector(`[data-field="${id}"]`);
    const input = document.getElementById(id);
    if (el) el.textContent = msg || '';
    if (input) input.classList.toggle('is-invalid', !!msg);
}

function validarFormulario() {
    let valido = true;

    Object.entries(camposRequeridos).forEach(([id, msg]) => {
        const el = document.getElementById(id);
        if (!el || !el.value.trim()) {
            showError(id, msg);
            valido = false;
        } else {
            showError(id, null);
        }
    });

    if (!valido) {
        document.querySelector('.is-invalid')
            ?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    return valido;
}

// ── Confirmar pedido ─────────────────────────────────────────
async function confirmarPedido() {



    if (!validarFormulario()) return;

    // Calcular totales
    const subtotal = cartItemsConfirmar.reduce(
        (sum, item) => sum + Number(item.product?.price ?? 0) * item.cantidad, 0
    );
    const costoDeEnvio = costoEnvio[envioSeleccionado] ?? 0;
    const total = subtotal + costoDeEnvio;

    // Armar encabezado
    const encabezado = {
        user_id: cartItemsConfirmar[0]?.user_id ?? null,
        cliente_telefono: document.getElementById('co-telefono').value.trim(),
        direccion_envio: [
            document.getElementById('co-direccion').value.trim(),
            document.getElementById('co-ciudad').value.trim(),
            document.getElementById('co-provincia').value.trim(),
            document.getElementById('co-cp').value.trim(),
        ].filter(Boolean).join(', '),
        metodo_envio: labelEnvio[envioSeleccionado],
        costo_envio: costoDeEnvio,
        estado: 'pendiente',
        subtotal,
        total,
        observaciones: document.getElementById('co-obs').value.trim() || null,
    };

    // Armar detalles
    const detalles = cartItemsConfirmar.map(item => ({
        product_id: item.product_id,
        talle_id: item.talle_id,
        producto_nombre: item.product?.name ?? '',
        talle_nombre: item.talle?.name ?? '',
        precio_unitario: Number(item.product?.price ?? 0),
        cantidad: item.cantidad,
        subtotal: Number(item.product?.price ?? 0) * item.cantidad,
    }));

    try {

        if (!cartItemsConfirmar.length) {
            console.log('No hay productos en el carrito');
            mostrarErrorGlobal('No podés confirmar un pedido sin productos. Agregá artículos al carrito.');
            return;
        }

        await validarStock(detalles);

        setBtnLoading(true);

        const token =
            localStorage.getItem(
                'token'
            );

        // 1 — Crear encabezado
        const resEncabezado = await fetch('/api/encabezados-pedidos', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`,
            },
            body: JSON.stringify(encabezado),
        });

        const dataEncabezado = await resEncabezado.json();

        if (!resEncabezado.ok) {
            throw new Error(dataEncabezado.message || 'Error al crear el pedido');
        }

        const pedidoId = dataEncabezado.data.id;

        // 2 — Crear detalles (en paralelo)
        const resDetalles = await Promise.all(
            detalles.map(detalle =>
                fetch('/api/detalles-pedidos', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${token}`,
                    },
                    body: JSON.stringify({ ...detalle, pedido_id: pedidoId }),
                })
            )
        );

        // Verificar que todos los detalles se crearon bien
        const errDetalle = resDetalles.find(r => !r.ok);
        if (errDetalle) {
            const errData = await errDetalle.json();
            throw new Error(errData.message || 'Error al guardar un producto del pedido');
        }

        // 3 — Vaciar carrito (simulado hasta que tengas la ruta)
        await vaciarCarrito();

        await restarStock(detalles);

        // 4 — Éxito
        new bootstrap.Modal(document.getElementById('successModal')).show();

    } catch (error) {

        console.error('Error en confirmarPedido:', error);
        mostrarErrorGlobal(error.message);

    } finally {

        setBtnLoading(false);

    }
}

async function vaciarCarrito() {

    try {

        const token = localStorage.getItem('token');
        const userId = cartItemsConfirmar?.[0]?.user_id;

        if (!token || !userId) {
            console.warn('No se puede vaciar carrito: falta token o userId');
            return;
        }

        const url = `/api/carrito/user/${userId}`;

        const res = await fetch(url, {
            method: 'DELETE',
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`
            }
        });

        if (!res.ok) {
            const errorText = await res.text();
            console.error('Error vaciando carrito:', errorText);
            throw new Error(`HTTP ${res.status}`);
        }

        console.log('Carrito vaciado');

    } catch (error) {
        console.error('vaciarCarrito error:', error.message);
    }
}

async function validarStock(detalles) {

    const token = localStorage.getItem('token');

    for (const item of detalles) {

        const res = await fetch(
            `/api/talles/${item.talle_id}`,
            {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            }
        );

        const talle = await res.json();

        if (!res.ok) {
            throw new Error(
                `No se pudo consultar el stock del talle ${item.talle_id}`
            );
        }

        const stockActual =
            talle.stock ??
            talle.data?.stock;

        if (stockActual === undefined) {
            throw new Error(
                `No se pudo obtener el stock del talle ${item.talle_id}`
            );
        }

        if (stockActual < item.cantidad) {

            throw new Error(
                `${item.producto_nombre} (${item.talle_nombre}) tiene solo ${stockActual} unidades disponibles`
            );

        }
    }
}

async function restarStock(detalles) {

    try {

        const token = localStorage.getItem('token');

        for (const item of detalles) {

            const talleId = item.talle_id;
            const cantidad = item.cantidad;

            const resGet = await fetch(`/api/talles/${talleId}`, {
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            });

            const talle = await resGet.json();

            if (!resGet.ok) {
                throw new Error('Error obteniendo talle');
            }

            // 🔥 FIX IMPORTANTE
            console.log(`Talle ${talle.name} stock actual: ${talle.stock}`);

            const stockActual = talle.stock;
            const stockNuevo = stockActual - cantidad;

            if (stockNuevo < 0) {
                throw new Error(`Stock insuficiente en talle ${talleId}`);
            }

            const resUpdate = await fetch(`/api/talles/${talleId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                },
                body: JSON.stringify({
                    stock: stockNuevo
                })
            });

            if (!resUpdate.ok) {
                const err = await resUpdate.text();
                throw new Error(err);
            }
        }

        console.log('Stock actualizado correctamente');

    } catch (error) {
        console.error('Error restando stock:', error.message);
    }
}


// ── UX helpers ────────────────────────────────────────────────
function setBtnLoading(loading) {
    const btn = document.querySelector('[onclick="confirmarPedido()"]');
    if (!btn) return;
    btn.disabled = loading;
    btn.innerHTML = loading
        ? `<span class="spinner-border spinner-border-sm me-2"></span>Procesando...`
        : `<i class="bi bi-check-circle"></i> Confirmar pedido`;
}

function mostrarErrorGlobal(msg) {
    // Buscamos un div de error global o lo creamos
    let div = document.getElementById('checkout-error-global');
    if (!div) {
        div = document.createElement('div');
        div.id = 'checkout-error-global';
        div.style.cssText = `
            background: rgba(217,4,41,0.1);
            border: 1px solid var(--color-red);
            border-radius: var(--radius);
            padding: .75rem 1rem;
            color: var(--color-red);
            font-size: .88rem;
            margin-top: 1rem;
        `;
        document.querySelector('.checkout-summary').appendChild(div);
    }
    div.textContent = `⚠ ${msg}`;
    div.scrollIntoView({ behavior: 'smooth', block: 'center' });
}


/* mis pedidos  */
// ── Estado ───────────────────────────────────────────────────
let pedidos = [];

const STEPS = ['Pendiente', 'En Proceso', 'Enviado', 'Completado'];
const STEP_ICONS = ['ti-clock', 'ti-package', 'ti-truck', 'ti-circle-check'];

const ESTADO_STEP = {
    pendiente: 0,
    'en-proceso': 1,
    enviado: 2,
    completado: 3,
};

// ── Init ─────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    loadPedidos();
});

// ── Cargar lista de pedidos ───────────────────────────────────
async function loadPedidos() {
    const lista = document.getElementById('lista-pedidos');

    lista.innerHTML = `
        <div class="text-center py-5">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>`;

    try {
        const token = localStorage.getItem('token');

        const res = await fetch('/api/encabezados-pedidos', {
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`,
            }
        });

        const data = await res.json();

        if (!res.ok) throw new Error(data.message || 'Error al cargar pedidos');

        pedidos = data;
        renderLista();

    } catch (error) {
        console.error('Error cargando pedidos:', error);
        lista.innerHTML = `
            <div class="dash-empty">
                <i class="ti ti-alert-circle"></i>
                <p>No se pudieron cargar los pedidos</p>
                <small>${error.message}</small>
            </div>`;
    }
}

// ── Render lista ─────────────────────────────────────────────
function renderLista() {
    const lista = document.getElementById('lista-pedidos');

    if (!pedidos.length) {
        lista.innerHTML = `
            <div class="dash-empty">
                <i class="ti ti-shopping-bag"></i>
                <p>Todavía no realizaste pedidos</p>
                <small>Explorá el catálogo y encontrá tu camiseta</small>
            </div>`;
        return;
    }

    lista.innerHTML = pedidos.map(p => `
        <button class="pedido-row w-100 text-start" onclick="abrirModal(${p.id})">
            <div class="pedido-row-icon"><i class="ti ti-shopping-bag"></i></div>
            <div class="pedido-row-info">
                <div class="pedido-row-id">#GF-${String(p.id).padStart(8, '0')}</div>
                <div class="pedido-row-meta">
                    <span><i class="ti ti-calendar me-1"></i>${formatFecha(p.created_at)}</span>
                    <span><i class="ti ti-shirt me-1"></i>${p.detalles?.length ?? 0} artículo${(p.detalles?.length ?? 0) !== 1 ? 's' : ''}</span>
                    <span class="estado-badge ${p.estado}">${ucfirst(p.estado)}</span>
                </div>
            </div>
            <div class="pedido-row-total">${formatPrice(p.total)}</div>
            <div class="pedido-row-arrow"><i class="ti ti-chevron-right"></i></div>
        </button>
    `).join('');
}

// ── Abrir modal con detalle ───────────────────────────────────
async function abrirModal(id) {
    const modalEl = document.getElementById('modalPedido');
    const body = document.getElementById('modal-detalle-body');
    const label = document.getElementById('modalPedidoLabel');
    const modal = new bootstrap.Modal(modalEl);

    body.innerHTML = `
        <div class="text-center py-5">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>`;
    modal.show();

    try {
        const token = localStorage.getItem('token');

        const res = await fetch(`/api/detalles-pedidos/encabezado/${id}`, {
            headers: {
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`,
            }
        });

        const data = await res.json();

        if (!res.ok) throw new Error(data.message || 'Error al cargar el pedido');

        label.textContent = `Pedido #GF-${String(data.id).padStart(8, '0')}`;
        body.innerHTML = buildModal(data);

    } catch (error) {
        console.error('Error cargando detalle:', error);
        body.innerHTML = `
            <div class="text-center py-4" style="color:var(--color-red)">
                <i class="ti ti-alert-circle" style="font-size:2.5rem;display:block;margin-bottom:.75rem"></i>
                <p class="mb-0">No se pudo cargar el pedido. Intentá de nuevo.</p>
            </div>`;
    }
}

// ── Builder modal ─────────────────────────────────────────────
function buildModal(p) {
    const estado = p.estado?.toLowerCase().replace(/\s+/g, '-');
    return `
       
        ${buildProductosSection(p)}
    `;
}
function buildTimeline(estado) {
    const key = estado?.toLowerCase().replace(/\s+/g, '-');
    const stepIdx = ESTADO_STEP[key] ?? 0;
    const progPct = Math.round((stepIdx / (STEPS.length - 1)) * 100);

    const stepsHTML = STEPS.map((s, i) => {
        const cls = i < stepIdx ? 'done' : i === stepIdx ? 'current' : '';
        return `
            <div class="estado-step ${cls}">
                <div class="estado-step-dot"><i class="ti ${STEP_ICONS[i]}"></i></div>
                <div class="estado-step-label">${s}</div>
            </div>`;
    }).join('');

    return `
        <div class="estado-timeline mb-4">
            <div class="estado-timeline-progress" style="width:${progPct}%"></div>
            ${stepsHTML}
        </div>`;
}

function buildInfoSection(p) {
    return `
        <div class="detalle-section">
            <div class="detalle-section-title">Info del pedido</div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Número</span>
                <span class="detalle-dato-valor">#GF-${String(p.id).padStart(8, '0')}</span>
            </div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Fecha</span>
                <span class="detalle-dato-valor">${formatFecha(p.created_at)}</span>
            </div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Estado</span>
                <span class="estado-badge ${p.estado}">${ucfirst(p.estado)}</span>
            </div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Dirección</span>
                <span class="detalle-dato-valor">${p.direccion_envio ?? '—'}</span>
            </div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Método de envío</span>
                <span class="detalle-dato-valor">${p.metodo_envio ?? '—'}</span>
            </div>
            <div class="detalle-dato">
                <span class="detalle-dato-label">Envío</span>
                <span class="detalle-dato-valor">${p.costo_envio > 0 ? formatPrice(p.costo_envio) : 'Gratis'}</span>
            </div>
        </div>`;
}

function buildProductosSection(p) {
    const items = p.detalles ?? [];

    // calcular total desde detalles por si p.total viene null/undefined
    const total = p.total ?? items.reduce((sum, item) => sum + Number(item.subtotal ?? 0), 0);

    const itemsHTML = items.map(item => `
        <div class="detalle-item">
            <img src="${item.product?.image ?? '/img/placeholder-shirt.jpg'}" alt="${item.producto_nombre}">
            <div class="detalle-item-info">
                <div class="detalle-item-nombre">${item.producto_nombre}</div>
                <div class="detalle-item-meta">Talle ${item.talle_nombre} · x${item.cantidad}</div>
            </div>
            <div class="detalle-item-precio">${formatPrice(item.subtotal)}</div>
        </div>
    `).join('');

    return `
        <div class="detalle-section">
            <div class="detalle-section-title">Artículos</div>
            ${itemsHTML}
            <div class="detalle-total-line">
                <span class="detalle-total-label">Total</span>
                <span class="detalle-total-valor">${formatPrice(total)}</span>
            </div>
        </div>`;
}
// ── Helpers ───────────────────────────────────────────────────
function formatPrice(n) {
    return '$' + Number(n).toLocaleString('es-AR', { minimumFractionDigits: 0 });
}

function formatFecha(str) {
    if (!str) return '—';
    return new Date(str).toLocaleDateString('es-AR', { day: '2-digit', month: 'short', year: 'numeric' });
}

function ucfirst(str) {
    if (!str) return '';
    return str.charAt(0).toUpperCase() + str.slice(1).replace(/-/g, ' ');
}