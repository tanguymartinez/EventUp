@if(Auth::check())
<a class="txtCreateEvent" href="/event/create">
  Créer un Event <button class="plus">+</button>
</a>
@else
<a class="txtCreateEvent" href="/login">
  Créer un Event <button class="plus">+</button>
</a>
@endif
