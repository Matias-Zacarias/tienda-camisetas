<?php

namespace App\Http\Controllers;

use App\Models\CarritoItem;
use Illuminate\Http\Request;

class CarritoItemController extends Controller
{
    public function index()
    {
        return response()->json(

            CarritoItem::with([
                'product',
                'talle'
            ])
                ->where(
                    'user_id',
                    auth()->id()
                )
                ->get()

        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'talle_id' => 'nullable|exists:talle,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $item = CarritoItem::where(
            'user_id',
            auth()->id()
        )
            ->where(
                'product_id',
                $validated['product_id']
            )
            ->where(
                'talle_id',
                $validated['talle_id'] ?? null
            )
            ->first();

        if ($item) {

            $item->increment(
                'cantidad',
                $validated['cantidad']
            );

        } else {

            $item = CarritoItem::create([
                'user_id' => auth()->id(),
                'product_id' => $validated['product_id'],
                'talle_id' => $validated['talle_id'] ?? null,
                'cantidad' => $validated['cantidad']
            ]);
        }

        return response()->json([
            'message' => 'Producto agregado al carrito',
            'data' => $item->load([
                'product',
                'talle'
            ])
        ]);
    }

    public function show(string $id)
    {
        $item = CarritoItem::with([
            'product',
            'talle'
        ])
            ->where(
                'user_id',
                auth()->id()
            )
            ->findOrFail($id);

        return response()->json($item);
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'cantidad' => 'required|integer|min:1'
        ]);

        $item = CarritoItem::where(
            'user_id',
            auth()->id()
        )->where(
                'id',
                $id
            )->firstOrFail();

        $item->update([
            'cantidad' => $validated['cantidad']
        ]);

        return response()->json([
            'message' => 'Cantidad actualizada',
            'data' => $item->fresh()->load([
                'product',
                'talle'
            ])
        ]);
    }
    public function destroy(CarritoItem $carrito_item)
    {
        if ($carrito_item->user_id !== auth()->id()) {
            abort(403);
        }

        $carrito_item->delete();

        return response()->json([
            'message' => 'Producto eliminado'
        ]);
    }

    public function destroyByUserId($userId)
    {
        // seguridad: solo el propio usuario o admin
        if (auth()->id() != $userId) {
            abort(403, 'No autorizado');
        }

        CarritoItem::where('user_id', $userId)->delete();

        return response()->json([
            'message' => 'Carrito vaciado correctamente'
        ]);
    }
}