<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductoDestacadoController extends Controller
{
    public function index()
    {
        $products = Product::where('is_featured', true)
            ->where('is_active', true)
            ->latest()
            ->get();

        return response()->json($products);
    }
}