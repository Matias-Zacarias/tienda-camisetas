# GOLEADOR FC ⚽

Sistema de e-commerce para venta de camisetas de fútbol desarrollado con Laravel.

## Características

- Catálogo de productos
- Gestión de talles y stock
- Carrito de compras
- Registro e inicio de sesión
- Autenticación mediante Laravel Sanctum
- Gestión de pedidos
- Panel de administración
- Control de roles (Administrador / Cliente)
- Gestión de consultas de clientes
- Control de stock por talle
- Historial de pedidos

---

# Tecnologías

- PHP 8+
- Laravel 12
- SQLITE
- Bootstrap 5
- JavaScript Vanilla
- Laravel Sanctum
- Eloquent

---

# Instalación

1- Clonar repositorio

2- Ingresar al proyecto

```bash
cd nombre del proyecto
```

Instalar dependencias

```bash
composer install
```

Copiar variables de entorno

```bash
cp .env.example .env
```

Generar clave

```bash
php artisan key:generate
```

Configurar base de datos en `.env`

```env
DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=database
```



---

# Autenticación con Sanctum

Instalar Sanctum

```bash
composer require laravel/sanctum
```

Publicar configuración

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

Ejecutar migraciones

```bash
php artisan migrate
```

Sanctum se utiliza para generar tokens seguros que identifican al usuario autenticado.

---

Iniciar servidor

```bash
php artisan serve
```



# Configuración recomendada

En `.env`

```env
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=database
```

---

# Crear primer administrador

Ejecutar:

```bash
php artisan tinker
```

Luego:

```php
\App\Models\User::create([
    'name' => 'Administrador',
    'email' => 'admin@test.com',
    'password' => bcrypt('123456'),
    'role' => 'admin'
]);
```

---

# Comandos útiles

Abrir Tinker

```bash
php artisan tinker
```

Limpiar caché

```bash
php artisan optimize:clear
```

Ejecutar migraciones desde cero

```bash
php artisan migrate:fresh
```

---

# Reglas de negocio

- El usuario debe estar registrado para comprar.
- El stock se controla por talle.
- Solo administradores pueden acceder al panel administrativo.
- Los pedidos se registran con estado inicial "Pendiente".

---

# Autor

Desarrollado por Matias Zacarias y Gustavo Montes Palavecino.