<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/register', [
    AuthController::class,
    'register'
]);

Route::post('/auth/login', [
    AuthController::class,
    'login'
]);

Route::post('/logout', [
    AuthController::class,
    'logout'
]);

Route::get('/', function () {
    return view('index');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/about', function () {
    return view('quienesSomos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/consultas', function () {
    return view('consultas');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/detalle/{id}', function ($id) {
    return view('detalle');
});

Route::get('/confirmar-compra', function () {
    return view('confirmarCompra');
});

Route::get('/pedidos', function () {
    return view('pedidos');
});





/* rutas protegidas del panel administrador */

Route::middleware(['auth', 'admin'])
    ->group(function () {

        Route::get('/panel-admin', function () {
            return view('dashboardAdmin');
        });

        Route::get('/panel-admin-productos', function () {
            return view('productAdmin');
        });

        Route::get('/panel-admin-pedidos', function () {
            return view('ordenAdmin');
        });

        Route::get('/panel-admin-usuarios', function () {
            return view('userAdmin');
        });

        Route::get('/panel-admin-consultas', function () {
            return view('mensajesAdmin');
        });

        Route::get('/panel-admin-stock', function () {
            return view('stockAdmin');
        });


        Route::get('/panel-admin-estadisticas', function () {
            return view('statsAdmin');
        });

    });