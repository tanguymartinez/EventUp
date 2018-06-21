@extends('layouts.app')

@section('content')

  <div class="contentAccountShow">

      {{ csrf_field() }}
      <h3>MON COMPTE</h3><br>

       <p class="nameMA">Nom utilisateur : {{ Auth::user()->name }}</p> <br>
       <p class="emailMA">Mon email : {{ Auth::user()->email }}</p> <br>

      <button class="btnModifAccountMA" type="submit" name="btnModifAccountMA">Modifier les paramètres du compte</button>



  </div>
@endsection
