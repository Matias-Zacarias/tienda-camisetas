
# Reglas de negocio

- El usuario debe estar registrado para comprar.
- El stock se controla por talle.
- Solo administradores pueden acceder al panel administrativo.
- Los pedidos se registran con estado inicial "Pendiente".

---

# Autor

Desarrollado por Matias Zacarias y Gustavo Montes Palavecino.


# Manual de Usuario — GOLEADOR FC
**Tienda Online de Camisetas de Fútbol**
Versión 1.0 | Junio 2026

---

## Índice

1. [Introducción](#introducción)
2. [Registro e Inicio de Sesión](#registro-e-inicio-de-sesión)
3. [Navegación General](#navegación-general)
4. [Catálogo de Productos](#catálogo-de-productos)
5. [Detalle de Producto](#detalle-de-producto)
6. [Carrito de Compras](#carrito-de-compras)
7. [Proceso de Compra](#proceso-de-compra)
8. [Mis Pedidos](#mis-pedidos)
9. [Formulario de Consultas](#formulario-de-consultas)
10. [Panel de Administración](#panel-de-administración)

---

## 1. Introducción

GOLEADOR FC es una tienda online de camisetas de fútbol. Permite navegar el catálogo, agregar productos al carrito, realizar pedidos y hacer consultas directamente desde el sitio.

**URL de acceso:** `http://tienda-camisetas.test` (desarrollo) / dominio de producción `https://taller.minimeyapi.com`

---

## 2. Registro e Inicio de Sesión

### Registrarse

1. Ir a `/login`, tocar el boton de registrarse para acceder a la seccion
2. Completar: nombre, email y contraseña
3. Hacer clic en **Registrarse**
4. El sistema crea la cuenta, cambiar a inicio e iniciar sesion

### Iniciar sesión

1. Ir a `/login`
2. Ingresar email y contraseña registrados
3. Hacer clic en **Iniciar sesión**
4. El token de sesión se guarda en el navegador automáticamente

### Cerrar sesión

- Hacer clic en el botón **Salir** en el navbar
- El sistema elimina el token y la sesión

---

## 3. Navegación General

El navbar superior contiene:

| Sección | URL | Descripción |
|---|---|---|
| Inicio | `/` | Hero, productos destacados y CTA |
| Quiénes Somos | `/about` | Historia, equipo y valores |
| Catálogo | `/catalogo` | Todos los productos disponibles |
| Comercialización | `/comercializacion` | Pagos, envíos y tiempos |
| Consultas | `/consultas` | FAQ y formulario de consulta |
| Mis pedidos | `/pedidos` | Datos de pedidos realizados solo en caso de tener cuenta |

El **ícono de carrito** (🛍) en el navbar muestra la cantidad de productos agregados y abre el panel lateral.

---

## 4. Catálogo de Productos

En `/catalogo` se muestran todas las camisetas disponibles en una grilla responsive.

Cada tarjeta muestra:
- Imagen de la camiseta
- Liga / Selección
- Nombre del producto
- Precio (y precio anterior si tiene oferta)
- Botón **ver mas ** para llevar al detalle

---

## 5. Detalle de Producto

Al acceder a `/detalle/{id}` se muestra:

- Foto principal de la camiseta
- Nombre, liga y descripción
- Precio (con descuento si aplica, y el porcentaje de ahorro)
- **Selector de talles:** S, M, L, XL, XXL
  - Talles con stock disponible: se pueden seleccionar
  - Talles sin stock: aparecen con una línea diagonal y deshabilitados
- **Indicador de stock** al seleccionar un talle:
  - 🟢 Verde: stock disponible (10+ unidades)
  - 🔴 Rojo: últimas unidades (menos de 10)

- Botón **Agregar al carrito** (se habilita al seleccionar talle y si no tenes cuenta te manda a creartela y despues podes volver a donde estabas)

---

## 6. Carrito de Compras

El carrito se abre desde el ícono en el navbar y muestra:

- Lista de productos agregados con imagen, nombre, talle y precio
- Botón para eliminar cada ítem (🗑)
- Total acumulado
- Botón **Finalizar compra** (redirige al checkout)

> El carrito persiste en el en una tabla de la base de datos . Si cerrás la pestaña y volvés, los productos siguen guardados.

---

## 7. Proceso de Compra

Al ir a `/confirmar-compra`:

**Paso 1 — Datos de envío**
Completar: teléfono, dirección, ciudad, provincia y código postal.
Todos los campos son obligatorios excepto el teléfono.

**Paso 2 — Método de envío**
Elegir entre:
- **OCA** — 2 a 5 días hábiles — $2.800
- **Correo Argentino** — 5 a 10 días hábiles — $1.800
- **Retiro en local** — 24 hs hábiles — Gratis

**Paso 3 — Observaciones** (opcional)
Indicaciones especiales para el envío o el pedido.

**Resumen del pedido** (columna derecha)
Muestra los productos, subtotal, costo de envío y total final.

**Confirmar pedido**
Al hacer clic se validan los datos. Si todo está correcto, aparece el mensaje de confirmación y el pedido queda registrado.

---

## 8. Mis Pedidos

En `/pedidos` se puede ver el historial de compras:

- Lista de todos los pedidos ordenados por fecha
- Estado de cada pedido:
  - 🟡 **Pendiente** — recibido, en espera de coordinación
  - 🔵 **En preparación** — siendo preparado
  - 🚛 **En camino** — enviado
  - ✅ **Entregado** — recibido
- Al hacer clic en un pedido se abre el detalle con:
  - Timeline visual del estado
  - Productos comprados
  - Datos de envío
  - Costo total
  - Observaciones (si las hubo)

---

## 9. Formulario de Consultas

En `/consultas` hay un formulario para enviar preguntas:

**Campos:**
- Nombre *(requerido)*
- Apellido *(requerido)*
- Email *(requerido)*
- Teléfono *(opcional)*
- Asunto *(requerido en la página de consultas)*
- Mensaje *(requerido)*

Al enviar, si todos los campos son válidos, se muestra una pantalla de confirmación. El botón **Enviar otro mensaje** reinicia el formulario.

---

## 10. Panel de Administración

Accesible desde `/panel-admin` (solo usuarios administradores).

### Secciones disponibles

| Sección | URL | Función |
|---|---|---|
| Dashboard | `/panel-admin` | Estadísticas generales |
| Productos | `/panel-admin-productos` | ABM de camisetas |
| Pedidos | `/panel-admin-pedidos` | Ver y gestionar pedidos |
| Usuarios | `/panel-admin-usuarios` | Lista de usuarios registrados |
| Consultas | `/panel-admin-consultas` | Gestión de mensajes |
| Stock | `/panel-admin-stock` | Control de inventario |

### Gestión de consultas

- Lista de mensajes con indicador de **leído / no leído**
- Filtro por estado: Todos / No leídos 
- Al abrir una consulta se marca como **leída** automáticamente
- Botones disponibles:
  - **Marcar como respondida** — cambia el estado en la base de datos
  - **Eliminar** — borra la consulta con confirmación previa



# Especificación de Requisitos de Software (ERS)
## GOLEADOR FC — Tienda Online de Camisetas de Fútbol

**Versión:** 1.0
**Fecha:** Junio 2026
**Autor:** Matias Zacarias y Gustavo Montes Palavecino.

---

## Índice

1. [Introducción](#1-introducción)
2. [Descripción General del Sistema](#2-descripción-general-del-sistema)
3. [Requisitos Funcionales](#3-requisitos-funcionales)
4. [Requisitos No Funcionales](#4-requisitos-no-funcionales)
5. [Modelo de Datos](#5-modelo-de-datos)
6. [Casos de Uso Principales](#6-casos-de-uso-principales)
7. [Restricciones y Suposiciones](#7-restricciones-y-suposiciones)

---

## 1. Introducción

### 1.1 Propósito

Este documento describe los requisitos funcionales y no funcionales del sistema **GOLEADOR FC**, una tienda online para la venta de camisetas de fútbol orientada al mercado argentino.

### 1.2 Alcance

El sistema contempla:
- Sitio web público para clientes (catálogo, carrito, checkout, consultas)
- Panel de administración para gestión interna
- API REST como capa de comunicación entre frontend y backend

### 1.3 Tecnologías utilizadas

| Capa | Tecnología |
|---|---|
| Framework backend | Laravel 11 |
| Autenticación | Laravel Sanctum |
| Base de datos | SQLITE |
| Frontend | Bootstrap 5 + Blade |
| Servidor de desarrollo | Laravel Herd |
| Gestión de assets | Vite |

---

## 2. Descripción General del Sistema

### 2.1 Perspectiva del producto

GOLEADOR FC es un sistema web de e-commerce especializado en indumentaria deportiva. Opera como tienda estática con catálogo administrable, carrito de compras, gestión de pedidos y canal de comunicación con clientes.

### 2.2 Tipos de usuarios

| Rol | Descripción | Acceso |
|---|---|---|
| **Visitante** | Usuario no autenticado | Catálogo, info, formularios |
| **Cliente** | Usuario registrado | + Carrito, checkout, mis pedidos |
| **Administrador** | Staff interno | + Panel admin completo |

### 2.3 Entorno de operación

- Navegadores modernos (Chrome, Firefox, Safari, Edge)
- Dispositivos: desktop, tablet y mobile (diseño responsive)
- Conexión a internet requerida

---

## 3. Requisitos Funcionales

### RF-01 — Autenticación

| ID | Requisito |
|---|---|
| RF-01.1 | El sistema debe permitir el registro de nuevos usuarios con nombre, email y contraseña |
| RF-01.2 | El sistema debe autenticar usuarios mediante email y contraseña |
| RF-01.3 | El sistema debe emitir un token Sanctum al autenticarse exitosamente |
| RF-01.4 | El sistema debe revocar el token y destruir la sesión al hacer logout |
| RF-01.5 | El sistema debe proteger las rutas de panel admin mediante middleware de rol |

### RF-02 — Catálogo de productos

| ID | Requisito |
|---|---|
| RF-02.1 | El sistema debe listar todos los productos activos con imagen, nombre, precio |
| RF-02.2 | El sistema debe mostrar precio original tachado cuando hay precio de oferta |
| RF-02.3 | El sistema debe listar solo los productos activos |
| RF-02.4 | El sistema debe mostrar una página de detalle por producto |

### RF-03 — Detalle de producto

| ID | Requisito |
|---|---|
| RF-03.1 | El sistema debe mostrar imagen, descripción, precio y talles disponibles |
| RF-03.2 | El sistema debe indicar visualmente los talles sin stock (deshabilitados con tachado diagonal) |
| RF-03.3 | El sistema debe mostrar el nivel de stock al seleccionar un talle |
| RF-03.4 | El botón "Agregar al carrito" debe habilitarse solo al seleccionar un talle disponible |

### RF-04 — Carrito de compras

| ID | Requisito |
|---|---|
| RF-04.1 | El sistema debe permitir agregar productos al carrito con talle seleccionado |
| RF-04.2 | El carrito debe persistir en el navegador (localStorage) |
| RF-04.3 | El sistema debe permitir eliminar ítems del carrito |
| RF-04.4 | El sistema debe calcular el total acumulado en tiempo real |
| RF-04.5 | El carrito debe abrirse como panel lateral (offcanvas) |

### RF-05 — Proceso de compra (Checkout)

| ID | Requisito |
|---|---|
| RF-05.1 | El sistema debe requerir datos de envío: teléfono, dirección, ciudad, provincia y CP |
| RF-05.2 | El sistema debe ofrecer al menos 3 métodos de envío con costos diferenciados |
| RF-05.3 | El sistema debe actualizar el total según el método de envío seleccionado |
| RF-05.4 | El sistema debe validar todos los campos requeridos antes de confirmar |
| RF-05.5 | Al confirmar, el sistema debe crear un encabezado de pedido en la base de datos |
| RF-05.6 | Al confirmar, el sistema debe crear los detalles del pedido en la base de datos |
| RF-05.7 | Al confirmar exitosamente, el sistema debe vaciar el carrito |
| RF-05.8 | El sistema debe mostrar confirmación visual al completar el pedido |

### RF-06 — Gestión de pedidos (cliente)

| ID | Requisito |
|---|---|
| RF-06.1 | El cliente debe poder ver el historial de sus pedidos |
| RF-06.2 | El sistema debe mostrar el estado de cada pedido |
| RF-06.3 | El cliente debe poder ver el detalle completo de cada pedido |

### RF-07 — Consultas y contacto

| ID | Requisito |
|---|---|
| RF-07.1 | El sistema debe permitir enviar consultas sin estar registrado |
| RF-07.2 | El formulario debe capturar: nombre, apellido, email, teléfono (opcional) y mensaje |
| RF-07.3 | El sistema debe validar los campos requeridos antes de enviar |
| RF-07.4 | El sistema debe guardar la consulta en la base de datos |
| RF-07.5 | El sistema debe confirmar visualmente el envío exitoso |

### RF-08 — Panel de administración

| ID | Requisito |
|---|---|
| RF-08.1 | Solo usuarios con rol administrador pueden acceder al panel |
| RF-08.2 | El panel debe mostrar estadísticas generales en el dashboard |
| RF-08.3 | El administrador debe poder listar, crear, editar y eliminar productos |
| RF-08.4 | El administrador debe poder ver y gestionar pedidos |
| RF-08.5 | El administrador debe poder listar usuarios registrados |
| RF-08.6 | El administrador debe poder ver, marcar como leída/respondida |
| RF-08.7 | Las consultas deben marcarse como leídas automáticamente al abrirlas |

---

## 4. Requisitos No Funcionales

### RNF-01 — Rendimiento
- Las páginas deben cargar en menos de 3 segundos en condiciones normales
- Las consultas a la API deben responder en menos de 1 segundo

### RNF-02 — Seguridad
- Las contraseñas deben almacenarse con hash bcrypt
- Todas las rutas de API protegidas deben requerir token Bearer válido
- El panel admin debe estar protegido por middleware de rol
- Las sesiones deben invalidarse completamente al hacer logout

### RNF-03 — Usabilidad
- El diseño debe ser completamente responsive (mobile-first)
- Los formularios deben mostrar errores inline en tiempo real
- El sistema debe dar feedback visual en toda acción (loading, éxito, error)

### RNF-04 — Compatibilidad
- Compatible con Chrome, Firefox, Safari y Edge (últimas 2 versiones)
- Compatible con dispositivos iOS y Android

### RNF-05 — Mantenibilidad
- El código debe seguir las convenciones de Laravel (PSR-12)
- Las vistas deben estar modularizadas en componentes Blade reutilizables
- Los estilos deben usar variables CSS para facilitar cambios de tema

---


## 6. Casos de Uso Principales

### CU-01: Realizar una compra

**Actor:** Cliente registrado
**Precondición:** Usuario autenticado, carrito con al menos un producto

1. Cliente navega el catálogo
2. Selecciona un producto y elige talle
3. Agrega al carrito
4. Abre el carrito y hace clic en "Finalizar compra"
5. Completa los datos de envío
6. Elige método de envío
7. Confirma el pedido
8. Sistema crea encabezado y detalles en BD
9. Sistema vacía el carrito
10. Sistema muestra confirmación

**Postcondición:** Pedido registrado en estado "pendiente"

---

### CU-02: Gestionar una consulta (Admin)

**Actor:** Administrador
**Precondición:** Autenticado como admin

1. Admin accede a `/panel-admin-consultas`
2. Sistema carga lista de consultas desde API
3. Admin selecciona una consulta
4. Sistema la abre y la marca como leída automáticamente
5. Admin lee el mensaje
6. Admin hace clic en "Marcar como respondida"
7. Sistema actualiza el estado en BD

**Postcondición:** Consulta marcada como leída y respondida

---

## 7. Restricciones y Suposiciones

### Restricciones
- El sistema no procesa pagos en línea (coordinación manual post-pedido)
- El envío de emails de respuesta a consultas no está implementado en v1.0
- El stock se gestiona manualmente desde el panel admin




# Instrucciones para Levantar el Proyecto
## GOLEADOR FC — Guía de Instalación y Configuración

---

## Requisitos previos

Tener instalado en el sistema:

| Herramienta | Versión mínima | Verificar con |
|---|---|---|
| PHP | 8.2+ | `php -v` |
| Composer | 2.x | `composer -V` |
| npm | 9+ | `npm -v` |
| SQLITE | Última | `sqlite --version` |
| Laravel Herd | Última | — |
| Git | — | `git --version` |

---

## 1. Clonar el repositorio

```bash
git clone https://github.com/Matias-Zacarias/tienda-camisetas.git
cd tienda-camisetas
```

---

## 2. Instalar dependencias PHP

```bash
composer install
```

# Autenticación con Sanctum

Instalar Sanctum

```bash
composer require laravel/sanctum
```

Publicar configuración

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

---

## 3. Instalar dependencias Node

```bash
npm install
```

---

## 4. Configurar el archivo de entorno

Copiar el archivo de ejemplo:

```bash
cp .env.example .env
```

Editar `.env` con los datos del entorno local:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:tsIrxCQm0vHW1d9rsGS96cDmJUKlFwdJ17xlHRZ+LwU=
APP_DEBUG=true
APP_URL=http://tienda-camisetas.test

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

# PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
DB_DATABASE=database/database.sqlite
# DB_USERNAME=root
# DB_PASSWORD=

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=file
# CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

```

---

## 5. Generar la clave de la aplicación

```bash
php artisan key:generate
```

---

---

## 7. Ejecutar las migraciones (opcional en caso de querer reiniciar la base de datos )

```bash
php artisan migrate:fresh
```



## 8. Crear el enlace de almacenamiento

```bash
php artisan storage:link
```

---

## 9. Configurar Laravel Herd

1. Abrir **Laravel Herd**
2. Ir a **Sites** → **Add site**
3. Seleccionar la carpeta del proyecto
4. El dominio se configura automáticamente como `tienda-camisetas.test`
5. Verificar que PHP 8.2+ esté seleccionado para el sitio

Alternativamente, si usás el servidor integrado de Laravel:

```bash
php artisan serve

```

---

## 10. Compilar los assets

Para desarrollo (con hot reload):

```bash
npm run dev
```

Para producción:

```bash
npm run build
```

---

## 11. Crear un usuario administrador

Opción A — desde Tinker:

```bash
php artisan tinker
```

```php
\App\Models\User::create([
    'name'     => 'Admin',
    'email'    => 'admin@goleadorfc.com',
    'password' => bcrypt('password123'),
    'role'     => 'admin',
]);
```

Opción B — Ingresar con usuario administrador previamente cargado (seran proporcionadas aparte)

    'email' => 
    'password' => 

---

## 12. Verificar que todo funciona

```bash
# Listar todas las rutas registradas
php artisan route:list

# Verificar rutas de API
php artisan route:list | grep api
```

Acceder en el navegador:
- Sitio público: `http://tienda-camisetas.test`
- Panel admin: `http://tienda-camisetas.test/panel-admin`
- Login: `http://tienda-camisetas.test/login`

---

## Estructura del proyecto

```
tienda-camisetas/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   
│   │   └── Middleware/
│   └── Models/
│       
├── database/
│   ├── migrations/
│  
├── public/
│   ├── css/
│   │         ← estilos
|   ├── 
│                  
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php    ← layout principal
│   │   │   └── panelAdmin.blade.php
│   │   ├── components/
│   │   │   ├── js/ ← aca tendremos codigo js de panel admin y de la landing
│   │   
│   └── css/
│       └── app.css              ← solo imports (sin Tailwind)
├── routes/
│   ├── web.php
│   └── api.php 
└── vite.config.js
└──README.md  ← el documento que esta leyendo en cuestion
```

---

## Rutas API principales

| Método | Endpoint | Descripción |
|---|---|---|
| POST | `/auth/login` | Login de usuario |
| POST | `/register` | Registro de usuario |
| POST | `/logout` | Cerrar sesión |
| GET | `/api/products` | Listar productos |
| GET | `/api/products/{id}` | Detalle de producto |
| GET | `/api/talles/{id}` | Talles de un producto |
| GET | `/api/carrito-items` | Items del carrito |
| POST | `/api/carrito-items` | Agregar al carrito |
| DELETE | `/api/carrito/user/{userId}` | Vaciar carrito |
| POST | `/api/encabezados-pedidos` | Crear pedido |
| POST | `/api/detalles-pedidos` | Crear detalle de pedido |
| GET | `/api/consultas` | Listar consultas (admin) |
| POST | `/api/consultas` | Crear consulta |
| GET | `/api/consultas/{id}` | Ver consulta (marca como leída) |
| PATCH | `/api/consultas/{id}/respondida` | Marcar respondida |
| DELETE | `/api/consultas/{id}` | Eliminar consulta |

---

## Problemas comunes

### Error: `NO PUEDO VER LA BASE DE DATOS`
Verificar que exista el archivo en `database/database.sqlite` y descargar extension de visual studio code: SQLITE VIEWER

### Error: `SQLite: Access denied`
Verificar credenciales en `.env` y que el usuario SQLITE tenga permisos sobre la base de datos.

### Error: `No application encryption key`
```bash
php artisan key:generate
```


### Sesiones no se destruyen al logout
Verificar que el `AuthController@logout` tenga:
```php
Auth::guard('web')->logout();
$request->session()->flush();
$request->session()->invalidate();
$request->session()->regenerateToken();
```

### `npm run dev` no levanta
```bash
rm -rf node_modules
npm install
npm run dev
```

---

## Comandos útiles

```bash
# Limpiar cachés
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Todo junto
php artisan optimize:clear

# Ver logs en tiempo real
tail -f storage/logs/laravel.log

# Rehacer migraciones desde cero
php artisan migrate:fresh 
```

---

## Deploy en producción

1. Subir archivos al servidor (excluir `node_modules`, `.env`, `storage/logs`)
2. Crear `.env` en producción con `APP_ENV=production` y `APP_DEBUG=false`
3. Ejecutar:

```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate:fresh En caso de no subir la BD
php artisan storage:link
npm run build
php artisan optimize
```

4. Verificar permisos:

```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

5. Verificar que las rutas de imágenes en `public/img` usen **minúsculas** (Linux es case-sensitive).


IMPORTANTE LA VERSION QUE ESTA EN PRODUCCION ES UNAS VERSIONES ATRAS PUEDE VARIAR CON EL PROYECTO ACTUALIZADO.