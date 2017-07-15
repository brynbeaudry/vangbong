<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/vanbong.css')}}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
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
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="collapse navbar-collapse cnt-blk-vert-parent" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    -->
                    <div class="cnt-blk-vert-child absolute-right hidden-xs">
                      <div class="btn-group">
                      @if (Auth::guest())
                        <a class="btn btn-default lnk-btn" style="on-hover: none;" href="{{route('login')}}">Login</a>
                        <a class="btn btn-default lnk-btn" style="background: #0b891e; color: #fff;" href="{{ route('register') }}">Register</a>
                      @else
                        <a class="btn btn-primary lnk-btn" style="on-hover: none;" href="{{ route('vessels.create') }}">Post a Bong</a>
                        <a class="btn btn-default lnk-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Logout {{Auth::user()->name}}</a>
                      @endif
                      </div>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a role="button" class="btn btn-default lnk-btn" href="{{route('login')}}">Login</a></li>
                        <li><a role="button" class="btn btn-default lnk-btn btn-reg" style="background: #0b891e; color: #fff;" href="{{ route('register') }}">Register</a></li>
                        @else
                          <li><a role="button" class="btn btn-primary lnk-btn" href="{{ route('vessels.create') }}" style="color:white;">Post a Bong</a></li>
                            <li>
                                <a role="button" class="btn btn-default lnk-btn" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout {{ ucfirst(Auth::user()->name )}}
                                </a>
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

          <div id="footer-wrapper">
            <footer id="footer" class="container">
                      <!-- Footer
              <div class="row">
                <div class="3u 6u(medium) 12u$(small)">

                  <!-- Links
                    <section class="widget links">
                      <h3>Random Stuff</h3>
                      <ul class="style2">
                        <li><a href="#">Etiam feugiat condimentum</a></li>
                        <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                        <li><a href="#">Sed porttitor cras in erat nec</a></li>
                        <li><a href="#">Felis varius pellentesque potenti</a></li>
                        <li><a href="#">Nullam scelerisque blandit leo</a></li>
                      </ul>
                    </section>

                </div>
                <div class="3u 6u$(medium) 12u$(small)">

                  <!-- Links
                    <section class="widget links">
                      <h3>Random Stuff</h3>
                      <ul class="style2">
                        <li><a href="#">Etiam feugiat condimentum</a></li>
                        <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                        <li><a href="#">Sed porttitor cras in erat nec</a></li>
                        <li><a href="#">Felis varius pellentesque potenti</a></li>
                        <li><a href="#">Nullam scelerisque blandit leo</a></li>
                      </ul>
                    </section>

                </div>
                <div class="3u 6u(medium) 12u$(small)">

                  <!-- Links
                    <section class="widget links">
                      <h3>Random Stuff</h3>
                      <ul class="style2">
                        <li><a href="#">Etiam feugiat condimentum</a></li>
                        <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                        <li><a href="#">Sed porttitor cras in erat nec</a></li>
                        <li><a href="#">Felis varius pellentesque potenti</a></li>
                        <li><a href="#">Nullam scelerisque blandit leo</a></li>
                      </ul>
                    </section>

                </div>
                <div class="3u 6u$(medium) 12u$(small)">

                  <!-- Contact
                    <section class="widget contact last">
                      <h3>Contact Us</h3>
                      <ul>
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                      </ul>
                      <p>1234 Fictional Road<br />
                      Nashville, TN 00000<br />
                      (800) 555-0000</p>
                    </section>

                </div>
              </div>
               -->
              <div class="row">
                <div class="12u">
                  <div id="copyright">
                    <ul class="menu">
                      <li>&copy; Bryn Beaudry 2017. All rights reserved</li><li>Design: <a href="http://bbeau.ca">Bbeau.ca</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
          </div>
    </div>
  </div>
  <script src="{{asset('js/load-image.js')}}"></script>
  <script src="{{asset('js/load-image-scale.js')}}"></script>
  <script src="{{asset('js/load-image-meta.js')}}"></script>
  <script src="{{asset('js/load-image-fetch.js')}}"></script>
  <script src="{{asset('js/load-image-exif.js')}}"></script>
  <script src="{{asset('js/load-image-exif-map.js')}}"></script>
  <script src="{{asset('js/load-image-orientation.js')}}"></script>
  @yield('scripts')
</body>
</html>
