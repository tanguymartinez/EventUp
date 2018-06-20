  <!-- Navigation -->
  <nav class="nav-top">
    <div class="Menu">
      <ul>

        <li>
          <a href="/">ACTUALITES</a>
        </li>
        <li>
          <a href="/calendrier">CALENDRIER</a>
        </li>
        <li>
          <a href="/contact">CONTACT</a>
        </li>
        <li>
          <a href="/moncompte">MON COMPTE</a>
        </li>
          <input class="inputSearch" type="text" placeholder="Search" aria-label="Search">
          <button class="btnSearch" type="submit" >Search</button>

          @if(Auth::check())
          <li>
            <a href="{{ URL::route('user.logout') }}">DECONNEXION</a>
          </li>
          @else

          <li>
            <a href="/login">CONNEXION</a>
          </li>
          @endif
      </ul>
    </div>
  </nav>
