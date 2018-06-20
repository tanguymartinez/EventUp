@extends('layouts.app')

@section('content')

  <img class"separateur" src={{ URL::asset('img/separator.png') }}"" width="100" height="80">

<div class="createEvent">
  <form action="/creercompte" method="post">
    {{ csrf_field() }}

    <h3>CREER UN EVENEMENT</h3><br>


     <label for="inputCETitle">Titre de l'evenement : </label>
    <input class="inputCETitle" type="text" placeholder="Title" name="TitleEventCE" requierd><br>

    @if ($errors->has('TitleEventCE'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('TitleEventCE') }}</strong>
        </span>
    @endif

    <textarea class="inuptCEDescription" type="text" placeholder="Desciption" name="DescriptionEventCE"></textarea><br><br>

    <label for="inputCEMaxInsc">Nombre maximum d'inscriptions : </label>
    <input class="inputCEMaxInsc" type="text" name="maxinscCE"> <br><br>

    <label for="inputCELieuEvent">Lieu de l'événement : </label>
    <input class="inputCELieuEvent" type="text" name="lieueventCE"> <br><br>

    <label for="inputCEDateEvent">Date début de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateDebEventCE"><br><br>

    <label for="inputCEDateEvent">Date fin de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateFinEventCE"><br><br>

    <input type="checkbox" class="ckboxEventPayant" value="false" name="eventpayantCE">
     <label for="ckboxEventPayant">L'événement est-il payant ?</label><br><br>
     <p>Si oui, entrer le lien du site de payement</p>
     <input class="inputCEsitePayment" type="text" name="sitepaiementCE"><br><br>

     <button type="submit" class="btnConfirmationCA">
         {{ __('Valider') }}
     </button>
  </from >
 </div>
@endsection
