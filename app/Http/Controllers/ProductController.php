<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Mostrar todos los productos
     */
    public function index()
    {
        return Product::with('talles')
            ->latest()
            ->get();
    }

    public function catalog()
    {
        return Product::with('talles')
            ->where('is_active', true)
            ->latest()
            ->get();
    }
    /**
     * Crear producto
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'description' => 'nullable|string',

            'short_description' => 'nullable|string|max:500',

            'price' => 'required|numeric',

            'discount_price' => 'nullable|numeric',

            'category' => 'nullable|string|max:100',

            'brand' => 'nullable|string|max:100',

            'image' => 'nullable|string',

            'gallery' => 'nullable|array',

            'gallery.*' => 'string',

            'is_active' => 'boolean',

            'is_featured' => 'boolean',
        ]);


        $product = Product::create([
            ...$validated,

            'gallery' => $validated['gallery'] ?? [],

            'is_active' => $validated['is_active'] ?? true,

            'is_featured' => $validated['is_featured'] ?? false,
        ]);

        return response()->json([
            'message' => 'Producto creado',
            'product' => $product->load('talles')
        ], 201);
    }

    /**
     * Mostrar producto
     */
    public function show(string $id)
    {
        return Product::with('talles')
            ->where('id', $id)
            ->firstOrFail();
    }

    /**
     * Actualizar producto
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',

            'slug' => 'nullable|string|max:255|unique:products,slug,' . $product->id,

            'description' => 'nullable|string',

            'short_description' => 'nullable|string|max:500',

            'price' => 'sometimes|numeric',

            'discount_price' => 'nullable|numeric',

            'category' => 'nullable|string|max:100',

            'brand' => 'nullable|string|max:100',

            'image' => 'nullable|string',

            'gallery' => 'nullable|array',

            'gallery.*' => 'string',

            'is_active' => 'boolean',

            'is_featured' => 'boolean',
        ]);

        // Slug opcional
        if (isset($validated['slug'])) {

            $validated['slug'] = Str::slug($validated['slug']);

        } elseif (isset($validated['name'])) {

            $validated['slug'] = Str::slug($validated['name']);
        }

        $product->update($validated);

        return response()->json([
            'message' => 'Producto actualizado',
            'product' => $product->load('talles')
        ]);
    }

    /**
     * Eliminar producto
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->is_active = false;

        $product->save();

        return response()->json([
            'message' => 'Producto desactivado'
        ]);
    }
}