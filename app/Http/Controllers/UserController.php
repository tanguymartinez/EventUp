<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

use Auth;

class UserController extends Controller
{

    public function show(){
      $user = User::find(Auth::user()->id);
      return view('editAccount')->with(compact('user'));
    }

    public function update(Request $request){

       $user = Auth::user();
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       $user->password = Hash::make($request->input('password'));

       $user->save();

       return redirect('/account');

    }
}
