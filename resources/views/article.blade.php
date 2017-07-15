@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$article->title}}</div>
                <div class="panel-body">
                  <h2>by {{$article->author}}</h2>
                  <h3 ><em>{{$article->tagline}}</em></h3>
                  <img class="img-responsive" src="{{$article->img_url}}" alt="">
                  <p>{!!$article->text!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
