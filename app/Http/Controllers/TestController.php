<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function home(){
        return view('home');
    }

    public function beauty(){
        return view('beauty.beauty');
    }

    public function health(){
        return view('health.health');
    }
    public function clothing(){
        return view('clothing.clothing');
    }

}
