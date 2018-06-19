@extends('layouts.app')

@section('content')

  <div class="contactContent">
    <h2>CONTACT<h2>
    <p> Demande d'information </p>
    <form action="/contact" method="post">
      {{ csrf_field() }}
    <input class="inputContactEmailNom" type="text" placeholder="Email" name="email"><br>
    <input class="inputContactEmailNom" type="text" placeholder="Nom Prénom " name="name"><br>
    <textarea class="inputContactMsg" type="text" placeholder="Message" name="message"></textarea><br>
    <button class="btnEnvoyer" type="submit">Envoyer</button>
  </form>
  </div>
@endsection
