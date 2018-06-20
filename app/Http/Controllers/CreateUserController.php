<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class CreateUserController extends Controller
{
    public function createAccount(CreateUserRequest $request){

    //  $user = new User;
    //  $user->nom = $request->input('nom');
    //  $user->prenom = $request->input('prenom');
    //  $user->email = $request->input('email');
    //  $user->password = $request->input('password');
    //  $user->dateNaissance = $request->input('datenaissance');
    //  $user->save();

      return 123;//redirect('/moncompte');
    }
}
