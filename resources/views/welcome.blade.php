@extends('layouts.app')
@section('scripts')
@endsection
@section('styles')
@endsection
@section('content')

<div id="homepage">

  <!-- Banner -->
    <div id="banner-wrapper">
      <div id="banner" class="box container">
        <div class="row">
          <div class="7u 12u(medium)">
            <h2>Welcome to Van Bong.</h2>
            <p>Find Vancouver dispensaries and become connected with a diverse community of bong enthusiasts just like you.</p>
          </div>
          <div class="5u 12u(medium)">
            <ul>
              <li><a onclick='$("#banner").hide()' class="button big icon fa-arrow-circle-right">Ok let's go</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <h1 class="text-center">Articles</h1>
    <!-- Articles -->
      <div id="features-wrapper">
        <div class="container">
          <div class="row">
            @if(isset($articles) && count($articles) > 0)
            @foreach($articles as $article)
            <div class="3u 6u(medium) 12u(small)">
              <!-- Box -->
                <section class="box feature">
                  <a href="{{ route( 'articles.show', ['id'=>$article->id] ) }}" class="image featured"><img style="border-radius: 25px; width: inherit; height: inherit;" src="{{$article->img_url}}" alt="" /></a>
                  <div class="inner">
                    <header>
                      <h2>{{$article->title}}</h2>
                      <h5>by {{$article->author}}</h5>
                      <h3>{{ucfirst($article->category)}}</h3>
                      <h4>{{$article->tagline}}</h4>
                    </header>
                    <p>{{substr($article->text, 0 ,150) . '...'}}</p>
                    <a href="{{ route( 'articles.show', ['id'=>$article->id] ) }}" class="button icon fa-arrow-circle-right">Continue Reading</a>
                  </div>
                </section>

            </div>
            @endforeach
            @endif
            @if(isset($newsItems) && count($newsItems) > 0)
            @foreach($newsItems as $newsItem)
            <div class="3u 6u(medium) 12u(small)">
              <!-- Box -->
                <section class="box feature">
                  <a href="{{$newsItem['link']}}" class="image featured"><img style="border-radius: 25px; width: inherit; height: inherit;" src="{{$newsItem['img']}}" alt="" /></a>
                  <div class="inner">
                    <header>
                      <h2>{{$newsItem['headline']}}</h2>
                      <h5>by {{$newsItem['source']}}</h5>
                      <h3>Local News</h3>
                    </header>
                    <p>{{$newsItem['description']}}</p>
                  </div>
                </section>
            </div>
            @endforeach
            @else
            <div class="">
              <p>{{dd($newsItems)}}</p>
            </div>
            <!--else end -->
            @endif
          </div>
        </div>
      </div>

    <!-- Sponsored content -->
      <div id="features-wrapper">
        <div class="container">
          <div class="row">
            <div class="12u 12u(medium)">
              <!-- Box -->
                <section class="box feature">
                  <a href="#" class="image featured"><img style="border-radius: 25px; width: inherit; height: inherit;" src="http://3.bp.blogspot.com/-1hhtUWZzEnA/UTEVxVfRqkI/AAAAAAAAANU/yOGESbaOdpM/s1600/Spring-Cleaning-SALE---March-2013---Facebook2.png" alt="" /></a>
                  <div class="inner">
                    <header>
                      <h2>Sponsored Content</h2>
                    </header>
                  </div>
                </section>

            </div>
          </div>
        </div>
      </div>
      <!-- Sponsor Vessels  -->

<h1 class="text-center">Sponsored Products</h1>
      <!-- Sponsor Vessels  -->
      <div id="features-wrapper">
        <div class="container">
          <div class="row">

            @if(isset($sponsorVessels) && count($sponsorVessels) > 0)
              @foreach($sponsorVessels as $sponsorVessel)

              <div class="4u 12u(medium)">
                <!-- Box -->
                  <section class="box feature">
                    <a href="{{$sponsorVessel['purchaselink']}}" style="width: inherit; height:inherit;" class="image featured"><img src="{{$sponsorVessel['img']}}" alt="" /></a>
                    <div class="inner" style="word-wrap: break-word">
                      <header>
                        <h6>New at Ignite Smoke Shop!</h3>
                        @if(strlen($sponsorVessel['name'])>19)
                          <?php $longname = substr($sponsorVessel['name'], 0, 16) . "...";  ?>
                          <h2>{{$longname}}</h2>
                        @else
                          <h2>{{$sponsorVessel['name']}}</h2>
                        @endif
                        <p>{{$sponsorVessel['brand']}}</p>
                        <p>{{$sponsorVessel['price']}}</p>
                      </header>
                    </div>
                  </section>
                </div>
                @endforeach
              @endif
            </div>
          </div>
        </div>

  <!-- Main -->
    <div id="main-wrapper">
      <div class="container">
        <div class="row 200%">
          <div class="4u 12u(medium)">



            <!-- Sidebar -->
              <div id="sidebar">
                <section class="widget thumbnails">
                  <h3>Interesting stuff</h3>
                  <div class="grid">
                    <div class="row 50%">
                      <div class="6u"><a href="#" class="image fit"><img src="css/images/pic04.jpg" alt="" /></a></div>
                      <div class="6u"><a href="#" class="image fit"><img src="css/images/pic05.jpg" alt="" /></a></div>
                      <div class="6u"><a href="#" class="image fit"><img src="css/images/pic06.jpg" alt="" /></a></div>
                      <div class="6u"><a href="#" class="image fit"><img src="css/images/pic07.jpg" alt="" /></a></div>
                    </div>
                  </div>
                  <a href="#" class="button icon fa-file-text-o">More</a>
                </section>
              </div>

          </div>
          <div class="8u 12u(medium) important(medium)">

            <!-- Content -->
              <div id="content">
                <section class="last">
                  <h2>A footer Heaing</h2>
                  <p>Get people tlaking about your bong shop or dispensary, and see how it stacks up.</p>
                  <a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
                </section>
              </div>

          </div>
        </div>
      </div>
    </div>

  <!-- Footer -->
    <div id="footer-wrapper">
      <footer id="footer" class="container">
        <div class="row">
          <div class="3u 6u(medium) 12u$(small)">

            <!-- Links -->
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

            <!-- Links -->
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

            <!-- Links -->
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

            <!-- Contact -->
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
        <div class="row">
          <div class="12u">
            <div id="copyright">
              <ul class="menu">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

  </div>
  @endsection
