<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Basket;
use App\Models\BasketItem;

class UserController extends Controller
{
  public function show($id)
  {
    $user = Users::find($id);
    if (!$user){
      abort(404, 'user not found');
    }
    return view('/show',['user'=>$user]); 
  }
  
  public function list()
  {
     return view('/list',['user'=> Users::all()]); 
  }

  public function basket($id)
  {
    $user = auth::user();
    if (!$user){
      return redirect('/login')->with('error','You must be logged in to view your basket');
    }

    $basket = Basket::where('user_id',$user->id)->first();
    $basketItems = $basket ? $basket->items: [];

    return view('basket.view',['basketItems' => $basketItems]);
  }

}