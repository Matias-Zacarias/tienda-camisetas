<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Mostrar todos los carritos
     */
    public function index()
    {
        return response()->json(

            Carrito::with([
                'user',
                'items.product',
                'items.talle'
            ])
            ->latest()
            ->get()

        );
    }

    /**
     * Crear carrito
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'user_id' => 'nullable|exists:users,id',
        ]);

        $carrito = Carrito::create($validated);

        return response()->json([
            'message' => 'Carrito creado correctamente',

            'data' => $carrito->load([
                'user',
                'items'
            ])
        ], 201);
    }

    /**
     * Mostrar carrito específico
     */
    public function show(string $id)
    {
        $carrito = Carrito::with([
            'user',
            'items.product',
            'items.talle'
        ])->findOrFail($id);

        return response()->json($carrito);
    }

    /**
     * Actualizar carrito
     */
    public function update(Request $request, string $id)
    {
        $carrito = Carrito::findOrFail($id);

        $validated = $request->validate([

            'user_id' => 'nullable|exists:users,id',
        ]);

        $carrito->update($validated);

        return response()->json([
            'message' => 'Carrito actualizado correctamente',

            'data' => $carrito->load([
                'user',
                'items.product',
                'items.talle'
            ])
        ]);
    }

    /**
     * Eliminar carrito
     */
    public function destroy(string $id)
    {
        $carrito = Carrito::findOrFail($id);

        $carrito->delete();

        return response()->json([
            'message' => 'Carrito eliminado correctamente'
        ]);
    }
}