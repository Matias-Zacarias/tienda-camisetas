<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    /**
     * Mostrar todos los detalles
     */
    public function index()
    {
        return response()->json(

            DetallePedido::with([
                'pedido',
                'product',
                'talle'
            ])
                ->latest()
                ->get()

        );
    }

    /**
     * Crear detalle de pedido
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'pedido_id' => 'required|exists:encabezados_pedidos,id',

            'product_id' => 'nullable|exists:products,id',

            'talle_id' => 'nullable|exists:talle,id',

            'producto_nombre' => 'required|string|max:255',

            'talle_nombre' => 'nullable|string|max:255',

            'precio_unitario' => 'required|numeric|min:0',

            'cantidad' => 'required|integer|min:1',

            'subtotal' => 'required|numeric|min:0',
        ]);

        $detalle = DetallePedido::create($validated);

        return response()->json([
            'message' => 'Detalle de pedido creado correctamente',

            'data' => $detalle->load([
                'pedido',
                'product',
                'talle'
            ])
        ], 201);
    }

    /**
     * Mostrar detalle específico
     */
    public function show(string $id)
    {
        $detalle = DetallePedido::with([
            'pedido',
            'product',
            'talle'
        ])->findOrFail($id);

        return response()->json($detalle);
    }

    /**
     * Actualizar detalle
     */
    public function update(Request $request, string $id)
    {
        $detalle = DetallePedido::findOrFail($id);

        $validated = $request->validate([

            'pedido_id' => 'sometimes|required|exists:encabezados_pedidos,id',

            'product_id' => 'nullable|exists:products,id',

            'talle_id' => 'nullable|exists:talle,id',

            'producto_nombre' => 'sometimes|required|string|max:255',

            'talle_nombre' => 'nullable|string|max:255',

            'precio_unitario' => 'sometimes|required|numeric|min:0',

            'cantidad' => 'sometimes|required|integer|min:1',

            'subtotal' => 'sometimes|required|numeric|min:0',
        ]);

        $detalle->update($validated);

        return response()->json([
            'message' => 'Detalle de pedido actualizado correctamente',

            'data' => $detalle->load([
                'pedido',
                'product',
                'talle'
            ])
        ]);
    }

    /**
     * Eliminar detalle
     */
    public function destroy(string $id)
    {
        $detalle = DetallePedido::findOrFail($id);

        $detalle->delete();

        return response()->json([
            'message' => 'Detalle de pedido eliminado correctamente'
        ]);
    }


    public function porEncabezado(string $pedidoId)
    {
        $detalles = DetallePedido::with([
            'product',
            'talle'
        ])
            ->where('pedido_id', $pedidoId)
            ->get();

        return response()->json([
            'id' => (int) $pedidoId,
            'detalles' => $detalles,
        ]);
    }
}