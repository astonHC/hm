<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\BasketItem;

class BasketController extends Controller
{

    /** Display the user's basket */
    public function view()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Retrieve the user's basket
        $basket = Basket::where('user_id', $user->id)->first();
        $basketItems = $basket ? $basket->items : [];

        // Return the basket view with basket items
        return view('basket.basket', ['basketItems' => $basketItems]);
    }

    /** Add a product to the basket */
    public function addToBasket(Request $request, $productID)
    {
        // Get the authenticated user
        $user = Auth::user();

        if (!$user) {
            return redirect('/login')->with('error', 'You must be logged in to add items to the basket');
        }

        // Find or create the user's basket
        $basket = Basket::firstOrCreate(['user_id' => $user->id]);

        // Add or update the product in the basket
        BasketItem::updateOrCreate(
            ['basket_id' => $basket->id, 'product_id' => $productID],
            ['quantity' => $request->input('quantity', 1)]
        );

        return redirect()->route('basket.view')->with('success', 'Product has been added to the basket');
    }

    /** Remove a product from the basket */
    public function removeFromBasket(Request $request, $productID)
    {
        // Get the authenticated user
        $user = Auth::user();

        if (!$user) {
            return redirect('/login')->with('error', 'You must be logged in to modify the basket contents');
        }

        // Retrieve the user's basket
        $basket = Basket::where('user_id', $user->id)->first();

        if ($basket) {
            // Remove the specified product from the basket
            $basket->items()->where('product_id', $productID)->delete();
        }

        return redirect()->route('basket.view')->with('success', 'Product removed from the basket');
    }
}
/**Test1 */