<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class UserController extends Controller
{

    public function update(Request $request){

       $user = Auth::user();
       $user->name = $request->inpute('name');
       $user->email = $request->inpute('email');
       $user->password = $request->inpute('password');

       $user->save();

       return redirect('/moncompte');

    }
}
