<?php

namespace App\Http\Controllers;

use App\Models\Talle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TalleController extends Controller
{
    /**
     * Mostrar todos los talles
     */
    public function index()
    {
        return response()->json(

            Talle::with([
                'product',
                'detallesPedidos'
            ])
                ->latest()
                ->get()

        );
    }

    /**
     * Crear talle
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'product_id' => 'required|exists:products,id',

            'name' => [
                'required',
                'string',
                'max:50',
                Rule::unique('talle')
                    ->where(function ($query) use ($request) {
                        return $query->where(
                            'product_id',
                            $request->product_id
                        );
                    }),
            ],

            'stock' => 'required|integer|min:0',
        ]);

        $talle = Talle::create($validated);

        return response()->json([
            'message' => 'Talle creado correctamente',
            'data' => $talle->load('product')
        ], 201);
    }

    /**
     * Mostrar talle específico
     */
    public function show(string $id)
    {
        $talle = Talle::with([
            'product',
            'detallesPedidos'
        ])->findOrFail($id);

        return response()->json($talle);
    }

    /**
     * Actualizar talle
     */
    public function update(Request $request, string $id)
    {
        $talle = Talle::findOrFail($id);

        $validated = $request->validate([
            'product_id' => 'sometimes|exists:products,id',
            'name' => 'sometimes|string|max:50',
            'stock' => 'sometimes|integer|min:0',
        ]);

        $talle->update($validated);

        return response()->json([
            'message' => 'Talle actualizado correctamente',
            'data' => $talle->load('product')
        ]);
    }
    /**
     * Eliminar talle
     */
    public function destroy(string $id)
    {
        $talle = Talle::findOrFail($id);

        $talle->delete();

        return response()->json([
            'message' => 'Talle eliminado correctamente'
        ]);
    }
}