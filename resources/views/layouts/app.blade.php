<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')

    <!-- Scripts -->
    <script src="{{asset('js/main.js')}}"></script>
  	<script src="{{asset('js/jquery.min.js')}}"></script>
  	<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
  	<script src="{{asset('js/skel.min.js')}}"></script>
  	<script src="{{asset('js/util.js')}}"></script>
  	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  	<script src="assets/js/main.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <div id="page-wrapper homepage">
    <div id="app">
      <!-- Header -->
        <div id="header-wrapper">
          <header id="header" class="container">

            <!-- Logo -->
              <div id="logo">
                <h1><a href="/">VanBong.ca</a></h1>
                <span>for all your Vancouver Bong and Bud Info</span>
              </div>

            <!-- Nav -->
              <nav id="nav" class="navbar-nav">
                <ul>
                  <li><a href="#left-sidebar" data-toggle="collapse">Left Sidebar</a></li>
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>

                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                </ul>
              </nav>

          </header>
        </div>
        @yield('styles')
        <container>
        @include('includes.sidebar')
        @yield('content')
        </container>

    </div>
  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>