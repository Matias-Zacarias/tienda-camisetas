<?php

namespace App\Http\Controllers;

use App\Models\EncabezadoPedido;
use App\Models\Product;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $totalVentas = EncabezadoPedido::sum('total');

        $totalPedidos = EncabezadoPedido::count();

        $totalProductos = Product::count();

        $totalUsuarios = User::where(
            'role',
            'user'
        )->count();

        $ultimosPedidos = EncabezadoPedido::with([
            'user:id,name',
            'detalles'
        ])
            ->latest()
            ->take(5)
            ->get([
                'id',
                'user_id',
                'estado',
                'total',
                'created_at'
            ]);

        return response()->json([
            'totalVentas' => $totalVentas,
            'totalPedidos' => $totalPedidos,
            'totalProductos' => $totalProductos,
            'totalUsuarios' => $totalUsuarios,
            'ultimosPedidos' => $ultimosPedidos,
        ]);
    }
}