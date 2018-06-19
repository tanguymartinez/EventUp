<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>EventUP</title>
      <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    </head>
    <body>
      <header>
      @include('inc.navbar')
      @yield('frontPage')
      </header>
      @yield('content')

      @include('inc.footer')
    </body>
  </html>
