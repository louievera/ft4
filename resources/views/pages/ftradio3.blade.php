<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116554085-1"></script>{{-- Global site tag (gtag.js) - Google Analytics --}}
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-116554085-1');
    </script>{{-- End script for Google Analytics --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">{{-- CSRF Token --}}
    <title>{{ config('app.name', 'FlipTop') }}</title>
    <meta charset="utf-8">{{-- Styles --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
</head>
<body>

  <main class="py-5">

    <div class="container">

        <div class="text-center">
          <img src="{{ asset('images/radio/FliptopRadioStation.png') }}" alt="FlipTop Radio">
          <h3>STATION 3</h3>
          <iframe id="embed_player" frameborder="0" width="280" height="216" src="https://fliptop3.airtime.pro/embed/player?stream=auto"></iframe>
          <hr>
          <a href="/fliptop_radio_station1"><button type="button" class="btn btn-danger">Station 1</button></a>
          <a href="/fliptop_radio_station2"><button type="button" class="btn btn-secondary">Station 2</button></a>
          <a href="/fliptop_radio_station3"><button type="button" class="btn btn-warning">Station 3</button></a>
          <hr>
          {!! $page->body !!}
          <br>
        </div>

      </div> <!-- end of container -->
  </main>

<br>
</body>
</html>
