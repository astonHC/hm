<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
        public function list(){
    return view('products/products', array('product'=>Products::all()));    
    }

    public function show($id){
        return view('products/show', array('product'=>Products::find($id)));
    }
}
