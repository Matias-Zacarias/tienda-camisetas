<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="GOLEADOR FC — La tienda online de camisetas de fútbol oficiales y alternativas." />
  <title>{{ $title ?? 'GOLEADOR FC' }}</title>
  <link rel="icon" type="image/ico" sizes="64x64" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link rel="stylesheet" href="/css/estilos.css">

</head>

<body>
  <x-navbar />

  @yield('content')

  <x-footer />
  <script>
    // ================================================
    // ANIMACIONES
    // ================================================
    const elements = document.querySelectorAll('.reveal, .reveal2');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, {
      threshold: 0.3
    });

    elements.forEach(el => observer.observe(el));

    // ================================================
    // FORMULARIO
    // ================================================
    const form = document.getElementById('contact-form');
    const success = document.getElementById('form-success');

    if (form && success) {

      const rules = {
        nombre: {
          required: true,
          label: 'El nombre es obligatorio'
        },
        apellido: {
          required: true,
          label: 'El apellido es obligatorio'
        },
        email: {
          required: true,
          label: 'El email es obligatorio',
          pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
          patternMsg: 'Ingresá un email válido'
        },
        asunto: {
          required: true,
          label: 'Seleccioná un asunto'
        },
        mensaje: {
          required: true,
          label: 'El mensaje es obligatorio'
        },
      };

      function validateField(name, value) {
        const rule = rules[name];

        if (!rule) return null;

        if (rule.required && !value.trim()) {
          return rule.label;
        }

        if (rule.pattern && value && !rule.pattern.test(value)) {
          return rule.patternMsg;
        }

        return null;
      }

      function showError(name, msg) {
        const errorEl = document.querySelector(`[data-field="${name}"]`);
        const input = document.getElementById(name);

        if (errorEl) {
          errorEl.textContent = msg || '';
        }

        if (input) {
          input.classList.toggle('is-invalid', !!msg);
        }
      }

      function resetForm() {
        form.reset();

        document.querySelectorAll('.form-error')
          .forEach(el => el.textContent = '');

        document.querySelectorAll('.form-control-gf')
          .forEach(el => el.classList.remove('is-invalid'));

        success.style.display = 'none';
        form.style.display = 'block';
      }

      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        // Validación existente — sin cambios
        let valid = true;

        Object.keys(rules).forEach(name => {
          const input = document.getElementById(name);
          if (!input) return;
          const error = validateField(name, input.value);
          showError(name, error);
          if (error) valid = false;
        });

        if (!valid) return;

        // ── Desde acá es lo nuevo ────────────────────────────────

        const btn = form.querySelector('[type="submit"]');

        // Loading
        btn.disabled = true;
        btn.innerHTML = `<span class="spinner-border spinner-border-sm me-2"></span>Enviando...`;

        const payload = {
          nombre: document.getElementById('nombre').value.trim(),
          apellido: document.getElementById('apellido').value.trim(),
          email: document.getElementById('email').value.trim(),
          telefono: document.getElementById('telefono')?.value.trim() || null,
          mensaje: document.getElementById('mensaje').value.trim(),
          asunto: document.getElementById('asunto')?.value || null,
        };

        try {

          const response = await fetch('/api/consultas', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
            },
            body: JSON.stringify(payload),
          });

          const data = await response.json();

          // Errores de validación de Laravel (422)
          if (response.status === 422 && data.errors) {
            Object.entries(data.errors).forEach(([campo, msgs]) => {
              showError(campo, msgs[0]);
            });
            return;
          }

          if (!response.ok) {
            throw new Error(data.message || 'Error al enviar el mensaje');
          }

          // Éxito — igual que antes
          form.style.display = 'none';
          success.style.display = 'block';
          success.scrollIntoView({ behavior: 'smooth', block: 'center' });

        } catch (error) {

          // Error de red o del servidor
          let errDiv = document.getElementById('cf-api-error');
          if (!errDiv) {
            errDiv = document.createElement('p');
            errDiv.id = 'cf-api-error';
            errDiv.style.cssText = `
        color: var(--color-red);
        font-size: .85rem;
        margin-top: .5rem;
        text-align: center;
      `;
            btn.parentElement.appendChild(errDiv);
          }
          errDiv.textContent = `⚠ ${error.message}`;

        } finally {

          // Restaurar botón siempre
          btn.disabled = false;
          btn.innerHTML = `<i class="bi bi-send me-2"></i>Enviar mensaje`;

        }
      });

      Object.keys(rules).forEach(name => {
        const input = document.getElementById(name);

        if (!input) return;

        input.addEventListener('blur', () => {
          const error = validateField(name, input.value);
          showError(name, error);
        });

        input.addEventListener('input', () => {
          if (input.classList.contains('is-invalid')) {
            const error = validateField(name, input.value);
            showError(name, error);
          }
        });
      });
    }

    // ================================================
    // CARRITO
    // ================================================

    let cart = [];

    document.addEventListener(
      'DOMContentLoaded',
      () => {

        const token =
          localStorage.getItem(
            'token'
          );

        if (token) {
          loadCart();
        }

      }
    );



    function updateBadges() {

      const total =
        cart.reduce(
          (sum, item) =>
            sum + item.cantidad,
          0
        );

      document
        .querySelectorAll('.cart-badge')
        .forEach(badge => {

          badge.textContent = total;

        });
    }

    function updateTotal() {




      const total = cart.reduce((sum, item) => {

        return sum + (
          Number(item?.product?.price) * item.cantidad
        );

      }, 0);

      const totalEl =
        document.getElementById(
          'cart-total'
        );

      if (totalEl) {

        totalEl.textContent =
          `$${total.toLocaleString('es-AR')}`;

      }
    }

    function renderCart() {

      const list = document.getElementById('cart-list');
      const empty = document.getElementById('cart-empty');
      const footer = document.getElementById('cart-footer');

      if (!list || !empty || !footer) return;

      if (cart.length === 0) {
        list.style.display = 'none';
        empty.style.display = 'flex';
        footer.style.display = 'none';
        return;
      }

      empty.style.display = 'none';
      list.style.display = 'flex';
      footer.style.display = 'block';

      list.innerHTML = cart.map((item, idx) => `

<li class="cart-item">

    <img
        class="cart-item-img"
        src="${item?.product?.image}"
        alt="${item?.product?.name}"
    >

    <div class="cart-item-info">

        <div class="cart-item-name">
            ${item?.product.name}
        </div>

        <div class="cart-item-liga">
            ${item?.product.short_description}
        </div>

        <div class="cart-item-talle">
            Talle: ${item?.talle?.name}
        </div>

    </div>

    <div class="cart-item-actions">

        <div class="cart-item-price">
            $${item?.product?.price}
        </div>

        <div class="cart-qty-controls">

            <button
                type="button"
                 onclick="changeCartQty(${item.id}, ${item.cantidad - 1})"
            >
                -
            </button>

            <span class="cart-item-qty">
                ${item.cantidad}
            </span>

            <button
                type="button"
                onclick="changeCartQty(${item.id}, ${item.cantidad + 1})"
            >
                +
            </button>

        </div>

    </div>

    <button
        class="cart-item-remove"
        onclick="removeFromCart(${item.id})"
    >
        <i class="bi bi-trash3"></i>
    </button>

</li>

`).join('');

      updateTotal();
    }

    // ================================================
    // FUNCIONES GLOBALES
    // ================================================
    async function removeFromCart(
      cartItemId
    ) {

      try {
        const token =
          localStorage.getItem(
            'token'
          );
        console.log('Eliminando cartItemId:', cartItemId);

        const response =
          await fetch(
            `/api/carrito-items/${cartItemId}`,
            {
              method: 'DELETE',
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`
              },
            }
          );

        if (!response.ok) {
          throw new Error(
            'Error al eliminar producto'
          );
        }

        await loadCart();

      } catch (error) {

        console.error(error);

      }
    }

    async function changeCartQty(
      cartItemId,
      nuevaCantidad,

    ) {

      console.log('cartItemId:', cartItemId);
      console.log('nuevaCantidad:', nuevaCantidad);

      try {
        const token =
          localStorage.getItem(
            'token'
          );

        const response =
          await fetch(
            `/api/carrito-items/${cartItemId}`,
            {
              method: 'put',
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`

              },
              body: JSON.stringify({
                cantidad: nuevaCantidad
              })
            }
          );

        const data =
          await response.json();

        if (!response.ok) {
          throw new Error(
            data.message
          );
        }

        await loadCart();

      } catch (error) {

        console.error(error);

      }
    }

    async function addToCart() {

      if (!productoDetalle.talle_id) {

        alert(
          'Seleccioná un talle'
        );

        return;
      }

      const token =
        localStorage.getItem(
          'token'
        );

      try {

        const response =
          await fetch(
            '/api/carrito-items',
            {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${token}`
              },
              body: JSON.stringify({

                product_id:
                  productoDetalle.product_id,

                talle_id:
                  productoDetalle.talle_id,

                cantidad:
                  productoDetalle.cantidad

              })
            }
          );

        const data =
          await response.json();

        if (!response.ok) {

          throw new Error(
            data.message ||
            'Error al agregar producto'
          );

        }

        await loadCart();

        const cartOffcanvas =
          document.getElementById(
            'cartOffcanvas'
          );

        if (cartOffcanvas) {

          bootstrap
            .Offcanvas
            .getOrCreateInstance(
              cartOffcanvas
            )
            .show();

        }

      } catch (error) {

        console.error(error);

      }
    }



    async function loadCart() {

      const token = localStorage.getItem('token');

      try {

        const response = await fetch(
          '/api/carrito-items',
          {
            method: 'GET',
            headers: {
              'Accept': 'application/json',
              'Authorization': `Bearer ${token}`
            }
          })

        const data =
          await response.json();

        if (!response.ok) {
          throw new Error(
            data.message ||
            'Error al cargar carrito'
          );
        }

        cart = data;

        console.log('Carrito cargado:', cart);

        updateBadges();
        renderCart();

      } catch (error) {

        console.error(error);

      }
    }

    // ================================================
    // INIT
    // ================================================
    document.addEventListener('DOMContentLoaded', () => {
      updateBadges();
      renderCart();
    });

    function initNavbarAuth() {

      const loggedIn =
        !!localStorage.getItem('token');


      const loginOpcion =
        document.getElementById(
          'loginContainer'
        );

      const misPedidos =
        document.getElementById(
          'misPedidosLink'
        );

      const mobileCart =
        document.getElementById(
          'carritoMobile'
        );

      const desktopCart =
        document.getElementById(
          'carritoDesktop'
        );


      const logoutContainer =
        document.getElementById('logoutContainer');



      if (loggedIn) {

        misPedidos?.closest('.nav-item')
          .classList.remove('d-none');



        mobileCart?.classList.remove('d-none');
        mobileCart?.classList.add('d-flex');

        desktopCart?.classList.remove('d-none');
        desktopCart?.classList.add('d-lg-flex');

        logoutContainer.innerHTML = `
        <a
            href="#"
            class="nav-link-gf"
            onclick="logout(event)"
        >
            <i class="bi bi-box-arrow-right"></i>
            Salir
        </a>
    `;

        loginOpcion.innerHTML = '';

      } else {

        loginOpcion.innerHTML = `
        <a
            href="/login"
            class="nav-link-gf"

        >
            <i class="bi bi-box-arrow-right"></i>
            iniciar sesión
        </a>
    `;


        misPedidos?.closest('.nav-item')
          .classList.add('d-none');



        mobileCart?.classList.add('d-none');
        mobileCart?.classList.remove('d-flex');

        desktopCart?.classList.add('d-none');

        logoutContainer.innerHTML = '';
      }
    }

    document.addEventListener(
      'DOMContentLoaded',
      initNavbarAuth
    );



    function logout(event) {

      event.preventDefault();

      localStorage.removeItem('token');

      localStorage.removeItem('user');

      localStorage.removeItem('gf_cart');

      window.location.href = '/login';
    }
  </script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/landing.js"></script>

  @stack('scripts')
</body>

</html>