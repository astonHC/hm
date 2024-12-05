<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\Basket;
use App\Models\BasketItem;

class ProductController extends Controller
{
    /**first we list all the products */
    public function list()
    {
    return view('products/products', array('product'=>Products::all()));    
    }
    /**now we show each product by its ID */

    public function show($id)
    {
        $product = Products::find($id);
        if (!$product)
        {
            abort(404, 'Product not found');
        }
        return view('products/show', ['product'=>$product]);
    }
    /**now we add the product to user's basket */
    public function addToBasket(Request $request, $requestID)
    /** Is the user logged in? */
    {
        $user = auth::user(); 
        if (!$user) {
            return redirect('/login')->with('error','You must be logged in to add items to the basket');
        }
        /**Let's create the basket */
        $basket = Basket::firstOrCreate(['user_id'=> $user->id]);
        /**Add the item to the basket and update the quantity. By default, when a product is added, the quantity will be 1 */
        BasketItem::updateOrCreate(
            ['basket_id'=> $basket->id, 'product_id'=> $requestID], ['quantity'=> $request->input('quantity',1)]
        );
        return redirect()->route('basket.view')->with('success', 'product has been added to the basket');
    }
    /**This is to remove a product from user's basket */
    public function removeFromBasket(Request $request, $productID)
    {
        $user = auth::user();
        if (!$user){
            return redirect('/login')->with('error','You must be logged in to modify the basket contents');

        }
        $basket = Basket::where('user_id',$user->id)->first();

        if ($basket){
            $basket->items()->where('product_id',$productID)->delete();
        }
        return redirect()->route('basket.view')->with('success','Product removed from the basket');
    }

}
