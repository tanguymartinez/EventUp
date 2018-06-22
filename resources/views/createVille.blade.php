@extends('layouts.app')

@section('content')



<div class="create-ville">
  <form action={{ route('ville.store') }} method="post">
    {{ csrf_field() }}

    <h3>Ajouter une ville</h3><br>
    <label for="inputCVName">Nom de la ville : </label>
    <input class="inputCVName" type="text" placeholder="Nom" name="name" required><br>
    <label for="inputCVcp">Code postal : </label>
    <input class="inputCVcp" type="text" name="cp"> <br><br>
     <button type="submit" class="btnConfirmationCA">
         {{ __('Valider') }}
     </button>
  </form>
 </div>
@endsection
