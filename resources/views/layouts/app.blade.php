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

    function resetForm () {
      form.reset();

      document.querySelectorAll('.form-error')
        .forEach(el => el.textContent = '');

      document.querySelectorAll('.form-control-gf')
        .forEach(el => el.classList.remove('is-invalid'));

      success.style.display = 'none';
      form.style.display = 'block';
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      let valid = true;

      Object.keys(rules).forEach(name => {
        const input = document.getElementById(name);

        if (!input) return;

        const error = validateField(name, input.value);

        showError(name, error);

        if (error) {
          valid = false;
        }
      });

      if (!valid) return;

      form.style.display = 'none';
      success.style.display = 'block';

      success.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
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
  let cart = JSON.parse(localStorage.getItem('gf_cart') || '[]');

  function saveCart() {
    localStorage.setItem('gf_cart', JSON.stringify(cart));
  }

  function updateBadges() {
    const total = cart.reduce((sum, item) => sum + item.qty, 0);

    document.querySelectorAll('.cart-badge').forEach(badge => {
      badge.textContent = total;

      badge.classList.remove('pop');
      void badge.offsetWidth;

      if (total > 0) {
        badge.classList.add('pop');
      }

      setTimeout(() => {
        badge.classList.remove('pop');
      }, 300);
    });
  }

  function updateTotal() {
    const total = cart.reduce((sum, item) => {

      const price = parseFloat(
        item.precio
          .replace(/\./g, '')
          .replace(',', '.')
      );

      return sum + (price * item.qty);

    }, 0);

    const totalEl = document.getElementById('cart-total');

    if (totalEl) {
      totalEl.textContent = `$${total.toLocaleString('es-AR')}`;
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
          src="${item.imagen}"
          alt="${item.nombre}"
          onerror="this.style.background='var(--color-border)';this.src=''"
        >

        <div class="cart-item-info">
          <div class="cart-item-name">${item.nombre}</div>
          <div class="cart-item-liga">${item.liga}</div>
        </div>

        <div class="cart-item-price">
          $${item.precio}
        </div>

        <button
          class="cart-item-remove"
          onclick="removeFromCart(${idx})"
          aria-label="Eliminar"
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
  function addToCart (product) {

    const exists = cart.findIndex(
      item => item.nombre === product.nombre
    );

    if (exists >= 0) {
      cart[exists].qty += 1;
    } else {
      cart.push({
        ...product,
        qty: 1
      });
    }

    saveCart();
    updateBadges();
    renderCart();

    const cartOffcanvas = document.getElementById('cartOffcanvas');

    if (cartOffcanvas) {
      const offcanvas = bootstrap.Offcanvas.getOrCreateInstance(cartOffcanvas);
      offcanvas.show();
    }
  }

  function removeFromCart (idx) {
    cart.splice(idx, 1);

    saveCart();
    updateBadges();
    renderCart();
  }

  // ================================================
  // INIT
  // ================================================
  document.addEventListener('DOMContentLoaded', () => {
    updateBadges();
    renderCart();
  });
</script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>