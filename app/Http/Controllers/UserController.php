<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function show($id)
    {
        $user = Users::find($id);
        if (!$user) {
            abort(404, 'User not found');
        }
        return view('/show', ['user' => $user]);
    }

    public function list()
    {
        return view('/list', ['user' => Users::all()]);
    }
}
