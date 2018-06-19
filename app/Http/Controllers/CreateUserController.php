<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\User;

class CreateUserController extends Controller
{
    public function submit(CreateUserRequest $request){

      $user = new User;
      $user->nom = $request->input('nom');
      $user->prenom = $request->input('prenom');
      $user->email = $request->input('email');
      $user->mdp = $request->input('password');
      //$user->dateNaissance = $request->input('datenaissance');
      //$user->save();

      return redirect('/moncompte');
    }
}
