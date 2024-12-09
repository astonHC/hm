<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\BasketItems;
use App\Models\Products;

use App\Models\Users;

class BasketController extends Controller
{
    //
    public function view()
    {
       $user = Auth::user();

        if (!$user){return "user not found";}
        
        $basket = Basket::where('user_id', $user->id)->first();


        //$basketItems = BasketItems::where('basket_id',$basket->id)->select('basket_items.*')->get();


        
        $basketItems = BasketItems::where('basket_id', $basket->id)
        ->join('products', 'basket_items.product_id', '=', 'products.id')
        ->select(
            'basket_items.*', // Select all basket item fields
            'products.product_name',
            'products.description',
            'products.price'
        )->get();

        //$basketItem = $basketItems->where('product_id', 1)->first();

        

        //echo $basketItem;


        //  $basketItems = BasketItems::where('basket_id', $basket->id)
        //     ->join('products','basket_items.product_id','=','products.id')
        //     ->select(
        //      'basket_items.*', //.* means it selects all basket item fields
        //      'products.product_name',
        //      'products.description',
        //      'products.price'
        //     )->get();

        return view('basket.basket', ['basketItems' => $basketItems]);
        //return view('basket.basket');
    }

    public function updateQuantity(Request $request)
    {
        $user = Auth::user();

        $newQuantity = $request->input('quantity');
        $productId = $request->input('product_id');

        $basket = Basket::where('user_id', $user->id)->first();

       $basketItems = BasketItems::where('basket_id', $basket->id)
        ->join('products', 'basket_items.product_id', '=', 'products.id')
        ->select(
            'basket_items.*', // Select all basket item fields
            'products.product_name',
            'products.description',
            'products.price'
        )->get();

        $basketItem = $basketItems->where('product_id', $productId)->first();


        
        $basketItem->quantity = $request->input('quantity');
        $basketItem->save();

       
        echo $productId;
        

    


        return view('basket.basket', ['basketItems' => $basketItems]); 

    }

}
