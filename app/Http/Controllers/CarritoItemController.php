<?php

namespace App\Http\Controllers;

use App\Models\CarritoItem;
use Illuminate\Http\Request;

class CarritoItemController extends Controller
{
    /**
     * Mostrar todos los items del carrito
     */
    public function index()
    {
        return response()->json(

            CarritoItem::with([
                'carrito',
                'product',
                'talle'
            ])
            ->latest()
            ->get()

        );
    }

    /**
     * Crear item del carrito
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'carrito_id' => 'required|exists:carritos,id',

            'product_id' => 'required|exists:products,id',

            'talle_id' => 'nullable|exists:talle,id',

            'cantidad' => 'required|integer|min:1',
        ]);

        $item = CarritoItem::create($validated);

        return response()->json([
            'message' => 'Item agregado al carrito correctamente',

            'data' => $item->load([
                'carrito',
                'product',
                'talle'
            ])
        ], 201);
    }

    /**
     * Mostrar item específico
     */
    public function show(string $id)
    {
        $item = CarritoItem::with([
            'carrito',
            'product',
            'talle'
        ])->findOrFail($id);

        return response()->json($item);
    }

    /**
     * Actualizar item del carrito
     */
    public function update(Request $request, string $id)
    {
        $item = CarritoItem::findOrFail($id);

        $validated = $request->validate([

            'carrito_id' => 'sometimes|required|exists:carritos,id',

            'product_id' => 'sometimes|required|exists:products,id',

            'talle_id' => 'nullable|exists:talle,id',

            'cantidad' => 'sometimes|required|integer|min:1',
        ]);

        $item->update($validated);

        return response()->json([
            'message' => 'Item del carrito actualizado correctamente',

            'data' => $item->load([
                'carrito',
                'product',
                'talle'
            ])
        ]);
    }

    /**
     * Eliminar item del carrito
     */
    public function destroy(string $id)
    {
        $item = CarritoItem::findOrFail($id);

        $item->delete();

        return response()->json([
            'message' => 'Item eliminado del carrito correctamente'
        ]);
    }
}