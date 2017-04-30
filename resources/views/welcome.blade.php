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

    <!-- Articles -->
      <div id="features-wrapper">
        <div class="container">
          <div class="row">
            <div class="4u 12u(medium)">
              <!-- Box -->
                <section class="box feature">
                  <a href="#" class="image featured"><img style="border-radius: 25px; width: inherit; height: inherit;" src="http://www.cannabisculture.com/files/images/gmm_0.jpg" alt="" /></a>
                  <div class="inner">
                    <header>
                      <h2>Tourism</h2>
                    </header>
                    <p>*Before you decide to come to Vancouver, be sure to inform yourself about the current marijuana laws. See our Vancouver Marijuana Laws for more information.  We do not advocate for breaking the law. *</p>
                    <p>So you’ve decided to come to ‘Vansterdam’ , but you don’t know where t go. Here are some of the best places to go to experience the famous BC Bud! </p>
                    <p>Your best bet would be to head go downtown to “The New Amsterdam Café,” located at 301 Hastings Street W. This is the most popular place to smoke up in Vancouver. Also, next door is “Marc Emery’s Cannabis Culture” vapor lounge. For a small fee, you are able to vape or smoke to your heart’s content. There is only one issue… Weed is technically still illegal here, so you will not be able to purchase it at these types of businesses. You will see signs on all the walls saying “You cannot buy cannabis here. Do not ask.” The staff will not tell you anything about how to get green, so listen to the signs and do not try to ask them. </p>
                    <p>Your best bet would be to head go downtown to “The New Amsterdam Café,” located at 301 Hastings Street W. This is the most popular place to smoke up in Vancouver. Also, next door is “Marc Emery’s Cannabis Culture” vapor lounge. For a small fee, you are able to vape or smoke to your heart’s content. There is only one issue… Weed is technically still illegal here, so you will not be able to purchase it at these types of businesses. You will see signs on all the walls saying “You cannot buy cannabis here. Do not ask.” The staff will not tell you anything about how to get green, so listen to the signs and do not try to ask them. </p>
                    <p>There are plenty of simple ways to get what you want. It is extremely easy to get in the area of the café. The quickest and easiest way to get it would be to ask people in the immediate area around the café. Do not try to buy off people inside the café, as that is not allowed. If you ask around, you will be able to find somebody to buy from within minutes. That area is a hotspot, so there is no shortage of sellers. However, if you prefer not to do this, as it may seem sketchy, than there are other ways to get what you want. Many of the dispensaries in Vancouver have already dropped their requirement for a medicinal card, and are openly selling to recreational users above the age of 19. For example, you can go to “The Medicinal Cannabis Dispensary,” at either one of their locations (880 East Hastings St or 1182 Thurlow Street). As of last year, they publicly dropped their requirement for a medicinal card, even though it is technically illegal. Going to one of those places would probably be the best experience, as you can have a wide selection of strains, and you will not have to worry whether or not the product is laced. </p>
                  </div>
                </section>

            </div>
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


        <div id="features-wrapper">
          <div class="container">
            <div class="row">
              @if(count($sponsorVessels) > 0)
              @foreach($sponsorVessels as $sponsorVessel)
              <div class="4u 12u(medium)">
                <!-- Box -->
                  <section class="box feature">
                    <a href="{{$sponsorVessel->purchaselink}}" class="image featured"><img src="{{$sponsorVessel->img}}" alt="" /></a>
                    <div class="inner">
                      <header>
                        <h3>New at Ignite Smoke Shop!</h3>
                        <h2>{{$sponsorVessel['name']}}</h2>
                        <p>{{$sponsorVessel['brand']}}</p>
                      </header>
                      <p>{{$sponsorVessel['price']}}</p>
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
