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
        return Product::latest()->get();
    }

    /**
     * Crear producto
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string|max:500',
        'price' => 'required|numeric',
        'discount_price' => 'nullable|numeric',
        'stock' => 'required|integer',
        'sku' => 'nullable|string|max:100',
        'category' => 'nullable|string|max:100',
        'brand' => 'nullable|string|max:100',

        // imagen principal string
        'image' => 'nullable|string',

        // galería array de strings
        'gallery' => 'nullable|array',
        'gallery.*' => 'string',
    ]);

    $product = Product::create([

        'name' => $request->name,

        'slug' => $request->slug
            ? Str::slug($request->slug)
            : Str::slug($request->name),

        'description' => $request->description,

        'short_description' => $request->short_description,

        'price' => $request->price,

        'discount_price' => $request->discount_price,

        'stock' => $request->stock,

        'sku' => $request->sku,

        // string
        'image' => $request->image,

        // array de strings
        'gallery' => $request->gallery ?? [],

        'category' => $request->category,

        'brand' => $request->brand,

        'is_active' => $request->is_active ?? true,

        'is_featured' => $request->is_featured ?? false,
    ]);

    return response()->json([
        'message' => 'Producto creado',
        'product' => $product
    ], 201);
}

    /**
     * Mostrar producto
     */
    public function show(string $id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Actualizar producto
     */
    public function update(Request $request, string $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'sometimes|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string|max:500',
        'price' => 'sometimes|numeric',
        'discount_price' => 'nullable|numeric',
        'stock' => 'sometimes|integer',
        'sku' => 'nullable|string|max:100',
        'category' => 'nullable|string|max:100',
        'brand' => 'nullable|string|max:100',

        'image' => 'nullable|string',

        'gallery' => 'nullable|array',
        'gallery.*' => 'string',

        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ]);

    if (isset($validated['slug'])) {
        $validated['slug'] = Str::slug($validated['slug']);
    }

    $product->update($validated);

    return response()->json([
        'message' => 'Producto actualizado',
        'product' => $product
    ]);
}
    /**
     * Eliminar producto
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return response()->json([
            'message' => 'Producto eliminado'
        ]);
    }
}