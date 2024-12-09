<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShippingAddresses;

class CheckoutController extends Controller
{

    public function view(){
        return view('checkout.checkout');
    }

    public function storeShippingAddress(Request $request){

        $user = Auth::user();

        $request->validate([
           'street_address' => 'required',
           'city' => 'required',
           'county' => 'required',
           'country' => 'required',
            'post_code' => 'required',
        ]);

       ShippingAddresses::create([
            'user_id' => $user->id,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'county' => $request->county,
            'country' => $request->country,
            'post_code' => $request->post_code,
        ]);

        

        return redirect()->route('checkout.saveBillingAddress');
    }

    public function storeBillingAddress(Request $request){

        $user = Auth::user();

        $request->validate([
           'street_address' => 'required',
           'city' => 'required',
           'county' => 'required',
           'country' => 'required',
            'post_code' => 'required',
        ]);

       ShippingAddresses::create([
            'user_id' => $user->id,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'county' => $request->county,
            'country' => $request->country,
            'post_code' => $request->post_code,
        ]);

        

        return redirect()->route('home');
    }
   
}