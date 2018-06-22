@extends('layouts.app')

@section('frontPage')
<div class="frontPage">
   <h1 class="hvr-grow"><img src={{ URL::asset('img/logotxt2.png') }} alt="EventUp" class="logo"></h1>
   <div class="hvr-sink"><a href="#content"><img src={{ URL::asset('img/arrow.png') }} alt="arrow down" class="arrow"></a></div>
</div>
@endsection
@include('inc.lblCreateEvent')
@section('content')
  <div id="content">
    <h5>ACTUALITES</h5>
        @foreach($events as $event)
          <div class="eventAnnonceContent">
            <h1>{{ $event->nomEvenement }}</h1>
            <p>{{ $event->DescriptionEvent }}</p>
            <a href="{{ route('event.show', $event->idEvent) }}">Afficher</a>
          </div>
        @endforeach
  </div>

@endsection
