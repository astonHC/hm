<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
        public function list(){
    return view('/products', array('product'=>Products::all()));    
    }
}
