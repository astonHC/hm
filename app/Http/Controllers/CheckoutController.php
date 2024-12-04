<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
  
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'user_id' => 'required',
        'order_date' => 'required',
        'order_status' => 'required',
        'total_amount' => 'required',
        //'payment_method' => 'required',
        //'amount_paid' => 'required',
        //'payment_date' => 'required',
    ]);

    // Create a new record
    Orders::create([
        'user_id' => $request->input('user_id'),
        'order_date' => $request->input('order_date'),
        'order_status' => $request->input('order_status'),
        'total_amount' => $request->input('total_amount'),
        //'payment_method' =>,
        //'amount_paid' =>,
        //'payment_date' =>,

    ]);

    //foreach (//FROM BASKET) {
    //    OrderItems::create([
    //        'order_id' => $request->input('order_id'),
    //        'product_id' => $request->input('product_id'),
    //        'quantity' => $request->input('quantity'),
    //        'price' => $request->input('price'),
    //    ]);
    //}

    return redirect()->back()->with('success', 'Order placed sucessfully!');
}


}