@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post a FAT RIP or a SICK BONG</div>

                <div class="panel-body">
                  <div id="features-wrapper">
                    <div class="container">
                      <div class="row">


                          <div class="4u 12u(medium)">
                            <!-- Box -->
                              <section class="box feature">
                                <a href="#" class="image featured"><img src="{img}}" alt="" /></a>
                                <div class="inner">
                                  <header>
                                    <h2>{{$title}}</h2>
                                    <p>{{$description}}</p>
                                  </header>

                                  <p>{{$ownerName}}</p>
                                </div>
                              </section>
                            </div>

                        </div>
                      </div>
                    </div
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
