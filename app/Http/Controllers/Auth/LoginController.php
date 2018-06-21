<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout() {
      Auth::logout();
      return Redirect('/home');
    }

    public function login(LoginRequest $request)
    {

      $user_data = array(
        'email' => $request->get('eamil'),
        'password' => $request->get('password')
      );
      if(Auth::attempt($user_data)){

        return redirect('/home');
      }

    }
}
