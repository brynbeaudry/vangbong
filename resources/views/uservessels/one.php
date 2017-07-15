@extends('layouts.app')
@section('content')
dd($vessel->id);
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$owner->name}}'s Post</div>

                <div class="panel-body">
                  <div id="features-wrapper">
                    <div class="container">
                      <div class="row">


                          <div class="4u 12u(medium)">
                            <!-- Box -->
                              <section class="box feature">
                                <!--  <a href="#" class="image featured"><img src="{{route('/vessels/' . $vessel->id . '/image')}}" alt="" /></a>-->

                                <div class="inner">
                                  <header>
                                    <h2>{{$vessel->title}}</h2>
                                    <p>{{$vessel->description}}</p>
                                  </header>

                                  <p>{{$owner->name}}</p>
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
