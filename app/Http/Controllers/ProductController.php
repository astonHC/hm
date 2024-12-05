<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /** List all products */
    public function list()
    {
        return view('products/products', ['product' => Products::all()]);
    }

    /** Show a specific product by its ID */
    public function show($id)
    {
        $product = Products::find($id);
        if (!$product) {
            abort(404, 'Product not found');
        }
        return view('products/show', ['product' => $product]);
    }
}
