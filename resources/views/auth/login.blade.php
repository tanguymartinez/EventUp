@extends('layouts.app')

@section('content')
<img class"separateur" src={{ URL::asset('img/separator.png') }} width="100" height="80">
<div class="connexionContent">
    <img src={{ URL::asset('img/logotxt2.png') }} alt="EventUp" class="logoConnexion">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                          <!--   <label for="email" class="">{{ __('E-Mail Address') }}</label><br> -->

                                <input  type="email" class="inputEmailConnexion"  placeholder="Email" name="email" value="{{ old('email') }}" required><br>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                          <!--  <label for="password" class="">{{ __('Password') }}</label><br> -->

                                <input type="password" placeholder="Mot de passe" class="inputMdpConnexion" name="password" required><br><br>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                    <a class="createAccountLink" href={{ route('register') }} >Créer un compte</a> <br>
                                <button type="submit" class="btnConnexion">
                                    {{ __('connexion') }}
                                </button>

                    </form>
                </div>

@endsection
