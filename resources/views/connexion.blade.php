@extends('layouts.app')

@section('content')

<div class="connexionContent">
  <form action="/connexion" method="post">
    {{ csrf_field() }}
    <img src={{ URL::asset('img/logotxt2.png') }} alt="EventUp" class="logoConnexion"><br>
    <input class="inputEmailConnexion" type="text" placeholder="Email" name="identifiant"><br>
    <input class="inputMdpConnexion" type="password" placeholder="Mot de passe"name="mdp"><br>
    <a class="createAccountLink" href="/register">Créer un compte</a> <br>
    <button class="btnConnexion" type="submit" name="btnConnexion" >Connexion</button>
  </form>
</div>
@endsection
