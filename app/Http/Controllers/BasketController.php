<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Baskets;
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
        
        $basket = Baskets::where('user_id', $user->id)->first();

        

         $basketItems = BasketItems::where('basket_id', $basket->id)
            ->join('products','basket_items.product_id','=','products.id')
            ->select(
             'basket_items.*', //.* means it selects all basket item fields
             'products.product_name',
             'products.description',
             'products.price'
            )->get();

        return view('basket.basket', ['basketItems' => $basketItems]);
    }

    public function updateQuantity(Request $request)
    {
        $user = Auth::user();

        $newQuantity = $request->input('quantity');
        $productName = $request->input('product_name');

        $basket = Baskets::where('user_id', $user->id)->first();

        $basketItem = BasketItems::where('basket_id', $basket->id)
        ->join('products', 'basket_items.product_id', '=', 'products.id')
        ->where('products.product_name', "eyeshadow")
        ->select('basket_items.*')
        ->first();


        


        //$basketItem->quantity = $newQuantity;
        //$basketItem->save();

        echo gettype($basketItem);

        

          $basketItems = BasketItems::where('basket_id', $basket->id)
            ->join('products','basket_items.product_id','=','products.id')
            ->select(
             'basket_items.*', //.* means it selects all basket item fields
             'products.product_name',
             'products.description',
             'products.price'
            )->get();


         
        

        

        return view('basket.basket', ['basketItems' => $basketItems]); 

    }

}
