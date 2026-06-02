<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TalleController;
use App\Http\Controllers\EncabezadoPedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\CarritoItemController;
use App\Http\Controllers\PasswordResetTokenController;

/*
|--------------------------------------------------------------------------
| RUTAS PUBLICAS
|--------------------------------------------------------------------------
*/

// catálogo

Route::get('/products', [
    ProductController::class,
    'index'
]);

Route::get('/products/{id}', [
    ProductController::class,
    'show'
]);

// talles

Route::get('/talles', [
    TalleController::class,
    'index'
]);

Route::get('/talles/{id}', [
    TalleController::class,
    'show'
]);

/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')
    ->group(function () {



        Route::apiResource(
            'encabezados-pedidos',
            EncabezadoPedidoController::class
        );

        Route::apiResource(
            'detalles-pedidos',
            DetallePedidoController::class
        );

        Route::apiResource(
            'carrito-items',
            CarritoItemController::class
        );

        Route::apiResource(
            'password-reset-tokens',
            PasswordResetTokenController::class
        );

    });

Route::middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        // Rutas que solo los administradores pueden acceder
    
        Route::apiResource('products', ProductController::class)
            ->except(['index', 'show']);

        Route::apiResource('talles', TalleController::class)
            ->except(['index', 'show']);

        Route::apiResource('users', UserController::class)
            ->except(['index', 'show']);
    });