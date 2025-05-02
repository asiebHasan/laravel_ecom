<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function product_list(Request $request)
    {
        $perPage = $request->input('per_page', 12); // Default to 12 if not selected
        $products = Product::paginate($perPage)->withQueryString(); // Preserve query string
        $categories = Category::all();
        return view('pages.products', compact('products', 'categories', 'perPage'));
    }

    public function product_detail($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.single-product', compact('product', 'categories'));
    }
}
