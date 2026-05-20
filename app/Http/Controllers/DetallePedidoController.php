<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            DetallePedido::with(['pedido', 'producto'])
                ->latest()
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pedido_id'       => 'required|exists:encabezados_pedidos,id',
            'product_id'      => 'required|exists:products,id',
            'producto_nombre' => 'required|string|max:255',
            'precio_unitario' => 'required|numeric|min:0',
            'cantidad'        => 'required|integer|min:1',
            'subtotal'        => 'required|numeric|min:0',
        ]);

        $detalle = DetallePedido::create($validated);

        return response()->json([
            'message' => 'Detalle de pedido creado correctamente',
            'data' => $detalle
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detalle = DetallePedido::with(['pedido', 'producto'])
            ->findOrFail($id);

        return response()->json($detalle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $detalle = DetallePedido::findOrFail($id);

        $validated = $request->validate([
            'pedido_id'       => 'sometimes|required|exists:encabezados_pedidos,id',
            'product_id'      => 'sometimes|required|exists:products,id',
            'producto_nombre' => 'sometimes|required|string|max:255',
            'precio_unitario' => 'sometimes|required|numeric|min:0',
            'cantidad'        => 'sometimes|required|integer|min:1',
            'subtotal'        => 'sometimes|required|numeric|min:0',
        ]);

        $detalle->update($validated);

        return response()->json([
            'message' => 'Detalle de pedido actualizado correctamente',
            'data' => $detalle
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detalle = DetallePedido::findOrFail($id);

        $detalle->delete();

        return response()->json([
            'message' => 'Detalle de pedido eliminado correctamente'
        ]);
    }
}