<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
        public function list(){

            $product = Products::where('product_name','honey')->get();

            if ($product->isEmpty()) {
                // Handle the case when there are no products
                return view('products.products', ['message' => 'No products available']);
            }

    //return view('products/products', array('product'=>Products::all())); 
        return view('products.products', compact('product'));   
    }

    public function show($id){
        return view('products/show', array('product'=>Products::find($id)));
    }
}
