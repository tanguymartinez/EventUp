@extends('layouts.app')

@section('content')
  <div class="container">
    @foreach($events as $event)
      <div class="event-container">
        <h1>{{ $event->nomEvenement }}</h1>
        <p class="event-info">Max inscrits: {{ $event->nbMaxInscrits }}, </p>
        <p class="event-content">{{ $event->DescriptionEvent }}</p>
      </div>
    @endforeach
  </div>
@endsection
