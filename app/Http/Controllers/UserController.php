<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class UserController extends Controller
{

    public function update(Request $request){

       $user = Auth::user();
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->password = $request->input('password');

       $user->save();

       return redirect('/moncompte');

    }
}
