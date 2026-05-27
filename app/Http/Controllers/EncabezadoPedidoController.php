<?php

namespace App\Http\Controllers;

use App\Models\EncabezadoPedido;
use Illuminate\Http\Request;

class EncabezadoPedidoController extends Controller
{
    /**
     * Mostrar todos los pedidos
     */
    public function index()
    {
        return response()->json(

            EncabezadoPedido::with([
                'user',
                'detalles.product',
                'detalles.talle'
            ])
            ->latest()
            ->get()

        );
    }

    /**
     * Crear pedido
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'user_id' => 'nullable|exists:users,id',

            'cliente_telefono' => 'nullable|string|max:50',

            'direccion_envio' => 'required|string|max:500',

            'metodo_pago' => 'nullable|string|max:100',

            'estado' => 'nullable|string|max:50',

            'subtotal' => 'required|numeric|min:0',

            'total' => 'required|numeric|min:0',

            'observaciones' => 'nullable|string',
        ]);

        $pedido = EncabezadoPedido::create([

            ...$validated,

            'estado' => $validated['estado'] ?? 'pendiente',
        ]);

        return response()->json([
            'message' => 'Pedido creado correctamente',

            'data' => $pedido->load([
                'user',
                'detalles.product',
                'detalles.talle'
            ])
        ], 201);
    }

    /**
     * Mostrar un pedido
     */
    public function show(string $id)
    {
        $pedido = EncabezadoPedido::with([
            'user',
            'detalles.product',
            'detalles.talle'
        ])->findOrFail($id);

        return response()->json($pedido);
    }

    /**
     * Actualizar pedido
     */
    public function update(Request $request, string $id)
    {
        $pedido = EncabezadoPedido::findOrFail($id);

        $validated = $request->validate([

            'user_id' => 'nullable|exists:users,id',

            'cliente_telefono' => 'nullable|string|max:50',

            'direccion_envio' => 'sometimes|required|string|max:500',

            'metodo_pago' => 'nullable|string|max:100',

            'estado' => 'nullable|string|max:50',

            'subtotal' => 'sometimes|required|numeric|min:0',

            'total' => 'sometimes|required|numeric|min:0',

            'observaciones' => 'nullable|string',
        ]);

        $pedido->update($validated);

        return response()->json([
            'message' => 'Pedido actualizado correctamente',

            'data' => $pedido->load([
                'user',
                'detalles.product',
                'detalles.talle'
            ])
        ]);
    }

    /**
     * Eliminar pedido
     */
    public function destroy(string $id)
    {
        $pedido = EncabezadoPedido::findOrFail($id);

        $pedido->delete();

        return response()->json([
            'message' => 'Pedido eliminado correctamente'
        ]);
    }
}