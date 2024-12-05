<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
        public function list(Request $request){
            
            $search = $request->input('product_name');

            if ($search) {
                $products = Products::where('product_name', 'like', '%' . $search . '%')->get();
            } else {
                $products = Products::all();
            }
            
        return view('products.products', compact('products', 'search'));   
    }

   

    public function show($id){
        return view('products/show', array('product'=>Products::find($id)));
    }
}
