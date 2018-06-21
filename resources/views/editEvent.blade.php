@extends('layouts.app')

@section('content')

  

<div class="createEvent">
  <form action="{{ route('event.update', $event->idEvent) }}" method="post">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <h3>EDITER UN EVENEMENT</h3><br>


     <label for="inputCETitle">Titre de l'evenement : </label>
    <input class="inputCETitle" type="text" placeholder="Title" name="TitleEventCE" value="{{ $event->nomEvenement }}" required><br>

    @if ($errors->has('TitleEventCE'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('TitleEventCE') }}</strong>
        </span>
    @endif

    <textarea class="inuptCEDescription" type="text" placeholder="Desciption" name="DescriptionEventCE">{{ $event->DescriptionEvent }}</textarea><br><br>

    <label for="inputCEMaxInsc">Nombre maximum d'inscriptions : </label>
    <input class="inputCEMaxInsc" type="text" name="maxinscCE" value="{{ $event->nbMaxInscrits }}"> <br><br>

    <label for="inputCELieuEvent">Lieu de l'événement : </label>
    <input class="inputCELieuEvent" type="text" name="lieueventCE" value="{{ $event->villeEvent }}"> <br><br>

    <label for="inputCEDateEvent">Date début de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateDebEventCE" value="{{ $event->dateDeb }}"><br><br>

    <label for="inputCEDateEvent">Date fin de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateFinEventCE" value="{{ $event->dateFin }}"><br><br>

    <input type="checkbox" class="ckboxEventPayant" value="@if (!empty($event->EvenementPayant)) 1 @endif" name="eventpayantCE" @if(!empty($event->EvenementPayant)) checked @endif>
     <label for="ckboxEventPayant">L'événement est-il payant ?</label><br><br>
     <p>Si oui, entrer le lien du site de payement</p>
     <input class="inputCEsitePayment" type="text" name="sitepaiementCE"><br><br>

     <button type="submit" class="btnConfirmationCA">
         {{ __('Valider') }}
     </button>
  </form>
 </div>
@endsection
