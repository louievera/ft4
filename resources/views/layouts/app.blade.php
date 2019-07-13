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
    <meta name="google-site-verification" content="3R-uEHvXsyhZl-Vwn-3l7sdlcXckCUUURFocwJg_hU8" />{{-- G-Suite Verification --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">{{-- CSRF Token --}}
    <title>FlipTop Battle League</title>
    <meta charset="utf-8">{{-- Styles --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@yield('metatags') {{-- Yield meta tags for facebook and other providers --}}
@yield('styling'){{-- Yield additonal CSS or CDNs --}}
</head>
<body>
    <div id="app">{{-- Authentication ID --}}
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">{{-- Navbar --}}
        <div class="container-fluid">
          <a class="navbar-brand" target="blank" href="/fliptop_radio_station1">
            <img src="{{ asset('images/radio_ft_icon.png') }}" alt="FlipTop Radio">
          </a>
          <a class="navbar-brand" href="/">
            <img src="{{ asset('images/fliptop.png') }}" alt="FlipTop">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">{{-- Hamburger --}}
            <span class="navbar-toggler-icon"></span>
          </button>{{-- End of Hamburger --}}
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}"><strong>Home</strong></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="/promos"><strong>Promos</strong></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/videos"><strong>Videos</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('article_browse') }}"><strong>Articles</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('lyric_browse') }}"><strong>Lyrics</strong></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('artists') }}"><strong>Artists</strong></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tryouts') }}"><strong>Tryouts</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target="blank" href="/fliptop_radio_station1"><strong>Radio</strong></a>
              </li>
              @guest
                  <li><a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user"></i> {{ __('Sign Up') }}</strong></a></li>
                  <li><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</strong></a></li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <strong><i class="fas fa-user"></i> {{ Auth::user()->name }}</strong><span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('Form_changePassword') }}">Change Password</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest

            </ul>
          </div>
        </div>
      </nav>
      {{-- End of Navbar --}}

@yield('highlight')

      <main class="py-5">
        <div class="container-fluid">
            @include('layouts.messages')
            @yield('content')
        </div> {{-- End of Container --}}

      </main>
    </div>{{-- End of ID --}}

    <footer class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
                  <a class="text-muted">Copyright 2018. All rights reserved.</a>
              </div>
              <div class="col-md-6">
                <p class="text-right"><a class="text-muted" href="/terms">Terms and Conditions</a> <a class="text-muted" href="/privacy">Privacy</a></p>
              </div>
          </div>
      </div>
    </footer>


    {{-- jQuery first, then Bootstrap JS Bundle which includes Popper.js --}}
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@yield('scripts') {{-- Yield additonal javascripts for validation --}}

</body>
</html>
