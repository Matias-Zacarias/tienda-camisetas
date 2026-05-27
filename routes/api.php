<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TalleController;
use App\Http\Controllers\EncabezadoPedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CarritoItemController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PasswordResetTokenController;

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::apiResource('users', UserController::class);

Route::apiResource('products', ProductController::class);

Route::apiResource('talles', TalleController::class);

Route::apiResource(
    'encabezados-pedidos',
    EncabezadoPedidoController::class
);

Route::apiResource(
    'detalles-pedidos',
    DetallePedidoController::class
);


Route::apiResource(
    'carritos',
    CarritoController::class
);

Route::apiResource(
    'carrito-items',
    CarritoItemController::class
);

Route::apiResource(
    'password-reset-tokens',
    PasswordResetTokenController::class
);

Route::apiResource(
    'sessions',
    SessionController::class
);