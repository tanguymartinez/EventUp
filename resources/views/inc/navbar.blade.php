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
            <a href="/account">MON COMPTE</a>
          </li>
        @else
          <li>
            <a href="/connexion">MON COMPTE</a>
          </li>
        @endif
        <form action="{{ route('search') }}" method="post">
          @csrf
          <input class="inputSearch" type="text" placeholder="Search" aria-label="Search" name="title">
          <button class="btnSearch" type="submit" >Search</button>
        </form>
          @if(Auth::check())
            <li>
              <form method="post" action="{{ URL::route('logout') }}">
               @csrf
               <button type="submit" class="btnLogout">DECONNEXION</button>
              </form>
            </li>
          @else
            <li>
              <a href="/login">CONNEXION</a>
            </li>
          @endif
      </ul>
    </div>
  </nav>
