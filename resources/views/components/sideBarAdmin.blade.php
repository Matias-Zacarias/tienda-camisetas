<aside class="sidebar" id="sidebar">
    <div class="logo">
        <div class="logo-icon">E</div>
        <div class="logo-text">EcomAdmin</div>
    </div>

    <nav class="nav-section">
        <div class="nav-title">Principal</div>
        <a class="nav-item {{ request()->is('panel-admin') ? 'active' : '' }}" href="/panel-admin"
            data-section="dashboard">
            <span class="nav-icon">📊</span>
            <span>Dashboard</span>
        </a>
        <a class="nav-item {{ request()->is('panel-admin-productos') ? 'active' : '' }}" href="/panel-admin-productos"
            data-section="products">
            <span class="nav-icon">📦</span>
            <span>Productos</span>
        </a>
        <a class="nav-item {{ request()->is('panel-admin-pedidos') ? 'active' : '' }}" href="/panel-admin-pedidos"
            data-section="orders">
            <span class="nav-icon">🛒</span>
            <span>Pedidos</span>
            <span class="badge">12</span>
        </a>
    </nav>

    <nav class="nav-section">
        <div class="nav-title">Gestión</div>
        <a class="nav-item {{ request()->is('panel-admin-usuarios') ? 'active' : '' }}" href="/panel-admin-usuarios"
            data-section="users">
            <span class="nav-icon">👥</span>
            <span>Usuarios</span>
        </a>
        <a class="nav-item {{ request()->is('panel-admin-consultas') ? 'active' : '' }}" href="/panel-admin-consultas"
            data-section="messages">
            <span class="nav-icon">💬</span>
            <span>Consultas</span>
            <span class="badge">5</span>
        </a>
        <!-- <a class="nav-item {{ request()->is('panel-admin-stock') ? 'active' : '' }}" href="/panel-admin-stock"
            data-section="stock">
            <span class="nav-icon">📏</span>
            <span>Stock de Talles</span>
        </a> -->
    </nav>

    <nav class="nav-section">
        <div class="nav-title">Contenido</div>
        <a class="nav-item {{ request()->is('panel-admin-estadisticas') ? 'active' : '' }}"
            href="/panel-admin-estadisticas" data-section="statistics">
            <span class="nav-icon">📈</span>
            <span>Estadísticas</span>
        </a>
        <a class="nav-item" href="/" target="_blank">
            <span class="nav-icon">🌐</span>
            <span>Ver como Visitante</span>
        </a>
    </nav>
</aside>