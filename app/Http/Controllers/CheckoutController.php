<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Address;

class CheckoutController extends Controller
{

    public function view(){
        return view('checkout.checkout');
    }

    public function storeShippingAddress(Request $request){

        $user = Auth::user();

        $request->validate([
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        Address::Create([
            'user_id' => auth()->user()->id,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
        ]);

        

        return redirect()->route('checkout.payment');
    }
   
}