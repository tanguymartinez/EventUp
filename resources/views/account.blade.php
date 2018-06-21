@extends('layouts.app')

@section('content')

  <div class="contentAccountShow">

      {{ csrf_field() }}
      <h3>MON COMPTE</h3><br>

       <p class="nameMA">Nom utilisateur : {{ Auth::user()->name }}</p> <br>
       <p class="emailMA">Mon email : {{ Auth::user()->email }}</p> <br>

      <a class="btnModifAccountMA" href="/editAccount">Modifier les paramètres du compte</a>



  </div>
@endsection
