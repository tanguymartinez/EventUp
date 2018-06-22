@extends('layouts.app')

@section('content')



<div class="createEvent">
  <form action={{ route('event.store') }} method="post">
    {{ csrf_field() }}

    <h3>CREER UN EVENEMENT</h3><br>


     <label for="inputCETitle">Titre de l'evenement : </label>
    <input class="inputCETitle" type="text" placeholder="Title" name="TitleEventCE" required><br>

    @if ($errors->has('TitleEventCE'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('TitleEventCE') }}</strong>
        </span>
    @endif

    <textarea class="inuptCEDescription" type="text" placeholder="Desciption" name="DescriptionEventCE"></textarea><br><br>

    <label for="inputCEMaxInsc">Nombre maximum d'inscriptions : </label>
    <input class="inputCEMaxInsc" type="text" name="maxinscCE"> <br><br>

    <label for="inputCELieuEvent">Lieu de l'événement : </label>
    <select class="inputCELieuEvent" type="text" name="lieueventCE">
      @foreach($villes as $ville)
        <option value="{{ $ville->idVille }}">{{ $ville->nomVille }}</option>
      @endforeach
    </select><br><br>

    <label for="inputCEDateEvent">Date début de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateDebEventCE"><br><br>

    <label for="inputCEDateEvent">Date fin de l'événement : </label>
    <input class="inputCEDateEvent" type="date" name="dateFinEventCE"><br><br>

    <input type="checkbox" class="ckboxEventPayant" value="0" name="eventpayantCE">
     <label for="ckboxEventPayant">L'événement est-il payant ?</label><br><br>
     <p>Si oui, entrer le lien du site de payement</p>
     <input class="inputCEsitePayment" type="text" name="sitepaiementCE"><br><br>

     <button type="submit" class="btnConfirmationCA">
         {{ __('Valider') }}
     </button>
  </form>
 </div>
@endsection
