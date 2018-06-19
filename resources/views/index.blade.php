@extends('layouts.app')

@section('frontPage')
<div class="frontPage">
   <h1 class="hvr-grow"><img src={{ URL::asset('img/logotxt2.png') }} alt="EventUp" class="logo"></h1>
   <div class="hvr-sink"><a href="#content"><img src={{ URL::asset('img/arrow.png') }} alt="arrow down" class="arrow"></a></div>
</div>
@endsection

@section('content')
  <div id="content">

    <h5>ACTUALITES</h5>
    <div class="eventAnnonceContent">
      <h2> Title ......</h2>
        <p> Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>
        <button class="btnEnSavoirPlus" type="submit" >En savoir plus</button>
    </div>

    <div class="eventAnnonceContent">
      <h2> Title ......</h2>
        <p> Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>
        <button class="btnEnSavoirPlus" type="submit" >En savoir plus</button>
    </div>

    <div class="eventAnnonceContent">
      <h2> Title ......</h2>
        <p> Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.</p>
        <button class="btnEnSavoirPlus" type="submit" >En savoir plus</button>
    </div>
  </div>

@endsection
