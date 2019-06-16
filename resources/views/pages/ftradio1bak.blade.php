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
          <h3>STATION 1</h3>
          <iframe id="embed_player" frameborder="0" width="280" height="216" src="https://fliptop1.airtime.pro/embed/player?stream=auto"></iframe>
          <hr>
          <a href="/fliptop_radio_station1"><button type="button" class="btn btn-danger">Station 1</button></a>
          <a href="/fliptop_radio_station2"><button type="button" class="btn btn-secondary">Station 2</button></a>
          <a href="/fliptop_radio_station3"><button type="button" class="btn btn-warning">Station 3</button></a>
          <hr>
          <img src="{{ asset('images/radio/station1_playlist.jpg') }}">
          <hr>
          <h4>12-Hour Loop Schedule!</h4>
          <p>Powered by Supreme Fist</p>
          <hr>
          <p>8:00 AM - 10:00 AM - Wantusawa</p>
          <p>10:00 AM - 12:00 NN - Unang Dekada</p>
          <p>12:00 NN - 2:00 PM - Bakbakan Mix</p>
          <p>2:00 PM - 3:30 PM - Barabara Barbaro</p>
          <p>3:30 PM - 5:30 PM - Libog Lang Yan</p>
          <p>5:30 PM - 8:00 PM - Walang Hihinto</p>
          <p>8:00 PM - 8:00 AM - Repeat Loop</p>
    </div>

      </div> <!-- end of container -->
  </main>


<br>
</body>
</html>
