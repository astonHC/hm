<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;
use App\Models\User;
use Validator;

class SignupController extends Controller{


    public function signup(Request $request) {$validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_numer' => 'required|integer|max:12',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', ]);
            if ($validator->fails()) { 
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = User::register($request->only(['first_name','last_name','email','password']));
            if ($user) {
                return redirect()->back()->with('success','');
            }
        }
        
    
}


    
    
    