<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Address;

class CheckoutController extends Controller
{

    public function saveAddress(Request $request)
    {
        //\Log::info('saveAddress method executed');

        // Validate Request
        $request->validate([
            'street_address' => 'required|string|max:50',
            'city' => 'required|string|max:25',
            'county' => 'nullable|string|max:25',
            'country' => 'required|string|max:25',
            'post_code' => 'required|string|max:10',
            'shipping_address' => 'nullable|boolean',
        ]);

        //TO BE REPLACE ONCE FRONTEND CHECKOUT IS READY
        $address_data = [
            'street_address' => 'Aston Triangle',
            'city' => 'Birmingham',
            'county' => 'West Midlands',
            'country' => 'England',
            'post_code' => 'B4 7ET',
            'shipping_address' => true,
        ];

        // Create Address Record
        $address = new Address();
        $address->user_id = auth()->id(); //WILL NOT WORK UNTIL AUTH HAS BEEN IMPLEMENTED
        $address->street_address = $address_data['street_address']; //$request->street_address //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->city = $address_data['city']; //$request->city //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->county = $address_data['county']; //$request->county //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->country = $address_data['country']; //$request->country //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->post_code = $address_data['post_code']; //$request->postcode //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->shipping_address = $address_data['shipping_address']; //request->shipping_address //TO BE REPLACED ONCE FRONTEND CHECKOUT IS READY
        $address->save();

        return redirect()->back()->with('success', 'Address saved successfully!');
    }


    public function placeOrder(Request $request)
    {
        //\Log::info('placeOrder method executed');

        // Validate Request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_date' => 'required|date',
            'order_status' => 'required|string',
            'total_amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'amount_paid' => 'required|numeric',
            'payment_date' => 'required|date',

            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer'
        ]);


        //TO BE REPLACED ONCE BASKET IS READY
        $total_amount = 100;
        $payment_method = "debit";
        $amount_paid = 100;
        //

        // Create Order Record
        $order = new Order();
        $order->user_id = auth()->id(); //WILL NOT WORK UNTIL AUTH HAS BEEN IMPLEMENTED
        $order->order_date = now();
        $order->order_status = 'pending';
        $order->total_amount = $total_amount; //$request->total_amount //TO BE REPLACED ONCE BASKET IS READY
        $order->payment_method = $payment_method; //$request->payment_method //TO BE REPLACED ONCE BASKET IS READY
        $order->amount_paid = $amount_paid; //$request->amount_paid //TO BE REPLACED ONCE BASKET IS READY
        $order->payment_date = now();
        $order->save();


        //MUSA BASKET TO BE REPLACED ONCE BASKET IS READY
        $musaBasket = [
            ['product_id' => 1, 'quantity' => 2],
            ['product_id' => 2, 'quantity' => 1],
        ];
        //

        // Create Order Item Records
        foreach ($musaBasket as $order_item) {
            $item = new OrderItem();
            $item->order_id = $order->id;
            $item->product_id = $order_item['product_id']; //$request->product_id //TO BE REPLACED ONCE BASKET IS READY
            $item->quantity = $order_item['quantity']; //$request->order_item //TO BE REPLACED ONCE BASKET IS READY
            $item->save();
        }

        return redirect()->back()->with('success', 'Order placed sucessfully!');

    }

}