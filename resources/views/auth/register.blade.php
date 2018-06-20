@extends('layouts.app')

@section('content')
<img class"separateur" src="img/separator.png" width="100" height="80">
<div class="createAccountContent">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <h3>CREER UN COMPTE</h3><br>
                            <label for="name" class="">{{ __('Name') }}</label><br>


                                <input  type="text" class="inputCANam" name="name" value="{{ old('name') }}" required autofocus><br>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            <label for="email" class="">{{ __('E-Mail Address') }}</label><br>

                                <input  type="email" class="inputCAEmail" name="email" value="{{ old('email') }}" required><br>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <label for="password" class="">{{ __('Password') }}</label><br>

                                <input type="password" class="inputMdpCA" name="password" required><br>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label><br>

                                <input type="password" class="inputMdpCA" name="password_confirmation" required><br>

                                <button type="submit" class="btnConfirmationCA">
                                    {{ __('Valider') }}
                                </button>

                    </form>
                </div>

@endsection
