@extends('layouts.app')

@section('content')

  <img class"separateur" src="img/separator.png" width="100" height="80">

<div class="createAccountContent">
  <form action="/creercompte" method="post">
    {{ csrf_field() }}
    <h3>CREER UN COMPTE</h3><br>

    <input class="inputCANom" type="text" placeholder="Nom" name="nom">
    <input class="inputCAPrenom" type="text" placeholder="Prénom" name="prenom"><br><br>

    <p> Email (identifiant)</p>
    <input class="inputCAEmail" type="text" name="email"><br><br>
    <p>Choisir un mot de passe</p>
    <input class="inputMdpCA" type="password" name="mdp"><br><br>
    <p>Confirmer le moot de passe</p>
    <input class="inputMdpCA" type="password" name="mdpconf"><br><br>
    <p>Date de naissance</p>
    <input class="inputDateCA" type="date" name="datenaissance"><br><br>

    <button class="btnConfirmationCA" type="submit" name="btnConfirmationCA">Valider</button>
    <button class="btnAnnulerCA" type="submit" name="btnAnnulerCA">Annuler</button>
  </form>
</div>
@endsection
