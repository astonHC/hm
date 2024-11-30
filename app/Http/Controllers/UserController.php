<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
   public function show($id){
 $user = Users::find($id);
 return view('/show', array('user' => $user));
 }
 public function list(){
 return view('/list', array('user'=>Users::all()));
 }


}
