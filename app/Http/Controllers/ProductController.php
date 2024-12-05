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

            $filter = $request->input('filter');
            
            if($filter){
                 $products = Products::where('product_type', '=', $filter)->get();
            }

            
        return view('products.products', compact('products', 'search'));   
    }

   

   public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('show', ['product' => $product]); 
    }
}
