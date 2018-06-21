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
        @if(Auth::check())
          <li>
            <a href="/moncompte">MON COMPTE</a>
          </li>
        @else
          <li>
            <a href="/login">MON COMPTE</a>
          </li>
        @endif
          <input class="inputSearch" type="text" placeholder="Search" aria-label="Search">
          <button class="btnSearch" type="submit" >Search</button>

          @if(Auth::check())
            <li>
              <a href= "{{ URL::route('users.logout') }}">DECONNEXION</a>
            </li>
          @else
            <li>
              <a href="/login">CONNEXION</a>
            </li>
          @endif
      </ul>
    </div>
  </nav>
