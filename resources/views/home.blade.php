@extends('layouts.app')
@section('scripts')
@endsection
@section('styles')
@endsection
@section('content')
  <!-- UserVessels -->
  @if(isset($userVessels) && count($userVessels) > 0)
    @foreach($userVessels as $userVessel)
    <div id="features-wrapper">
      <div class="container">
        <div class="row">
            <div class="4u 12u(medium)">
              <!-- Box -->
                <section class="box feature">
                  <a href="#" class="image featured"><img src="{{$userVessel->img}}" alt="" /></a>
                  <div class="inner">
                    <header>
                      <h2>{{$userVessel->title}}</h2>
                      <p>{{$userVessel->description}}</p>
                    </header>
                    <p>{{User::find($userVessel->ownerId)->get()-first()}}</p>
                  </div>
                </section>
              </div>
          </div>
        </div>
      </div>
      @endforeach
    @endif



    <!-- Sponsored content
      <div id="features-wrapper">
        <div class="container">
          <div class="row">
            <div class="12u 12u(medium)">

              <!-- Box
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
      </div>-->
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

  <!-- Main
    <div id="main-wrapper">
      <div class="container">
        <div class="row 200%">
          <div class="4u 12u(medium)">



            <!-- Sidebar
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

            <!-- Content
              <div id="content">
                <section class="last">
                  <h2>So what's this all about?</h2>
                  <p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
                  Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
                  <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
                  <a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
                </section>
              </div>

          </div>
        </div>
      </div>
    </div>
    -->
  @endsection
