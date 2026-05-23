<?php

use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\EncabezadoPedidoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::apiResource('products', ProductController::class);

Route::apiResource('encabezazado/pedido', EncabezadoPedidoController::class);

Route::apiResource('detalle/pedido', DetallePedidoController::class);
