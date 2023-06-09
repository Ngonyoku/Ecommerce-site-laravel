<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    //Static
    public static function index() {
        $products = Product::with('images')
            ->latest()
            ->filter(request(['search', 'tag']))
            ->paginate(8)
        ;
        // dd($products);
        return view('products.index', compact('products'));
    }

    public static function show(Product $product) {
        return view('products.show', ['product' => $product]);
    }
}


