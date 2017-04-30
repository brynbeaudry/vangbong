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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/vanbong.css')}}">


    <!-- Scripts -->
  	<script src="{{asset('js/jquery.min.js')}}"></script>
  	<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
  	<script src="{{asset('js/skel.min.js')}}"></script>
  	<script src="{{asset('js/util.js')}}"></script>
  	<!--[if lte IE 8]><script src={{asset('js/ie/respond.min.js')}}"></script><![endif]-->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

        function goToURL(url) {
          location.href = url;
        }
    </script>
</head>
<body>

    <div id="app">
      <!-- Nav -->
      <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" onclick="goToURL({{ url('/') }})">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="lara-logo lnk-btn" onclick="goToURL({{ url('/') }})" href="{{ url('/') }}" style= "z-index: 3">
                        VanBong.ca
                    </a>
                    <span class="lara-logo hidden-xs">for all your Vancouver Bong and Bud Info</span>
                </div>

                <div class="collapse navbar-collapse cnt-blk-vert-parent" style="z-index: 1" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    -->
                    <div class="cnt-blk-vert-child absolute-right hidden-xs" style= "z-index: 2">
                      <div class="btn-group">
                        <a class="btn btn-default lnk-btn" style="on-hover: none;" href="{{route('login')}}">Login</a>
                        <a class="btn btn-default lnk-btn" style="background: #0b891e; color: #fff;" href="{{ route('register') }}">Register</a>
                      </div>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a role="button" class="btn btn-default lnk-btn" href="{{route('login')}}">Login</a></li>
                        <li><a role="button" class="btn btn-default lnk-btn btn-reg" style="background: #0b891e; color: #fff;" href="{{ route('register') }}">Register</a></li>
                        @else
                          <li><a href="{{ route('vessels.create') }}">Post a Bong</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
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
                </div>
            </div>

        </nav>
      <!-- Header -->
      <div id="page-wrapper homepage">
        <container>
        @yield('content')
        </container>

    </div>
  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
