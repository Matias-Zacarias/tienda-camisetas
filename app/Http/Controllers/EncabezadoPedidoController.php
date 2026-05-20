<?php

namespace App\Http\Controllers;

use App\Models\EncabezadoPedido;
use Illuminate\Http\Request;

class EncabezadoPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            EncabezadoPedido::with('detalles')
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
            'cliente_nombre'   => 'required|string|max:255',
            'cliente_email'    => 'required|email|max:255',
            'cliente_telefono' => 'nullable|string|max:50',
            'direccion_envio'  => 'required|string|max:500',
            'metodo_pago'      => 'required|string|max:100',
            'estado'           => 'nullable|string|max:50',
            'subtotal'         => 'required|numeric|min:0',
            'total'            => 'required|numeric|min:0',
            'observaciones'    => 'nullable|string',
        ]);

        $pedido = EncabezadoPedido::create($validated);

        return response()->json([
            'message' => 'Pedido creado correctamente',
            'data' => $pedido
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = EncabezadoPedido::with('detalles')->findOrFail($id);

        return response()->json($pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = EncabezadoPedido::findOrFail($id);

        $validated = $request->validate([
            'cliente_nombre'   => 'sometimes|required|string|max:255',
            'cliente_email'    => 'sometimes|required|email|max:255',
            'cliente_telefono' => 'nullable|string|max:50',
            'direccion_envio'  => 'sometimes|required|string|max:500',
            'metodo_pago'      => 'sometimes|required|string|max:100',
            'estado'           => 'nullable|string|max:50',
            'subtotal'         => 'sometimes|required|numeric|min:0',
            'total'            => 'sometimes|required|numeric|min:0',
            'observaciones'    => 'nullable|string',
        ]);

        $pedido->update($validated);

        return response()->json([
            'message' => 'Pedido actualizado correctamente',
            'data' => $pedido
        ]);
    }

    /**
     * Remove the specified resource from storage.
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